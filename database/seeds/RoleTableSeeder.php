<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'admin';
        $role_employee->description = 'Administrator';
        $role_employee->save();
        
        $role_employee = new Role();
        $role_employee->name = 'user';
        $role_employee->description = 'General user';
        $role_employee->save();
        
        $role_employee = new Role();
        $role_employee->name = 'vip_user';
        $role_employee->description = 'VIP user';
        $role_employee->save();
        
        $role_employee = new Role();
        $role_employee->name = 'business';
        $role_employee->description = 'General business';
        $role_employee->save();
        
        $role_employee = new Role();
        $role_employee->name = 'vip_business';
        $role_employee->description = 'VIP business';
        $role_employee->save();
        
        $role_employee = new Role();
        $role_employee->name = 'media';
        $role_employee->description = 'Media';
        $role_employee->save();
    }
}
