<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assistant;
class AssistantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Assistant::create(['description' => 'Jose asistente','detail' =>'']);
    }
}
