<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\LuasTipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class LuasTipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $luas_tipes = LuasTipe::orderBy('id', 'asc')->get();
        return view('pages.admin.master.list-luas-tipe', compact('luas_tipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'luas_tipe' => 'required'
        ]);

        try {
            $luas_tipe = new LuasTipe();
            $luas_tipe->luas_tipe = $request->luas_tipe;
            $luas_tipe->save();

            return redirect()->route('luas-tipe.index')->with('success', 'Luas Tipe berhasil ditambahkan');
        } catch (Exception $e) {
            Log::error('Error tambah tipe: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menghapus luas tipe. Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $luas_tipe = LuasTipe::findOrFail($id);
            $luas_tipe->update([
                'luas_tipe' => $request->luas_tipe
            ]);

            return redirect()->route('luas-tipe.index')
                ->with('success', 'luas tipe berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error('Error update luas tipe: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal memperbarui luas tipe. Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $luas_tipe = LuasTipe::findOrFail($id);
            $luas_tipe->delete();

            return redirect()->route('luas-tipe.index')
                ->with('success', 'luas tipe berhasil dihapus!');
        } catch (Exception $e) {
            Log::error('Error hapus luas tipe: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Gagal menghapus luas tipe. Silakan coba lagi.');
        }
    }
}
