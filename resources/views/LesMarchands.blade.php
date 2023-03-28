

@extends("layouts.master")

@section("contenu")
<br><br>

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

 <center><tr style="border: none;"> <td><h4> LISTE DES MARCHANDS  </h4> </td></tr> </center>

    <tr>
      <th scope="col">Nom du marchand</th>
      <th scope="col">Prenom du marchand</th>
      <th scope="col">Numero du stand</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
   $idma=  $marché->idmarché ?>
    @foreach($liste_marchands as $marchand)
    <?php   $idm=$marchand->nummarché;?>
  @if($idma===$idm)
    <tr>
      <th scope="row"> {{ $marchand->nom }}</th>
      <td> {{   $marchand->prenom }}</td>
      <td> {{ $marchand->numstand}}</td>
            <td>
        <a href="{{ route('marchand.edit' ,['marchand'=>$marchand->id])}} " class="btn btn-primary"> Editer</a>
        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez vous supprimer ce marchand?')){document.getElementById('form-{{$marchand->id}}'  ).submit() }"> Supprimer</a>
      <form  id="form-{{$marchand->id}}" action="{{ route('marchand.supprimer',['marchand'=>$marchand->id]) }}" method="post">
@csrf 
<input type="hidden" name="_method" value="delete">

      </form>
      </td>
    </tr>
    @endif
    @endforeach
   
  </tbody>
 
</table>


    <div class="lh-1">
    
  </div>
  @endsection