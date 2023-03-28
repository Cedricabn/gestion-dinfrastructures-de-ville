@extends("layouts.master")

@section("contenu")
<br><br>
<div class="mt-4">
<div class="d-flex justify-content-end mb=4 ">
       <a href="{{ route('boutique.create') }}" class="btn btn-info"> Ajouter une boutique</a>
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
      <th scope="col">Identifiant</th>
      <th scope="col">Localisation</th>
      <th scope="col">Nom du proprietaire</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($liste_boutiques as $boutique)
    <tr>
      <th scope="row"> {{ $boutique->idmarché }}</th>
      <td> {{  $boutique->localisation }}</td>
      <td>{{ $boutique->nomproprietaire}}</td>
   
      <td>
        <a href="{{ route('boutique.edit' ,['boutique'=>$boutique->id])}} " class="btn btn-primary"> Editer</a>
        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez vous supprimer cette boutique?')){document.getElementById('form-{{$boutique->id}}'  ).submit() }"> Supprimer</a>
      <form  id="form-{{$boutique->id}}" action="{{ route('boutique.supprimer',['boutique'=>$boutique->id]) }}" method="post">
@csrf 
<input type="hidden" name="_method" value="delete">

      </form>
      </td>
    </tr>
   
    @endforeach
   
  </tbody>
 
</table>


    <div class="lh-1">
    
  </div>
  @endsection