<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Southern Rap',
            'slug' => 'southern-rap'
        ]);

        Category::factory()->create([
            'name' => 'West Coast Rap',
            'slug' => 'westcoast-rap'
        ]);

        Category::factory()->create([
            'name' => 'East Coast Rap',
            'slug' => 'eastcoast-rap'
        ]);

        Category::factory()->create([
            'name' => 'Midwest Rap',
            'slug' => 'midwest-rap'
        ]);

        Category::factory()->create([
            'name' => 'New School Rap',
            'slug' => 'newschool-rap'
        ]);
        
        Category::factory()->create([
            'name' => 'Old School Rap',
            'slug' => 'oldschool-rap'
        ]);
    }
}
