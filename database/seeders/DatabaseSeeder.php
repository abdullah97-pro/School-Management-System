<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
            $roles = ['super admin'];

            foreach ($roles as $role) {
                Role::firstOrCreate(
                    ['name' => $role, 'guard_name' => 'web']
                );
            }

            $permissions = [
                'role-list',
                'role-create',
                'role-edit',
                'role-delete',
            ];

            foreach($permissions as $key => $permission) {
                Permission::firstOrCreate(['name' => $permission]);
            }

            $user = User::factory()->create([
                'name' => 'Super Admin',
                'email' => 'superadmin@fanaven.com',
                'password' => '12345678',
            ]);

            
            if(!$user->hasRole('name')){
                $user->assignRole($role);
                $user->syncPermissions($permissions);
            }
    }
}
