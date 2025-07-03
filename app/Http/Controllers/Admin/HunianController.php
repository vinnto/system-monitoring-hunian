<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Tower;
use App\Models\Hunian;
use App\Models\Lantai;
use App\Models\Lokasi;
use App\Models\NoUnit;
use App\Models\LuasTipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HunianController extends Controller
{
    public function index()
    {
        $hunians = Hunian::with(['lokasi', 'tower', 'lantai', 'noUnit', 'luasTipe'])
            ->orderBy('id', 'asc')
            ->get();

        $lokasis = Lokasi::all();
        $towers = Tower::all();
        $lantais = Lantai::all();
        $noUnits = NoUnit::all();
        $luasTipes = LuasTipe::all();

        return view('pages.admin.master.list-hunian', compact(
            'hunians',
            'lokasis',
            'towers',
            'lantais',
            'noUnits',
            'luasTipes'
        ));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'lokasi' => 'required|string|max:255',
                'tower' => 'required|string|max:255',
                'lantai' => 'required|string|max:255',
                'no_unit' => 'required|string|max:255',
                'luas_tipe' => 'required|string|max:255',
            ]);

            // Create atau ambil data dari tabel master
            $lokasi = Lokasi::firstOrCreate(['lokasi' => $request->lokasi]);
            $tower = Tower::firstOrCreate(['tower' => $request->tower]);
            $lantai = Lantai::firstOrCreate(['lantai' => $request->lantai]);
            $noUnit = NoUnit::firstOrCreate(['no_unit' => $request->no_unit]);
            $luasTipe = LuasTipe::firstOrCreate(['luas_tipe' => $request->luas_tipe]);

            // Cek apakah kombinasi hunian sudah ada
            $existingHunian = Hunian::where([
                'lokasi_id' => $lokasi->id,
                'tower_id' => $tower->id,
                'lantai_id' => $lantai->id,
                'no_unit_id' => $noUnit->id,
                'luas_tipe_id' => $luasTipe->id,
            ])->first();

            if ($existingHunian) {
                return redirect()->back()->with('error', 'Hunian dengan kombinasi ini sudah ada!');
            }

            // Buat data hunian baru
            Hunian::create([
                'lokasi_id' => $lokasi->id,
                'tower_id' => $tower->id,
                'lantai_id' => $lantai->id,
                'no_unit_id' => $noUnit->id,
                'luas_tipe_id' => $luasTipe->id,
            ]);

            DB::commit();
            return redirect()->route('hunian.index')->with('success', 'Hunian berhasil ditambahkan!');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hunian $hunian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hunian $hunian)
    {
        //
    }
}
