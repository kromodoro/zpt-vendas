<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'Rôbo',
            'email' => 'mr_robot@local.host',
            'password' => bcrypt('40028922'),
        ]);
    }
}
