<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Pendidikan'
        ]);

        Category::create([
            'name' => 'Budi Pekerti'
        ]);

        Category::create([
            'name' => 'Sosial'
        ]);

        Category::create([
            'name' => 'Pengetahuan Alam'
        ]);

        // Category::factory(10)->create();
    }
}
