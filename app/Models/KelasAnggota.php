<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;
use App\Models\Anggota;

class KelasAnggota extends Model
{
    use HasFactory;

    protected $table = "kelas_anggotas";
    protected $guarded = ["id"];

    public function KelasAnggotaToKelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function KelasAnggotaToAnggota()
    {
        return $this->belongsTo(Anggota::class, 'anggotas_id', 'id');
    }
}
