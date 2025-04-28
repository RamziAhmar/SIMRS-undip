<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'administrator',
            'password' => md5('1234'),
            'role' => 'Administrator',
            'id_profile' => 1,
        ]);

        Profile::create([
            'nama_lengkap' => 'Administrator',
            'tanggal_lahir' => '2025-04-28',
            'tempat_lahir' => '-',
            'alamat' => '-',
            'foto' => '-',
        ]);
    }
}
