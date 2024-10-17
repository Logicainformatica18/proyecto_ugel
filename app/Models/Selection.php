<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    use HasFactory;
                    public function selection_detail()
    {
        //delacion de uno a muchos
        return $this->hasMany('App\Models\SelectionDetail', 'selection_id','id');

    }
                       public function associate()
    {
        //delacion de uno a muchos
        return $this->hasOne('App\Models\Selection', 'id','associate_id');

    }
}
