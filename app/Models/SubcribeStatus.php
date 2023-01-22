<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcribeStatus extends Model
{
    use HasFactory;

    protected $table = "subcribe_statuses";
    protected $guarded = ["id"];
}
