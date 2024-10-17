<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Teacher extends Model
{
    use HasFactory;
    protected $table = "users";// <-- El nombre personalizado
    public function role()
    {
        //pertenece a muchas roles - agregamos el id de la tabla asociativa - pivot
        return $this->belongsToMany('Spatie\Permission\Models\Role', 'model_has_roles','model_id')->withPivot('model_id');
    }
}
