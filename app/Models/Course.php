<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

      use HasFactory;
    protected $fillable = ['id', 'description','detail','type_id','folder_certification'];
    public function type()
    {

        return $this->hasOne('App\Models\Type', 'id','type_id');
    }
    public function registry_detail()
    {

        return $this->hasMany('App\Models\RegistryDetail', 'course_id','id');
    }
}
