<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::insert([
            [
                'name' => 'Marketing',
            ],
            [
                'name' => 'Business',
            ],
            [
                'name' => 'Finance',
            ],
            [
                'name' => 'Entrepreneurship',
            ],
            [
                'name' => 'Science',
            ],
            [
                'name' => 'Biography',
            ],
        ]);
    }
}
