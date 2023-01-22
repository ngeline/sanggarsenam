<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KelasAnggota;
use App\Models\KelasPelatih;
use App\Models\Keranjang;
use App\Models\Notifikasi;
use App\Models\Subcribe;
use App\Models\Transaksi;

class Kelas extends Model
{
    use HasFactory;

    protected $table = "kelas";
    protected $guarded = ["id"];

    public function KelasToKelasAnggota()
    {
        return $this->belongsTo(KelasAnggota::class, 'id', 'kelas_id');
    }

    public function KelasToKelasPelatih()
    {
        return $this->belongsTo(KelasPelatih::class, 'id', 'kelas_id');
    }

    public function KelasToKeranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id', 'kelas_id');
    }

    public function KelasToNotifikasi()
    {
        return $this->belongsTo(Notifikasi::class, 'id', 'kelas_id');
    }

    public function KelasToSub()
    {
        return $this->belongsTo(Subcribe::class, 'id', 'kelas_id');
    }

    public function KelasToTransaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id', 'kelas_id');
    }
}
