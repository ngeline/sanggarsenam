<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasAnggota extends Model
{
    use HasFactory;

    protected $table = "kelas_anggotas";
    protected $guarded = ["id"];
}
