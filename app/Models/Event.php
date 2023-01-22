<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventAnggota;
use App\Models\Keranjang;
use App\Models\Transaksi;

class Event extends Model
{
    use HasFactory;

    protected $table = "events";
    protected $guarded = ["id"];

    public function EventToEventAnggota()
    {
        return $this->belongsTo(EventAnggota::class, 'id', 'events_id');
    }

    public function EventToKeranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id', 'events_id');
    }

    public function EventToTransaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id', 'events_id');
    }
}
