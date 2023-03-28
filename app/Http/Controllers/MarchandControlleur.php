<?php

namespace App\Http\Controllers;

use App\Models\Marchand;
use App\Models\Marché;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MarchandControlleur extends Controller
{
    public function access(Marché $marché)
    {$liste_marchands=Marchand::all();
     
        return view('LesMarchands',compact('liste_marchands','marché'));
    }
    public function create(Marchand $marchand)
    {
return view("createMarchand");
    }
    public function store( Request $request)
    {
       $request->validate([
        "nom"=>"required",
        "prenom"=>"required",
        "nummarché"=>"required",
        "numstand"=>"required",
      

    ]);
       // Amis::created($request->all());
        
        Marchand::create([
        "nom"=>$request->nom,
        "prenom"=>$request->prenom,
      "nummarché"=>$request->nummarché,
      "numstand"=>$request->numstand,

        ]);
        
        return back()->with("success","Marchand ajouté avec succès");

    }
    public function edit(Marchand $marchand)
    {
return view("editerMarchand",compact("marchand"));
    }
    public function editer( Request $request,Marchand $marchand)
    {
       $request->validate([
        "nom"=>"required",
        "prenom"=>"required",
        "numstand"=>"required",
      "nummarché"=>"required",



    ]);
       // Amis::created($request->all());
        
        $marchand->update([
            "nom"=>$request->nom,
        "prenom"=>$request->prenom,
      "nummarché"=>$request->nummarché,
      "numstand"=>$request->numstand,
       
        ]);
        
        return back()->with("success","Marchand édité avec succès");

    }
    public function delete(Marchand $marchand)
    { 
      $marchand->delete();
       

      return back()->with("successDelete","Marchand supprimé avec succès");
    }
    public function return()
    { return view('LesMarchands');}
}
