<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HQ extends Model
{
    protected $fillable = ['nev', 'kapcsolattarto_nev', 'kapcsolattarto_telefon', 'cim'];

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
