<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plans_Transactions extends Model
{
    use HasFactory;
    
    public $guarded = [];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
