<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tower extends Model
{
    use HasFactory;

    protected $fillable = ['tower'];

    public function hunians()
    {
        return $this->hasMany(Hunian::class);
    }
}
