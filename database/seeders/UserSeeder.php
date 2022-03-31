<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=> 'eya',
            'email'=> 'eya@gmail.com',
            'password' => bcrypt('secret'),
            'role'=> 'user'
        ]);
    }
}