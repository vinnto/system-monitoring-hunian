<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\NoUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class NoUnitController extends Controller
{
    public function index()
    {
        $no_units = NoUnit::orderBy('id', 'asc')->get();
        return view('pages.admin.master.list-no-unit', compact('no_units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_unit' => 'required'
        ]);

        try {
            $no_unit = new NoUnit();
            $no_unit->no_unit = $request->no_unit;
            $no_unit->save();

            return redirect()->route('no-unit.index')->with('success', 'No Unit berhasil ditambahkan');
        } catch (Exception $e) {
            Log::error('Error tambah no unit: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menghapus No Unit. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $no_unit = NoUnit::findOrFail($id);
            $no_unit->update([
                'no_unit' => $request->no_unit
            ]);

            return redirect()->route('no-unit.index')
                ->with('success', 'No Unit berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error('Error update no unit: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui no unit. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        try {
            $no_unit = NoUnit::findOrFail($id);
            $no_unit->delete();

            return redirect()->route('no-unit.index')
                ->with('success', 'No Unit berhasil dihapus!');
        } catch (Exception $e) {
            Log::error('Error hapus no unit: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Gagal menghapus no unit. Silakan coba lagi.');
        }
    }
}
