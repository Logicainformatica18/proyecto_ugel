<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id','type_id',   'user_id','description','money', 
        'igv','cantidad','date_solicitud','date_recepcion','constancia',
         'ganador','type_money'
       ];
    public function type()
    {

        return $this->hasOne('App\Models\Type', 'id','type_id');
    }
    public function category()
    {

        return $this->hasOne('App\Models\Category', 'id','category_id');
    }
    public function user()
    {

        return $this->hasOne('App\Models\User', 'id','user_id');
    }
}
