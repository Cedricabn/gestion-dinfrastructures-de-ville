
@extends("layouts.master")

@section("contenu")
<br><br><br><br>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4"> Modifier les informations d'une boutique</h3>
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
<form style="width:65%" method="post" action=" {{ route('parking.editer',['parking'=>$parking->id])}}) }}">
 @csrf 
<input type="hidden" name="_method" value="put">
<div class="mb-3">
    <label for="nomP" class="form-label">Numero du Parking</label>
    <input type="text" class="form-control" name="numPark" value=" {{ $parking->numPark}}">
 
  </div>
  <div class="mb-3">
    <label for="nameP" class="form-label">Nom du Parking</label>
    <input type="text" class="form-control" name="nomPark"value="{{ $parking->nomPark}}">
  </div>
  <div class="mb-3">
    <label for="locate" class="form-label">Localisation</label>
    <input type="text" class="form-control" name="localisation" value=" {{ $parking->localisation}}">
 
  </div>
  <div class="mb-3">
    <label for="capacity" class="form-label">Capacité</label>
    <input type="text" class="form-control" name="capacité"value="{{ $parking->capacité}}">
  </div>
 
  <button type="submit" class="btn btn-primary">Editer</button>
  <a href=" {{ route('accesParking') }}" class="btn btn-danger">Annuler</a>
</form>
<div class="d-flex justify-content-end mb=4 ">
     
</div>
</div>
  


  
    </div>  
  </div>
@endsection