<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KYC extends Model
{
    use HasFactory;

    public $table = "kyc";

    public $guarded = [];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
