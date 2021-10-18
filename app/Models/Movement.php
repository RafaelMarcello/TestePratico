<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    protected $fillable = [
        'containerId',
        'type',
        'start',
        'end'
    ];

    public function container()
    {
        return $this->hasOne(Container::class, 'id', 'containerId');
    }

    public function getStartAttribute($value)
    {
        return date('d/m/Y H:m:i', strtotime($value));
    }

    public function getEndAttribute($value)
    {
        return date('d/m/Y H:m:i', strtotime($value));
    }
}
