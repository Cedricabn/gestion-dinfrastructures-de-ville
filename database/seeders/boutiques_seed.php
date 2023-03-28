<?php

namespace Database\Seeders;

use App\Http\Controllers\Boutiques;
use App\Models\Boutique;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class boutiques_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {DB::table("boutiques")->insert([
["idmarché"=>"1A","localisation"=> "Sainte-Rita", "nomproprietaire"=>"Georges Clouney"],
["idmarché"=>"2A","localisation"=> "Wologuede", "nomproprietaire"=>"Roman Reigns"],



    ]);
       Boutique::factory(10)->create();
    }
}
