<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAnggota extends Model
{
    use HasFactory;

    protected $table = "event_anggotas";
    protected $guarded = ["id"];
}
