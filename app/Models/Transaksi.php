<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;
use App\Models\Kelas;
use App\Models\Event;
use App\Models\Keranjang;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksis";
    protected $guarded = ["id"];

    public function TransaksiToAnggota()
    {
        return $this->belongsTo(Anggota::class, 'anggotas_id', 'id');
    }

    public function TransaksiToKelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function TransaksiToEvent()
    {
        return $this->belongsTo(Event::class, 'events_id', 'id');
    }

    public function TransaksiToKeranjang()
    {
        return $this->belongsTo(Keranjang::class, 'trx_kode', 'trx_kode');
    }
}
