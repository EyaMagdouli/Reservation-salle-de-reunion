<?php

namespace Database\Seeders;

use App\Models\Salle;
use Illuminate\Database\Seeder;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salle = Salle::create([
            'name' => 'salle1',
            'slug' => 'salle-1',


        ]);
    }
}
