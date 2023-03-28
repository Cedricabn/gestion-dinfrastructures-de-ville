@extends("layouts.master")

@section("contenu")
<br><br>
<div class="mt-4">
<div class="d-flex justify-content-end mb=4 ">
       <a href="{{ route('parking.create') }}" class="btn btn-info"> Ajouter un Parking</a>
</div>
</div>
@if(session()->has("successDelete"))
  
  <div style="background-color: green; border-radius: 3px;"> {{ session()->get("successDelete") }}</div>
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
<div class="d-flex align-items-center p-3 my-3 text-white bg-info rounded shadow-sm">
  
  <table class="table">
  <thead>

 <center><tr style="border: none;"> <td><h4> LISTE DES BOUTIQUES </h4> </td></tr> </center>

    <tr>
      <th scope="col">Numero du Parking</th>
      <th scope="col">Nom du Parking</th>
      <th scope="col">Localisation</th>
      <th scope="col">Capacité</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($liste_parkings as $parking)
    <tr>
      <th scope="row"> {{ $parking->numPark }}</th>
      <td> {{  $parking->nomPark }}</td>
      <td> {{  $parking->localisation }}</td>
      <td>{{ $parking->capacité}}</td>
   
      <td>
        <a href="{{ route('parking.edit' ,['parking'=>$parking->id]) }} " class="btn btn-primary"> Editer</a>
        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez vous supprimer ce parking de la liste?')){document.getElementById('form-{{$parking->id}}'  ).submit() }"> Supprimer</a>
      <form  id="form-{{$parking->id}}" action="{{ route('parking.supprimer',['parking'=>$parking->id]) }}" method="post">
@csrf 
<input type="hidden" name="_method" value="delete">

      </form>
      </td>
    </tr>
   
    @endforeach
    <tr>
    <td> </td>  
    <td> </td>
    <td> </td>
  </tr>
  </tbody>
 
</table>


    <div class="lh-1">
    
  </div>
  @endsection