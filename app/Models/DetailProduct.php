<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'sellerName',
        'sellerNumber'
    ];

    public function toUsers(){
        return $this->belongsTo(User::class);
    }
}
