<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'subject-list',
            'subject-create',
            'subject-edit',
            'subject-delete',
            'classCategory-list',
            'classCategory-create',
            'classCategory-edit',
            'classCategory-delete',
            'classGrade-list',
            'classGrade-create',
            'classGrade-edit',
            'classGrade-delete',
        ];

        foreach($permissions as $key => $permission) {
            Permission::create(['name' => $permission]);
        }

        
    }
}
