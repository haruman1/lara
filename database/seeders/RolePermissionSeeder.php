<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // 1. Buat Permissions
        $this->createPermissions();

        // 2. Buat Roles dan berikan permissions
        $this->createRoles();

        // 3. Buat User default dan berikan roles
        $this->createUsers();
    }

    private function createPermissions(): void
    {
        $permissions = [
            // Panel Access
            'access_panel',

            // Blog Management
            'manage_blog',
            'create_blog',
            'edit_blog',
            'delete_blog',
            'publish_blog',

            // General Admin
            'manage_website',
            'manage_pages',
            'manage_users',
            'manage_roles',
            'view_reports',

            // Billing
            'view_billing_admin',
            'manage_billing_admin',
            'make_payments',
            'make_refunds',

            // User Specific
            'view_user_dashboard',
            'edit_profile',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }
    }

    private function createRoles(): void
    {
        // Role untuk panel admin
        $panelRoles = [
            'admin' => ['manage_website', 'manage_pages', 'manage_users', 'manage_roles', 'view_reports'],
            'blogger' => ['manage_blog', 'create_blog', 'edit_blog', 'delete_blog', 'publish_blog'],
            'billing_admin' => ['view_billing_admin', 'manage_billing_admin', 'make_payments', 'make_refunds'],
        ];

        foreach ($panelRoles as $roleName => $permissions) {
            $role = Role::firstOrCreate(['name' => $roleName, 'guard_name' => 'web']);
            $role->givePermissionTo($permissions);
            $role->givePermissionTo('access_panel'); // Beri akses panel ke semua role ini
        }

        // Role untuk frontend
        $userRole = Role::firstOrCreate(['name' => 'users', 'guard_name' => 'web']);
        $userRole->givePermissionTo(['view_user_dashboard', 'edit_profile']);

        $guestRole = Role::firstOrCreate(['name' => 'guest', 'guard_name' => 'web']);
        $guestRole->givePermissionTo(['view_user_dashboard']);

        // Role Super Admin (tanpa permission spesifik, karena dihandle oleh Gate)
        Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
    }

    private function createUsers(): void
    {
        $users = [
            [
                'name' => 'Super Admin Uenary',
                'email' => 'superadmin@kumon.com',
                'author_id' => 'SUP001',
                'role' => 'super_admin',
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@kumon.com',
                'author_id' => 'ADM001',
                'role' => 'admin',
            ],
            [
                'name' => 'Blogger User',
                'email' => 'blogger@kumon.com',
                'author_id' => 'BLO001',
                'role' => 'blogger',
            ],
            [
                'name' => 'Billing Admin',
                'email' => 'billingadmin@kumon.com',
                'author_id' => 'BIL001',
                'role' => 'billing_admin',
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@kumon.com',
                'author_id' => 'USR001',
                'role' => 'users',
            ],
            [
                'name' => 'Guest User',
                'email' => 'guest@kumon.com',
                'author_id' => 'GST001',
                'role' => 'guest',
            ],
        ];

        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'author_id' => $userData['author_id'],
                    'password' => Hash::make('password'),
                ]
            );
            $user->assignRole($userData['role']);
        }
    }
}
