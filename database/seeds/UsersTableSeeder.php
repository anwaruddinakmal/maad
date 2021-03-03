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
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $webmasterRole = Role::where('name','webmaster')->first();

        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'azbrightway@gmail.com',
            'password' => bcrypt('Admin@123')
        ]);

        $webmaster = User::create([
            'name' => 'Webmaster',
            'email' => 'anwaruddinakmal@gmail.com',
            'password' => bcrypt('Admin@123')
        ]);

        $admin->roles()->attach($adminRole);
        $webmaster->roles()->attach($webmasterRole);
    }
}
