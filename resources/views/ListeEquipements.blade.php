@extends("layouts.master")

@section("contenu")
<br><br><br><br>
<div class="mt-4">
<div class="d-flex justify-content-end mb=4 ">
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
    </tr>
  </thead>
  <tbody>
    @foreach($liste_equipements as $equipement)
    <tr>
      <th scope="row"> {{ $equipement->nom }}</th>
      <td> {{  $equipement->localisation }}</td>
      <td> {{ $equipement->type }}</td>
      
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