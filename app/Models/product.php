<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
//    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
