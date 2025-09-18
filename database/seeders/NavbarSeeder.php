<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('navbars')->insert([
            ['title' => 'Beranda', 'slug' => '/', 'parent_id' => null, 'order' => 1, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Layanan', 'slug' => '/layanan', 'parent_id' => null, 'order' => 2, 'is_active' => false, icon => 'fa fa-bank', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Dropdown', 'slug' => '#', 'parent_id' => null, 'order' => 6, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            // isi dropdown
            ['title' => 'Explore', 'slug' => '#', 'parent_id' => 6, 'order' => 1],
            ['title' => 'First', 'slug' => '/first', 'parent_id' => 7, 'order' => 1],
            ['title' => 'Second', 'slug' => '/second', 'parent_id' => 7, 'order' => 2],
            ['title' => 'Third', 'slug' => '/third', 'parent_id' => 7, 'order' => 3],
        ]);
    }
}
