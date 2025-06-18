<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PekerjaanController extends Controller
{
    public function index()
    {
        $pekerjaans = Pekerjaan::orderBy('id', 'asc')->get();
        return view('pages.admin.master.list-pekerjaan', compact('pekerjaans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pekerjaan' => 'required'
        ]);

        try {
            $pekerjaan = new Pekerjaan();
            $pekerjaan->nama_pekerjaan = $request->nama_pekerjaan;
            $pekerjaan->save();

            return redirect()->route('pekerjaan.index')->with('success', 'Pekerjaan berhasil ditambahkan');
        } catch (Exception $e) {
            Log::error("Error tambah pekerjaan: " . $e);
            return redirect()->back()->with('error', 'Gagal menghapus Pekerjaan. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $pekerjaan = Pekerjaan::findOrFail($id);
            $pekerjaan->update([
                'nama_pekerjaan' => $request->nama_pekerjaan
            ]);

            return redirect()->route('pekerjaan.index')->with('success', 'Pekerjaan berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error("Error update pekerjaan: " . $e);
            return redirect()->back()->with('error', 'Gagal memperbarui Pekerjaan. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        try {
            $pekerjaan = Pekerjaan::findOrFail($id);
            $pekerjaan->delete();

            return redirect()->route('pekerjaan.index')->with('success', 'Pekerjaan berhasil dihapus!');
        } catch (Exception $e) {
            Log::error("Error hapus pekerjaan: " . $e);
            return redirect()->back()->with('error', 'Gagal menghapus Pekerjaan. Silakan coba lagi.');
        }
    }
}
