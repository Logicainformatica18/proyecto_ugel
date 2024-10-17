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
        Type::create(['description' => 'Programa','detail' =>'']);
        Type::create(['description' => 'Complementario','detail' =>'']);
        Type::create(['description' => 'Asicrónico','detail' =>'']);
    }
}
