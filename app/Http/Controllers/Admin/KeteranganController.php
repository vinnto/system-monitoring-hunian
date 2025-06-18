<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Keterangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class KeteranganController extends Controller
{
    public function index()
    {
        $keterangans = Keterangan::orderBy('id', 'asc')->get();
        return view('pages.admin.master.list-keterangan', compact('keterangans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required'
        ]);

        try {
            $keterangan = new Keterangan();
            $keterangan->keterangan = $request->keterangan;
            $keterangan->save();

            return redirect()->route('keterangan.index')->with('success', 'Keterangan berhasil ditambahkan');
        } catch (Exception $e) {
            Log::error("Error tambah keterangan: " . $e);
            return redirect()->back()->with('error', 'Gagal menghapus Pekerjaan. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $keterangan = Keterangan::findOrFail($id);
            $keterangan->update([
                'keterangan' => $request->keterangan
            ]);

            return redirect()->route('keterangan.index')->with('success', 'Keterangan berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error("Error update Keterangan: " . $e);
            return redirect()->back()->with('error', 'Gagal memperbarui Keterangan. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        try {
            $keterangan = Keterangan::findOrFail($id);
            $keterangan->delete();

            return redirect()->route('keterangan.index')->with('success', 'Keterangan berhasil dihapus!');
        } catch (Exception $e) {
            Log::error("Error hapus keterangan: " . $e);
            return redirect()->back()->with('error', 'Gagal menghapus Keterangan. Silakan coba lagi.');
        }
    }
}
