<?php

use App\Ship;
use Illuminate\Database\Seeder;

class ShipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ship::truncate();
        DB::table('ship_user')->truncate();


        Ship::create([
            'matricule' => '001',
            'modele' => 'Voyager',
            'equipage' => 'capitaine'
        ]);

        Ship::create([
            'matricule' => '002',
            'modele' => 'Battle',
            'equipage' => 'capitaine'
        ]);

        Ship::create([
            'matricule' => '003',
            'modele' => 'Racer',
            'equipage' => 'capitaine'
        ]);
    }
}
