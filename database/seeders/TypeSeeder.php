<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Type;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['description' => 'Entrega Puntual','detail' =>'']);
        Type::create(['description' => '5 Días','detail' =>'']);
        
    }
}
