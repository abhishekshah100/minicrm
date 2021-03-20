<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name= 'Admin';
    	$user->email='admin@admin.com';
    	$user->password=bcrypt('password');
        $user->save();
    }
}
