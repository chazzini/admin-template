<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define core permissions
        $permissions = [
            'view-admin' => 'Can view admin dashboard',
            'manage-users' => 'Can create, edit and delete users',
            'manage-roles' => 'Can manage roles and permissions',
            'manage-settings' => 'Can manage application settings',
        ];

        $permissionModels = [];
        foreach ($permissions as $slug => $description) {
            $permissionModels[$slug] = Permission::updateOrCreate(
                ['slug' => $slug],
                [
                    'name' => Str::title(str_replace('-', ' ', $slug)),
                    'description' => $description,
                ]
            );
        }

        // Define core roles
        $adminRole = Role::updateOrCreate(
            ['slug' => 'admin'],
            [
                'name' => 'Administrator',
                'description' => 'System administrator with full access',
            ]
        );

        $editorRole = Role::updateOrCreate(
            ['slug' => 'editor'],
            [
                'name' => 'Editor',
                'description' => 'User who can manage content',
            ]
        );

        // Assign all permissions to admin
        $adminRole->permissions()->sync(collect($permissionModels)->pluck('id'));

        // Assign specific permissions to editor
        $editorRole->permissions()->sync([
            $permissionModels['view-admin']->id,
        ]);

        // Assign Admin role to the first user if exists
        $user = User::first();
        if ($user) {
            $user->roles()->sync([$adminRole->id]);
        }
    }
}
