<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use App\Models\TempatTinggal;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class TempatTinggalController extends Controller
{
    public function index()
    {
        $tempat_tinggals = TempatTinggal::orderBy('id', 'asc')->get();
        return view('pages.admin.master.list-tempat-tinggal', compact('tempat_tinggals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tempat_tinggal' => 'required'
        ]);

        try {
            $tempat_tinggal = new TempatTinggal();
            $tempat_tinggal->tempat_tinggal = $request->tempat_tinggal;
            $tempat_tinggal->save();

            return redirect()->route('tempat-tinggal.index')->with('success', 'Tempat Tinggal berhasil ditambahkan');
        } catch (Exception $e) {
            Log::error("Error tambah tempat tinggal: " . $e);
            return redirect()->back()->with('error', 'Gagal menghapus Tempat Tinggal. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $tempat_tinggal = TempatTinggal::findOrFail($id);
            $tempat_tinggal->update([
                'tempat_tinggal' => $request->tempat_tinggal
            ]);

            return redirect()->route('tempat-tinggal.index')->with('success', 'Tempat Tinggal berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error("Error update Tempat Tinggal: " . $e);
            return redirect()->back()->with('error', 'Gagal memperbarui Tempat Tinggal. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        try {
            $tempat_tinggal = TempatTinggal::findOrFail($id);
            $tempat_tinggal->delete();

            return redirect()->route('tempat-tinggal.index')->with('success', 'Tempat Tinggal berhasil dihapus!');
        } catch (Exception $e) {
            Log::error("Error hapus tempat tinggal: " . $e);
            return redirect()->back()->with('error', 'Gagal menghapus Tempat Tinggal. Silakan coba lagi.');
        }
    }
}
