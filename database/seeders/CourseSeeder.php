<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // create course
       Course::create([
        'description' => 'Sql Server',
        'type_id' => '1',
        'detail' => '',
        'hours' => '60 hrs',
        'folder_certification' => 'sql_server',
    ]);
    Course::create([
        'description' => 'MS Excel',
        'type_id' => '1',
        'detail' => '',
        'hours' => '60 hrs',
        'folder_certification' => 'ms_excel',
    ]);
    Course::create([
        'description' => 'Power bi',
        'type_id' => '1',
        'detail' => '',
        'hours' => '60 hrs',
        'folder_certification' => 'powerbi',
    ]);
    Course::create([
        'description' => 'Python for Data Science',
        'type_id' => '1',
        'detail' => '',
        'hours' => '60 hrs',
        'folder_certification' => 'python_datascience',

    ]);
    Course::create([
        'description' => 'Azure For Data Science',
        'type_id' => '1',
        'detail' => '',
        'hours' => '60 hrs',
        'folder_certification' => 'azure_datascience',
    ]);
    Course::create([
        'description' => 'R For Data Science',
        'type_id' => '1',
        'detail' => '',
        'hours' => '60 hrs',
          'folder_certification' => 'r_datascience',

    ]);
    Course::create([
        'description' => 'AWS For Data Science',
        'type_id' => '1',
        'detail' => '',
        'hours' => '60 hrs',
        'folder_certification' => 'aws_datascience',
    ]);
    }
}
