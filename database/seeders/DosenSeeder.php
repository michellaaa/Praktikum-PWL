<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Dosen::create([
            'nip' => '2323',
            'email' => 'charles@gmail.com',
            'nama' => 'Charles',
            'tanggal_lahir' => '2000-17-04',
            'no_hp' => '081238989'
        ]);*/
        Dosen::factory(8)->create();
    }
}
