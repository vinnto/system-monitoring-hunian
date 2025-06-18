<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Lantai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class LantaiController extends Controller
{
    public function index()
    {
        $lantais = Lantai::orderBy('id', 'asc')->get();
        return view('pages.admin.master.list-lantai', compact('lantais'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lantai' => 'required|string|max:255'
        ]);

        try {
            $lantai = new Lantai();
            $lantai->lantai = $request->lantai;
            $lantai->save();

            return redirect()->route('lantai.index')
                ->with('success', 'lantai berhasil ditambahkan!');
        } catch (Exception $e) {
            Log::error('Error tambah lantai: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Gagal menghapus lantai. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {

        try {
            $lantai = Lantai::findOrFail($id);
            $lantai->update([
                'lantai' => $request->lantai
            ]);

            return redirect()->route('lantai.index')
                ->with('success', 'lantai berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error('Error update lantai: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal memperbarui lantai. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        try {
            $lantai = Lantai::findOrFail($id);
            $lantai->delete();

            return redirect()->route('lantai.index')
                ->with('success', 'lantai berhasil dihapus!');
        } catch (Exception $e) {
            Log::error('Error hapus lantai: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Gagal menghapus lantai. Silakan coba lagi.');
        }
    }
}
