<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pay;
class PaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pay::create([
            'description' => 'MS Excel',
            'type_id' => '1',
            'category_id' => '1',
            'money' => '50.50',
            'igv' => '5',
            'cantidad' => '1',
            'date_solicitud' => '1994-03-08',
            'date_recepcion' => '1994-03-08',
            'constancia' => 'Sí',
            'ganador' => 'NO',
         "user_id" => 1,
         "type_money" => 'SOLES',
        
        ]);
    }
}
