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

        Category::create(['description' => 'Balde de Pico','detail' =>'']);
        Category::create(['description' => 'Balde','detail' =>'']);
        Category::create(['description' => 'Martillo','detail' =>'']);



    }
}
