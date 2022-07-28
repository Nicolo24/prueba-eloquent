<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\hijo;

class padre extends Model
{
    use HasFactory;

    public function hijos()
    {
        return $this->hasMany(hijo::class,'id');
    }
}
