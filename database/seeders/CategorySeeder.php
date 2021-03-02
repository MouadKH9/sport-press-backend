<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_categories')->insert([
            'name' => "Football"
        ]);
        DB::table('article_categories')->insert([
            'name' => "Basketball"
        ]);
        DB::table('article_categories')->insert([
            'name' => "Tennis"
        ]);
        DB::table('article_categories')->insert([
            'name' => "Volleyball"
        ]);
        DB::table('article_categories')->insert([
            'name' => "Sports Olympiques"
        ]);
        DB::table('article_categories')->insert([
            'name' => "Autres"
        ]);
    }
}
