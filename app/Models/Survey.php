<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
        public function survey_detail()
    {  

        return $this->hasMany('App\Models\SurveyDetail', 'survey_id','id');
    }
}
