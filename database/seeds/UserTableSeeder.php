<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'first_name' =>'Admin',
            'last_name' => 'Root',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin123')
        ]);
        $admin->assignRole('admin');
    }
}
