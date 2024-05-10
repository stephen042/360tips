<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status_plan extends Model
{
    use HasFactory;

    public $table = 'status_plans';
    
    public $guarded = [];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
