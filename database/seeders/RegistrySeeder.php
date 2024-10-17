<?php

namespace Database\Seeders;
use App\Models\Registry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // create course
            Registry::create([
                'course_id' => '1',

             //   'coordination_m' => '2',
            //    'coordination_t' => 'App\Models\User',
            ///    'coordination_r' => '2',
            'description' => 'PR25-2021-01',

                'teacher_m' => '3',
                'teacher_t' => 'App\Models\User',
                'teacher_r' => '3',
                'assistance_id' => '1',



                'schedule_id' => '1',
                'hour_start' => '19:00:00',
                'hour_end' => '22:00:00',
                'fec_start' => '2023-05-04',
                'fec_end' => '2023-06-06',
                'date_certification' => '2023-05-06',
                'detail' => '',
                'edition' => '40',
                'type' => 'Clase'
            ]);
    }
}
