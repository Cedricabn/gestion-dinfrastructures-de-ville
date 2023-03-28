<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use Illuminate\Http\Request;

class Equipementcontrolleur extends Controller
{
    public function access()
    { $liste_equipements=Equipement::all();
        return view('LesEquipements',compact("liste_equipements"));
    }
    public function acces()
    { $liste_equipements=Equipement::all();
        return view('ListeEquipements',compact("liste_equipements"));
    }
    public function create(Equipement $equipement)
    {
       

return view("createEquipement");
    }
    public function store( Request $request)
    {
       $request->validate([
        "nom"=>"required",
      "localisation"=>"required",
      "type"=>"required",


    ]);
       // Amis::created($request->all());
        
        Equipement::create([
            "nom"=>$request->idmarché,
        "localisation"=>$request->localisation,
        "type"=>$request->nomproprietaire,
       
        ]);
        
        return back()->with("success","Equipement ajoutée avec succès");

    }
    public function edit(Equipement $equipement)
    {
return view("editerEquipement",compact("equipement"));
    }
    public function editer( Request $request,Equipement $equipement)
    {
       $request->validate([
        "nom"=>"required",
      "localisation"=>"required",
      "type"=>"required",


    ]);
       // Amis::created($request->all());
        
        $equipement->update([
            "nom"=>$request->nom,
        "localisation"=>$request->localisation,
        "type"=>$request->type,
       
        ]);
        
        return back()->with("success","Equipement édité avec succès");

    }
    public function delete(Equipement $equipement)
    { 
      $equipement->delete();
       

      return back()->with("successDelete","Equipement supprimé avec succès");
    }
}
