<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Navigation::create([
            'name' => 'Konfigurasi',
            'url' => 'konfigurasi',
            'icon' => 'ti-settings',
            'main_menu' => null,
        ]);
        Navigation::create([
            'name' => 'Agenda',
            'url' => 'konfigurasi/agenda',
            'icon' => 'ti-settings',
            'main_menu' => null,
        ]);
        Navigation::create([
            'name' => 'Riwayat',
            'url' => 'konfigurasi/history',
            'icon' => 'ti-settings',
            'main_menu' => null,
        ]);
    }
}
