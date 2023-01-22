<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;
use App\Models\Pelatih;
use App\Models\Kelas;

class Notifikasi extends Model
{
    use HasFactory;

    protected $table = "notifikasis";
    protected $guarded = ["id"];

    public function NotifikasiToAnggota()
    {
        return $this->belongsTo(Anggota::class, 'anggotas_id', 'id');
    }

    public function NotifikasiToPelatih()
    {
        return $this->belongsTo(Pelatih::class, 'pelatihs_id', 'id');
    }

    public function NotifikasiToKelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
