@extends("layouts.master")

@section("contenu")
<br><br>
<div class="mt-4">
<div class="d-flex justify-content-end mb=4 ">
       <a href="{{route('marché.create')}}" class="btn btn-info"> Ajouter un marché</a>
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

 <center><tr style="border: none;"> <td><h4> LISTE DES MARCHES  </h4> </td></tr> </center>

    <tr>
      <th scope="col">Identifiant du marché</th>
      <th scope="col">Nom du marché</th>
      <th scope="col">Localisation</th>
      <th scope="col">Capacité</th>
      <th scope="col">Liste des marchands</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($liste_marchés as $marché)
    <tr>
      <th scope="row"> {{ $marché->idmarché }}</th>
      <td> {{  $marché->nomMarché }}</td>
      <td> {{  $marché->localisation }}</td>
      <td>{{ $marché->capacité}}</td>
      <td> <a href="{{route('accesMarchand',['marché'=>$marché->id]) }}" class="btn btn-secondary">Voir la liste des marchands</a></td>
      <td>
        <a href="{{ route('marché.edit' ,['marché'=>$marché->id])}} " class="btn btn-primary"> Editer</a>
        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez vous supprimer ce marché?')){document.getElementById('form-{{$marché->id}}'  ).submit() }"> Supprimer</a>
      <form  id="form-{{$marché->id}}" action="{{ route('marché.supprimer',['marché'=>$marché->id]) }}" method="post">
@csrf 
<input type="hidden" name="_method" value="delete">

      </form>
      </td>
    </tr>
   
    @endforeach
   <td></td>
   <td></td>
   <td>
   <div class="d-flex justify-content-end mb=4 ">
       <a href="{{route('marchand.create')}}" class="btn btn-success"> Ajouter un marchand</a>
</div>

   </td>
   <td></td>
   <td></td>
   <td></td>
  </tbody>
 
</table>


    <div class="lh-1">
    
  </div>
  @endsection