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
        // HAPUS DULU BIAR BERSIH

        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'view_admin_dashboard',
            'manage_admin',
            'view_billing_admin',
            'manage_billing_admin',
            'make_payments',
            'make_refunds',
            'manage_website',
            'manage_blog',
            'create_blog',
            'edit_blog',
            'delete_blog',
            'publish_blog',
            'manage_pages',
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
        $superAdminRole = Role::create([
            'name' => 'super_dede',
            'guard_name' => 'web'
        ]);
        $superAdminRole->givePermissionTo(Permission::all());
        // Create roles and assign permissions
        $adminRole = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        $adminRole->givePermissionTo([
            'view_admin_dashboard',
            'manage_website',
            'manage_pages',
            'manage_users',
            'manage_roles',
            'view_reports',
        ]);
        $blogger = Role::create([
            'name' => 'blogger',
            'guard_name' => 'web'
        ]);
        $blogger->givePermissionTo([
            'manage_blog',
            'create_blog',
            'edit_blog',
            'delete_blog',
            'publish_blog',
        ]);
        $billingAdminRole = Role::create([
            'name' => 'billing_admin',
            'guard_name' => 'web'
        ]);
        $billingAdminRole->givePermissionTo([
            'view_billing_admin',
            'manage_billing_admin',
            'make_payments',
            'make_refunds',
        ]);

        $userRole = Role::create([
            'name' => 'users',
            'guard_name' => 'web'
        ]);
        $userRole->givePermissionTo([
            'view_user_dashboard',
            'edit_profile',
        ]);

        $guestRole = Role::create([
            'name' => 'guest',
            'guard_name' => 'web'
        ]);
        $guestRole->givePermissionTo([
            'view_user_dashboard',
        ]);

        $SuperAdmin = User::create([
            'name' => 'Super Admin Uenary',
            'email' => 'superadmin@kumon.com',
            'author_id' => 'SUP001',
            'password' => Hash::make('password'),
        ]);
        $SuperAdmin->assignRole('super_dede');

        $blogger = User::create([
            'name' => 'Blogger User',
            'email' => 'blogger@kumon.com',
            'author_id' => 'BLO001',
            'password' => Hash::make('password'),
        ]);
        $blogger->assignRole('blogger');

        $billingAdmin = User::create([
            'name' => 'Billing Admin',
            'email' => 'billingadmin@kumon.com',
            'author_id' => 'BIL001',
            'password' => Hash::make('password'),
        ]);
        $billingAdmin->assignRole('billing_admin');

        // Create default admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@kumon.com',
            'author_id' => 'ADM001',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        // Create sample users
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@kumon.com',
            'author_id' => 'USR001',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('users');

        $guest = User::create([
            'name' => 'Guest User',
            'email' => 'guest@kumon.com',
            'author_id' => 'GST001',
            'password' => Hash::make('password'),
        ]);
        $guest->assignRole('guest');
    }
}
