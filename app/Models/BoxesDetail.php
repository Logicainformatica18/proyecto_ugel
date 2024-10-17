<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoxesDetail extends Model
{
    use HasFactory;
            public function boxes()
    {
        return $this->hasOne('App\Models\Boxes', 'id','boxe_id');

    }
}
