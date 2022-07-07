<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            'name' => 'Путь джедая',
            'author' => 'Максим Дорофеев',
            'type_id' => '1',
            'category_id' => '1',
            'description' => 'новая',
        ]);

        DB::table('materials')->insert([
            'name' => 'Полное руководство по Laravel',
            'author' => 'Александр Макаров',
            'type_id' => '2',
            'category_id' => '3',
            'description' => 'новая',
        ]);
    }
}
