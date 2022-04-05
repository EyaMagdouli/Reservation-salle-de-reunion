<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Eloquent::reguard();
        $this->call(UserSeeder::class);
        $this->call(SalleSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
