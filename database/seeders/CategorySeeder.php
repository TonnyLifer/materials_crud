<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Деловые/Бизнес-процессы',
        ]);

        DB::table('categories')->insert([
            'name' => 'Дизайн/Общее',
        ]);

        DB::table('categories')->insert([
            'name' => 'Детские/Воспитание',
        ]);

        DB::table('categories')->insert([
            'name' => 'Деловые/Управление проектами',
        ]);

        DB::table('categories')->insert([
            'name' => 'Деловые/Управление бизнесом',
        ]);

        DB::table('categories')->insert([
            'name' => 'Деловые/Найм',
        ]);

    }
}
