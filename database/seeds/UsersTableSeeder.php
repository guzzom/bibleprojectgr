<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gabriel',
            'email' => 'gabri1998gabri@gmail.com',
            'password' => bcrypt('12341234')
        ]);
    }
}
