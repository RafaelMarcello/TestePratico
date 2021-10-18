<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $fillable = [
        'client',
        'number',
        'type',
        'status',
        'category'
    ];

    public function movement()
    {
        return $this->belongsTo(Movement::class, 'id');
    }
}
