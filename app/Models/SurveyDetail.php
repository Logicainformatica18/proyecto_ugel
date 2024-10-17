<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyDetail extends Model
{
    use HasFactory;
        public function survey()
    {
        return $this->hasOne('App\Models\Survey', 'id','survey_id');

    }
                    public function selection()
    {
        return $this->hasOne('App\Models\Selection', 'id','selection_id');

    }
}
