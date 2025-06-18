<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hunian extends Model
{
    use HasFactory;

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id');
    }
    public function tower()
    {
        return $this->belongsTo(Tower::class, 'tower_id');
    }
    public function lantai()
    {
        return $this->belongsTo(lantai::class, 'lantai_id');
    }
    public function noUnit()
    {
        return $this->belongsTo(NoUnit::class, 'no_unit_id');
    }
    public function luasTipe()
    {
        return $this->belongsTo(LuasTipe::class, 'luas_tipe_id');
    }
}
