<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubcribeStatus;
use App\Models\Anggota;
use App\Models\Kelas;

class Subcribe extends Model
{
    use HasFactory;

    protected $table = "subcribes";
    protected $guarded = ["id"];

    public function SubToStatusSub()
    {
        return $this->belongsTo(SubcribeStatus::class, 'id', 'subs_id');
    }

    public function SubToAnggota()
    {
        return $this->belongsTo(Anggota::class, 'anggotas_id', 'id');
    }

    public function SubToKelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
