<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_user  = Role::where('name', 'user')->first();
        
        $admin = new User();
        $admin->name = 'Admin Name';
        $admin->email = 'admin@email.com';
        $admin->password = bcrypt('admin123');
        $admin->save();
        $admin->roles()->attach($role_admin);
        
        $user = new User();
        $user->name = 'User Name';
        $user->email = 'user@email.com';
        $user->password = bcrypt('user123');
        $user->save();
        $user->roles()->attach($role_user);
        
    }
}
