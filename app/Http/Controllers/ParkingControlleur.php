<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ParkingControlleur extends Controller
{
    public function access()
    {$liste_parkings=Parking::all();
        return view('LesParkings',compact('liste_parkings'));
    }
    public function acces()
    {$liste_parkings=Parking::all();
        return view('ListeParkings',compact('liste_parkings'));
    }

    public function create(Parking $parking)
    {
       

return view("createParking");
    }
    public function store( Request $request)
    {
       $request->validate([
        "numPark"=>"required",
        "nomPark"=>"required",
      "localisation"=>"required",
      "capacité"=>"required",


    ]);
       // Amis::created($request->all());
        
        Parking::create([
        "numPark"=>$request->numPark,
        "nomPark"=>$request->nomPark,
      "localisation"=>$request->localisation,
      "capacité"=>$request->capacité,

        ]);
        
        return back()->with("success","Parking ajoutée avec succès");

    }
    public function edit(Parking $parking)
    {
return view("editerParking",compact("parking"));
    }
    public function editer( Request $request,Parking $parking)
    {
       $request->validate([
        "numPark"=>"required",
        "nomPark"=>"required",
      "localisation"=>"required",
      "capacité"=>"required",


    ]);
       // Amis::created($request->all());
        
        $parking->update([
            "numPark"=>$request->numPark,
            "nomPark"=>$request->nomPark,
          "localisation"=>$request->localisation,
          "capacité"=>$request->capacité,
       
        ]);
        
        return back()->with("success","Parking édité avec succès");

    }
    public function delete(Parking $parking)
    { 
      $parking->delete();
       

      return back()->with("successDelete","Parking supprimé avec succès");
    }
}
