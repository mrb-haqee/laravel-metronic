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
                'idMenu' => 1,
                'indexSort' => 1,
                'group' => 'masterdata',
                'path' => json_encode(['menu']),
                'namaMenuSub' => 'Menu',
                'created_at' => now(),
            ],
        ]);
    }
}
