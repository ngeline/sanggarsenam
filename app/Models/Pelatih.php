<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KelasPelatih;
use App\Models\Notifikasi;

class Pelatih extends Model
{
    use HasFactory;

    protected $table = "pelatihs";
    protected $guarded = ["id"];

    public function PelatihToKelasPelatih()
    {
        return $this->belongsTo(KelasPelatih::class, 'id', 'pelatihs_id');
    }

    public function PelatihToNotifikasi()
    {
        return $this->belongsTo(Notifikasi::class, 'id', 'pelatihs_id');
    }
}
