<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Ramdan Ahmad Dijaya',
            'email'    => 'ramdanahmaddijaya34@gmail.com',
            'password' => Hash::make('inipassword'),
        ]);
    }
}
