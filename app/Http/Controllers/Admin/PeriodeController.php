<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PeriodeController extends Controller
{
    public function index()
    {
        $periodes = Periode::orderBy('id', 'asc')->get();
        return view('pages.admin.master.list-periode', compact('periodes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required',
            'semester' => 'required|in:ganjil,genap',
            'tgl_awal' => 'required|date',
            'tgl_akhir' => 'required|date',
        ]);

        try {
            $periode = new Periode();
            $periode->tahun = $request->tahun;
            $periode->semester = $request->semester;
            $periode->tgl_awal = $request->tgl_awal;
            $periode->tgl_akhir = $request->tgl_akhir;
            $periode->save();

            return redirect()->route('periode.index')->with('success', 'Periode berhasil ditambahkan');
        } catch (Exception $e) {
            Log::error('Error tambah periode: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menghapus Periode. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $periode = Periode::findOrFail($id);
            $periode->update([
                'tahun' => $request->tahun,
                'semester' => $request->semester,
                'tgl_awal' => $request->tgl_awal,
                'tgl_akhir' => $request->tgl_akhir,
            ]);

            return redirect()->route('periode.index')
                ->with('success', 'Periode berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error('Error update Periode: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui Periode. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        try {
            $periode = Periode::findOrFail($id);
            $periode->delete();

            return redirect()->route('periode.index')
                ->with('success', 'Periode berhasil dihapus!');
        } catch (Exception $e) {
            Log::error('Error hapus Periode: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Gagal menghapus Periode. Silakan coba lagi.');
        }
    }
}
