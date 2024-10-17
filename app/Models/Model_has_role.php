<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_has_role extends Model
{
    protected $fillable = ['model_id','model_type','role_id'];

    use HasFactory;
    public function teacher()
    {
        return $this->hasOne('App\Models\User', 'id','model_id');
        //return $this->hasOne('App\Models\Type', 'id','type_id');
    }
    public function student()
    {
        return $this->hasOne('App\Models\User', 'id','model_id');

    }
}
