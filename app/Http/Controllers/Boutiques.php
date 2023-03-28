<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use Illuminate\Http\Request;

class Boutiques extends Controller
{
    public function access()
    { $liste_boutiques=Boutique::all();
        return view('LesBoutiques',compact("liste_boutiques"));
    }
    public function acces()
    { $liste_boutiques=Boutique::all();
        return view('ListeBoutiques',compact("liste_boutiques"));
    }
    public function create(Boutique $boutiq)
    {
       

return view("createBoutique");
    }
    public function store( Request $request)
    {
       $request->validate([
        "idmarché"=>"required",
      "localisation"=>"required",
      "nomproprietaire"=>"required",


    ]);
       // Amis::created($request->all());
        
        Boutique::create([
            "idmarché"=>$request->idmarché,
        "localisation"=>$request->localisation,
        "nomproprietaire"=>$request->nomproprietaire,
       
        ]);
        
        return back()->with("success","Boutique ajoutée avec succès");

    }
    public function edit(Boutique $boutique)
    {
return view("editerBoutique",compact("boutique"));
    }
    public function editer( Request $request,Boutique $boutique)
    {
       $request->validate([
        "idmarché"=>"required",
      "localisation"=>"required",
      "nomproprietaire"=>"required",


    ]);
       // Amis::created($request->all());
        
        $boutique->update([
            "idmarché"=>$request->idmarché,
        "localisation"=>$request->localisation,
        "nomproprietaire"=>$request->nomproprietaire,
       
        ]);
        
        return back()->with("success","Boutique éditée avec succès");

    }
    public function delete(Boutique $boutique)
    { 
      $boutique->delete();
       

      return back()->with("successDelete","Boutique supprimée avec succès");
    }
}
