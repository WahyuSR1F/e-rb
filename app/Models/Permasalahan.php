<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permasalahan extends Model
{
    use HasFactory;

    public function rencanaAksi (): HasMany
    {
        return $this->hasMany(rencanaAksi::class,'permasalahan_id', 'id');
    }
}
