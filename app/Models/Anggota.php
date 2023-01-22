<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\EventAnggota;
use App\Models\KelasAnggota;
use App\Models\Keranjang;
use App\Models\Notifikasi;
use App\Models\Subcribe;
use App\Models\Transaksi;

class Anggota extends Model
{
    use HasFactory;

    protected $table = "anggotas";
    protected $guarded = ["id"];

    public function AnggotaToUser()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function AnggotaToEventAnggota()
    {
        return $this->belongsTo(EventAnggota::class, 'id', 'anggotas_id');
    }

    public function AnggotaToKelasAnggota()
    {
        return $this->belongsTo(KelasAnggota::class, 'id', 'anggotas_id');
    }

    public function AnggotaToKeranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id', 'anggotas_id');
    }

    public function AnggotaToNotifikasi()
    {
        return $this->belongsTo(Notifikasi::class, 'id', 'anggotas_id');
    }

    public function AnggotaToSub()
    {
        return $this->belongsTo(Subcribe::class, 'id', 'anggotas_id');
    }

    public function AnggotaToTransaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id', 'anggotas_id');
    }
}
