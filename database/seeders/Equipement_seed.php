<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Equipement_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipements')->insert([
['nom'=>'AbattoirCity','localisation'=>'Sainte Rita','type'=>'Abattoir'],
['nom'=>'GareCity','localisation'=>'Sainte Rita','type'=>'Gare routière'],
            

            ]
        );
    }
}
