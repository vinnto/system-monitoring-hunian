<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoUnit extends Model
{
    use HasFactory;

    protected $fillable = ['no_unit'];

    public function hunians()
    {
        return $this->hasMany(Hunian::class);
    }
}
