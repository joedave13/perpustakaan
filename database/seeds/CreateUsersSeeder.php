<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@mail.com',
                'username' => 'superadmin',
                'password' => bcrypt('superadmin'),
                'role' => 1
            ],
            [
                'name' => 'Petugas',
                'email' => 'petugas@mail.com',
                'username' => 'petugas',
                'password' => bcrypt('petugas'),
                'role' => 2
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}