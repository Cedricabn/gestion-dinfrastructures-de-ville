
@extends("layouts.master")

@section("contenu")
<br><br><br><br>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4"> Créer un équipement</h3>
<div class="mt-4">
    @if(session()->has("success"))
  
   <div style="background-color: green; border-radius: 3px; width:65%;"> {{ session()->get("success") }}</div>
    @endif
    @if( $errors->any())
    <div class="alert alert-danger">
        <ul>
       @foreach ( $errors->all() as $error )
      <li>{{ $error }} </li>
        @endforeach

    </ul>
    </div>
   @endif
<form style="width:65%" method="post" action=" {{ route('equipement.ajouter')}}">
 @csrf 
<div class="mb-3">
    <label for="name" class="form-label">Nom de l'equipement</label>
    <input type="text" class="form-control" name="nom" >
 
  </div>
<div class="mb-3">
    <label for="locate" class="form-label">Localisation</label>
    <input type="text" class="form-control" name="localisation" >
 
  </div>
  <div class="mb-3">
    <label for="Type" class="form-label">Type Equipement</label>
    <input type="text" class="form-control" name="type">
  </div>
 
  <button type="submit" class="btn btn-primary">Editer</button>
  <a href=" {{ route('accesEquipement') }}" class="btn btn-danger">Annuler</a>
</form>
<div class="d-flex justify-content-end mb=4 ">
     
</div>
</div>
  


  
    </div>  
  </div>
@endsection