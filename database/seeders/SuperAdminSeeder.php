<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        // Buat pengguna Super Admin
        $superAdminUser = User::firstOrCreate(
            ['email' => 'superadmin@app.com'], // Email sebagai pengecek unik
            [
                'name' => 'Super Administrator',
                'password' => Hash::make('password'), // Ganti dengan password yang aman!
            ]
        );

        // Cari atau buat role 'super-admin'
        $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);

        // Berikan role 'super-admin' ke pengguna tersebut
        $superAdminUser->assignRole($superAdminRole);
    }
}
