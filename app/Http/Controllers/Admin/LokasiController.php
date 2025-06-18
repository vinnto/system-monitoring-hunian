<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class LokasiController extends Controller
{
    public function index()
    {
        $lokasis = Lokasi::orderBy('id', 'asc')->get();
        return view('pages.admin.master.list-lokasi', compact('lokasis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required|string|max:255'
        ]);

        try {
            $lokasi = new Lokasi();
            $lokasi->lokasi = $request->lokasi;
            $lokasi->save();

            return redirect()->route('lokasi.index')
                ->with('success', 'Lokasi berhasil ditambahkan!');
        } catch (Exception $e) {
            Log::error('Error tambah lokasi: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Gagal menghapus lokasi. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {

        try {
            $lokasi = Lokasi::findOrFail($id);
            $lokasi->update([
                'lokasi' => $request->lokasi
            ]);

            return redirect()->route('lokasi.index')
                ->with('success', 'Lokasi berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error('Error update lokasi: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal memperbarui lokasi. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        try {
            $lokasi = Lokasi::findOrFail($id);
            $lokasi->delete();

            return redirect()->route('lokasi.index')
                ->with('success', 'Lokasi berhasil dihapus!');
        } catch (Exception $e) {
            Log::error('Error hapus lokasi: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Gagal menghapus lokasi. Silakan coba lagi.');
        }
    }
}
