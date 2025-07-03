<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\StatusPenerimaManfaat;

class StatusPenerimaManfaatController extends Controller
{
    public function index()
    {
        $status_penerima_manfaats = StatusPenerimaManfaat::orderBy('id', 'asc')->get();
        return view('pages.admin.master.list-status-pm', compact('status_penerima_manfaats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'status_pm' => 'required'
        ]);

        try {
            $status_pm = new StatusPenerimaManfaat();
            $status_pm->status_pm = $request->status_pm;
            $status_pm->save();

            return redirect()->route('status-pm.index')->with('success', 'Status PM berhasil ditambahkan');
        } catch (Exception $e) {
            Log::error("Error tambah status pm: " . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menghapus Status PM. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $status_pm = StatusPenerimaManfaat::findOrFail($id);
            $status_pm->update([
                'status_pm' => $request->status_pm
            ]);

            return redirect()->route('status-pm.index')->with('success', 'Status PM berhasil diperbarui');
        } catch (Exception $e) {
            Log::error("Error update status pm: " . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memperbarui Periode. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        try {
            $status_pm = StatusPenerimaManfaat::findOrFail($id);
            $status_pm->delete();

            return redirect()->route('status-pm.index')->with('success', 'Status PM berhasil dihapus!');
        } catch (Exception $e) {
            Log::error("Error hapus status pm: " . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menghapus status pm. Silahkan coba lagi.');
        }
    }
}
