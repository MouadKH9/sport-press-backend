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
        DB::table('categories')->insert([
            'name' => "Football"
        ]);
        DB::table('categories')->insert([
            'name' => "Basketball"
        ]);
        DB::table('categories')->insert([
            'name' => "Tennis"
        ]);
        DB::table('categories')->insert([
            'name' => "Volleyball"
        ]);
        DB::table('categories')->insert([
            'name' => "Sports Olympiques"
        ]);
        DB::table('categories')->insert([
            'name' => "Autres"
        ]);
    }
}
