<?php

namespace App\Models;

use App\Models\RencanaAksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TargetAnggaran extends Model
{
    use HasFactory;

    public function TargetAnggaran (): BelongsTo
    {
        return $this->BelongsTo(RencanaAksi::class,'rencana_aksi_id', 'id');
    }
}
