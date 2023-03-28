<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class marchands_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Marchands')->insert([
            ['nom'=>'EDSON','prenom'=>'Grey','numstand'=>320,'nummarché'=>'P19P'],
            ['nom'=>'DUCOBU','prenom'=>'Lawson','numstand'=>330,'nummarché'=>'P19P'],
            ['nom'=>'SON','prenom'=>'Greyson','numstand'=>40,'nummarché'=>'9IYJ'],
            ['nom'=>'GUM','prenom'=>'Lord','numstand'=>30,'nummarché'=>'9IYJ'],
        ]);
    }
}
