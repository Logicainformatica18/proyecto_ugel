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
            'plazo' => '1',
            'igv' => '5',
            'cantidad' => '1',
            'date_solicitud' => '1994-03-08',
            'date_recepcion' => '1994-03-08',
            'constancia' => '1',
            'ganador' => '1',
         
        
        ]);
    }
}
