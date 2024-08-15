<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetPenyelesaian extends Model
{
    use HasFactory;

    public function RencanaAksi (): BelongsTo
    {
        return $this->BelongsTo(RencanaAksi::class,'rencana_aksi_id', 'id');
    }
}
