<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Selection;
class SelectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Selection::create(['description' => 'Ninguno','detail' =>'No eliminar','state' =>'0']);
        Selection::create(['description' => 'Paises','detail' =>'','state' =>'0']);
        Selection::create(['description' => 'Perú Regiones','detail' =>'','state' =>'1']);
        Selection::create(['description' => 'Perú Provincias','detail' =>'','state' =>'2']);
             
    }
}
