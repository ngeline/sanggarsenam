<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasPelatih extends Model
{
    use HasFactory;

    protected $table = "kelas_pelatihs";
    protected $guarded = ["id"];
}
