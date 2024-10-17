<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{


    use HasFactory;
    protected $table = "schedules";// <-- El nombre personalizado
    protected $fillable = ['id', 'description','detail'];

}
