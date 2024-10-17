<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SurveyDetail;
class SurveyDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       SurveyDetail::create([
                'survey_id' => '1',
                'selection_id' => '1',
           'question' => 'pregunta1',
           'enumeration' => '1',
            'type' => 'multiple_option',
            'requerid' => 'yes',
                'state' => '',
                   'option' => json_encode(['valor1', 'valor2', 'valor3', 'valor4'])
                

            ]);
    }
}
