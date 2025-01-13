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
                'menu_id' => 1,
                'index_sort' => 1,
                'group' => 'masterdata',
                'path' => json_encode(['menu']),
                'nama_sub' => 'Menu',
                'created_at' => now(),
            ],
            [
                'menu_id' => 1,
                'index_sort' => 1,
                'group' => 'masterdata',
                'path' => json_encode(['user']),
                'nama_sub' => 'Users',
                'created_at' => now(),
            ],
            [
                'menu_id' => 1,
                'index_sort' => 1,
                'group' => 'masterdata',
                'path' => json_encode(['role']),
                'nama_sub' => 'Role',
                'created_at' => now(),
            ],
            [
                'menu_id' => 1,
                'index_sort' => 1,
                'group' => 'masterdata',
                'path' => json_encode(['permission']),
                'nama_sub' => 'Permission',
                'created_at' => now(),
            ],
        ]);
    }
}
