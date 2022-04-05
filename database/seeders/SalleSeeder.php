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
        // $salle = Salle::create([
        //     'name' => 'salle3',
        //     'slug' => 'salle-3',
        //     'capacity'=>'4'


        // ]);
        $salle = Salle::create([
            'name' => 'salle5',
            'slug' => 'salle-5',
            'capacity'=>'9'


        ]);
        $salle = Salle::create([
            'name' => 'salle1',
            'slug' => 'salle-1',
            'capacity'=>'2'


        ]);
    }
}
