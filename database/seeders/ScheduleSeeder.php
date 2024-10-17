<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;
class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::create(['description' => 'L-M-V','detail' =>'']);
        Schedule::create(['description' => 'M-J','detail' =>'']);
        Schedule::create(['description' => 'Sabados','detail' =>'']);
        Schedule::create(['description' => 'Domingos','detail' =>'']);
        Schedule::create(['description' => 'Lunes','detail' =>'']);
        Schedule::create(['description' => 'Martes','detail' =>'']);
        Schedule::create(['description' => 'Miercoles','detail' =>'']);
        Schedule::create(['description' => 'Jueves','detail' =>'']);
        Schedule::create(['description' => 'Viernes','detail' =>'']);

    }
}
