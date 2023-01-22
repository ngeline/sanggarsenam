<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;
use App\Models\Kelas;
use App\Models\Event;
use App\Models\Transaksi;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = "keranjangs";
    protected $guarded = ["id"];

    public function KeranjangToAnggota()
    {
        return $this->belongsTo(Anggota::class, 'anggotas_id', 'id');
    }

    public function KeranjangToKelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function KeranjangToEvent()
    {
        return $this->belongsTo(Event::class, 'events_id', 'id');
    }

    public function KeranjangToTransaksi()
    {
        return $this->belongsTo(Transaksi::class, 'trx_kode', 'trx_kode');
    }
}
