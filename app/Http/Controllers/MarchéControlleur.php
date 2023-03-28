<?php

namespace App\Http\Controllers;

use App\Models\Marchand;
use App\Models\Marché;
use Illuminate\Http\Request;

class MarchéControlleur extends Controller
{
    public function access()
    {$liste_marchés=Marché::all();
        return view('LesMarchés',compact('liste_marchés'));
    }
    public function acces()
    {$liste_marchés=Marché::all();
        return view('ListeMarchés',compact('liste_marchés'));
    }

    public function create(Marché $marché)
    {
       

return view("createMarché");
    }
    public function store( Request $request)
    {
       $request->validate([
        "idmarché"=>"required",
        "nomMarché"=>"required",
      "localisation"=>"required",
      "capacité"=>"required",


    ]);
       // Amis::created($request->all());
        
        Marché::create([
        "idmarché"=>$request->idmarché,
        "nomMarché"=>$request->nomMarché,
      "localisation"=>$request->localisation,
      "capacité"=>$request->capacité,

        ]);
        
        return back()->with("success","Marché ajouté avec succès");

    }
    public function edit(Marché $marché)
    {
return view("editerMarché",compact("marché"));
    }
    public function editer( Request $request,Marché $marché)
    {
       $request->validate([
        "idmarché"=>"required",
        "nomMarché"=>"required",
      "localisation"=>"required",
      "capacité"=>"required",


    ]);
       // Amis::created($request->all());
        
        $marché->update([
            "idmarché"=>$request->idmarché,
            "nomMarché"=>$request->nomMarché,
          "localisation"=>$request->localisation,
          "capacité"=>$request->capacité,
       
        ]);
        
        return back()->with("success","Marché édité avec succès");

    }
    public function delete(Marché $marché)
    { 
      
      $liste_marchands=Marchand::all();
     
      $idma=  $marché->idmarché;
       foreach($liste_marchands as $marchand)
        { $idm=$marchand->nummarché;
     if($idma===$idm)
    { $marchand->delete;}
        }
    
      $marché->delete();
      return back()->with("successDelete","Marché supprimé avec succès");
    }
}
