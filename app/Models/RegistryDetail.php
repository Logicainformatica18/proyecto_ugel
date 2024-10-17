<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistryDetail extends Model
{
    use HasFactory;
    protected $table = "registry_details";// <-- El nombre personalizado
    protected $fillable = ['id','student_id','registry_id','url_certification','state_certification'];
    // public function student()
    // {

    //     return $this->hasOne('App\Models\Student', 'id','student_id');
    // }
    public function model_has_role(){

        // agregamos el id de la tabla asociativa - pivot
     //   return $this->belongsToMany('Spatie\Permission\Models\Role', 'model_has_roles','model_id')
          //pertenece a muchas roles - agregamos el id de la tabla asociativa - pivot
          return $this->hasOne('App\Models\Model_has_role', 'model_id','student_m','model_r','student_r');
      }
    public function registry()
    {

        return $this->hasOne('App\Models\Registry', 'id','registry_id');
    }
       public function certificate(){


          return $this->belongsTo('App\Models\Certificate', 'id','registry_detail_id');
      }
}
