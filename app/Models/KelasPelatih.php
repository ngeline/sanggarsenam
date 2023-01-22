<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;
use App\Models\Pelatih;

class KelasPelatih extends Model
{
    use HasFactory;

    protected $table = "kelas_pelatihs";
    protected $guarded = ["id"];

    public function KelasPelatihToKelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function KelasPelatihToPelatih()
    {
        return $this->belongsTo(Pelatih::class, 'pelatihs_id', 'id');
    }
}
