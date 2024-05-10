<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock_Stake extends Model
{
    use HasFactory;

    public $table = 'stock_stakes';
    
    public $guarded = [];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
