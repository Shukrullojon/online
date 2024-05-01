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
        $permissionList = [
            // home page
            ['name' => 'home-show'],
            ['name' => 'home-index'],
            ['name' => 'home-profile'],
            // permission page
            ['name' => 'permission-show'],
            ['name' => 'permission-index'],
            ['name' => 'permission-create'],
            ['name' => 'permission-store'],
            ['name' => 'permission-edit'],
            ['name' => 'permission-update'],
            ['name' => 'permission-destroy'],
            // role page
            ['name' => 'role-index'],
            ['name' => 'role-filter'],
            ['name' => 'role-show'],
            ['name' => 'role-create'],
            ['name' => 'role-store'],
            ['name' => 'role-edit'],
            ['name' => 'role-update'],
            ['name' => 'role-destroy'],
            // user page
            ['name' => 'user-index'],
            ['name' => 'user-filter'],
            ['name' => 'user-create'],
            ['name' => 'user-store'],
            ['name' => 'user-show'],
            ['name' => 'user-edit'],
            ['name' => 'user-update'],
            ['name' => 'user-destroy'],
        ];
        foreach ($permissionList as $item => $value){
            Permission::create($value);
        }
    }
}
