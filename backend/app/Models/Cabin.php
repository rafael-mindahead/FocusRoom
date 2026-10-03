<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\CabinStatus;

class Cabin extends Model
{
    protected $fillable = [
        'code',
        'location',
    ];
    protected function casts(): array
    {
        return [
            'status' => CabinStatus::class,
        ];
    }
}
