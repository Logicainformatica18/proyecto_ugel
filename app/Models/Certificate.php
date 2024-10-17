<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    //     protected $fillable = ['id', 'registry_detail_id','code','url'];
    //     public function registryDetail()
    // {

    //     return $this->hasOne('App\Models\RegistryDetail', 'id','registry_detail_id');
    // }
        public function course()
    {
        return $this->hasOne('App\Models\Course', 'id','course_id');

    }
}
