<?php

namespace App\Models;

use App\Models\Permasalahan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RencanaAksi extends Model
{
    use HasFactory;

    public function Permasalahan (): BelongsTo
    {
        return $this->BelongsTo(Permasalahan::class,'permasalahan_id', 'id');
    }

    public function targetAnggaran (): HasMany
    {
        return $this->hasMany(targetAnggaran::class,'rencana_aksi_id', 'id');
    }

    public function targetPenyelesaian (): HasMany
    {
        return $this->hasMany(targetPenyelesaian::class,'rencana_aksi_id', 'id');
    }


}
