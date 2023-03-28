@extends("layouts.master")

@section("contenu")
<br><br>
<div class="mt-4">
<div class="d-flex justify-content-end mb=4 ">
       <a href="{{route('equipement.create')}}" class="btn btn-info"> Ajouter un equipement</a>
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
<div class="d-flex align-items-center p-3 my-3 text-white bg-info rounded-3 shadow-sm">
  
  <table class="table">
  <thead>

 <center><tr style="border: none;"> <td><h4> LISTE DES EQUIPEMENTS </h4> </td></tr> </center>

    <tr>
      <th scope="col">Nom de l'équipement</th>
      <th scope="col">Localisation</th>
      <th scope="col">Type</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($liste_equipements as $equipement)
    <tr>
      <th scope="row"> {{ $equipement->nom }}</th>
      <td> {{  $equipement->localisation }}</td>
      <td> {{ $equipement->type }}</td>
      
   
      <td>
        <a href="{{ route('equipement.edit' ,['equipement'=>$equipement->id])}} " class="btn btn-primary"> Editer</a>
        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez vous supprimer cet équipement de la liste?')){document.getElementById('form-{{$equipement->id}}'  ).submit() }"> Supprimer</a>
      <form  id="form-{{$equipement->id}}" action="{{ route('equipement.supprimer',['equipement'=>$equipement->id]) }}" method="post">
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