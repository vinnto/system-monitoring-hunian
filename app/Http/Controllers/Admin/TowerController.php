<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Tower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class TowerController extends Controller
{
    public function index()
    {
        $towers = Tower::orderBy('id', 'asc')->get();
        return view('pages.admin.master.list-tower', compact('towers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tower' => 'required|string|max:255'
        ]);

        try {
            $tower = new Tower();
            $tower->tower = $request->tower;
            $tower->save();

            return redirect()->route('tower.index')
                ->with('success', 'tower berhasil ditambahkan!');
        } catch (Exception $e) {
            Log::error('Error tambah tower: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Gagal menghapus tower. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {

        try {
            $tower = Tower::findOrFail($id);
            $tower->update([
                'tower' => $request->tower
            ]);

            return redirect()->route('tower.index')
                ->with('success', 'tower berhasil diperbarui!');
        } catch (Exception $e) {
            Log::error('Error update tower: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal memperbarui tower. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        try {
            $tower = Tower::findOrFail($id);
            $tower->delete();

            return redirect()->route('tower.index')
                ->with('success', 'tower berhasil dihapus!');
        } catch (Exception $e) {
            Log::error('Error hapus tower: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Gagal menghapus tower. Silakan coba lagi.');
        }
    }
}
