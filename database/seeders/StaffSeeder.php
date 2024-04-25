<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Staff::create([
            'nip' => '231402108',
            'email' => 'zaizhamichella@gmail.com',
            'nama' => 'Michell',
            'tanggal_lahir' => '2006-15-04',
            'no_hp' => '0812345678'
        ]);*/
        Staff::factory(8)->create();
    }
}