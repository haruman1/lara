<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'view_admin_dashboard',
            'manage_users',
            'manage_roles',
            'view_user_dashboard',
            'edit_profile',
            'view_reports',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
                'guard_name' => 'web'
            ]);
        }

        // Create roles and assign permissions
        $adminRole = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        $adminRole->givePermissionTo(Permission::all());

        $userRole = Role::create([
            'name' => 'users',
            'guard_name' => 'web'
        ]);
        $userRole->givePermissionTo([
            'view_user_dashboard',
            'edit_profile',
        ]);

        $guestRole = Role::create([
            'name' => 'guests',
            'guard_name' => 'web'
        ]);
        $guestRole->givePermissionTo([
            'view_user_dashboard',
        ]);

        // Create default admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@kumon.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        // Create sample users
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@kumon.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('users');

        $guest = User::create([
            'name' => 'Guest User',
            'email' => 'guest@kumon.com',
            'password' => Hash::make('password'),
        ]);
        $guest->assignRole('guests');
    }
}
