<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Ключевые идеи книги',
        ]);

        DB::table('types')->insert([
            'name' => 'Подборка',
        ]);

        DB::table('types')->insert([
            'name' => 'Сайт/Блог',
        ]);

        DB::table('types')->insert([
            'name' => 'Статья',
        ]);

        DB::table('types')->insert([
            'name' => 'Видео',
        ]);

        DB::table('types')->insert([
            'name' => 'Книга',
        ]);
    }
}
