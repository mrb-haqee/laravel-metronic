<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu_sub')->insert([
            [
                'idMenu' => 2,
                'indexSort' => 1,
                'pathMenu' => json_encode(['menu']),
                'namaSubMenu' => 'Menu',
                'created_at' => now(),
            ],
        ]);
    }
}
