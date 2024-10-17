<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Survey;
class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Survey::create(['description' => 'Encuesta1','detail' =>'',
          'url'=>'',
           'date_start' => '2023-05-04',
            'date_end' => '2023-05-04',

        ]);

    }
}
