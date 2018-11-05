<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name' => 'admin',
                'guard_name' => 'jwt',
            ],[
                'name' => 'user',
                'guard_name' => 'jwt',
            ],[
                'name' => 'vip_user',
                'guard_name' => 'jwt',
            ],[
                'name' => 'business',
                'guard_name' => 'jwt',
            ],[
                'name' => 'vip_business',
                'guard_name' => 'jwt',
            ],[
                'name' => 'media',
                'guard_name' => 'jwt',
            ]
        ]);
    }
}
