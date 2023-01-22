<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcribe;

class SubcribeStatus extends Model
{
    use HasFactory;

    protected $table = "subcribe_statuses";
    protected $guarded = ["id"];

    public function StatusSubToSub()
    {
        return $this->belongsTo(Subcribe::class, 'subs_id', 'id');
    }
}
