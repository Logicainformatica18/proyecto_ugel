<?php
namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create(['description' => 'Data Science','detail' =>'']);
        Category::create(['description' => 'Programación','detail' =>'']);
        Category::create(['description' => 'Bases de datos','detail' =>'']);



    }
}
