<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\Anggota;

class EventAnggota extends Model
{
    use HasFactory;

    protected $table = "event_anggotas";
    protected $guarded = ["id"];

    public function EventAnggotaToEvent()
    {
        return $this->belongsTo(Event::class, 'events_id', 'id');
    }

    public function EventAnggotaToAnggota()
    {
        return $this->belongsTo(Anggota::class, 'anggotas_id', 'id');
    }
}
