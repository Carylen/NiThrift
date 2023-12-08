<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    protected $fillable = [
        'product_name',
        'product_description',
        'starting_price',
        'product_image',
        'start_time',
        'end_time',
        'user_id',
    ];
}
