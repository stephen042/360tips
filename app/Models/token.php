<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class token extends Model
{
    use HasFactory;
    public $fillable = [
        'email',
        'token',
        'status',
        'expired_at'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
