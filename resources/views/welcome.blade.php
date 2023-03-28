@extends("layouts.master")

@section("contenu")


<br><br>
<div> <marquee behavior="bottom" direction="top">
<h3 class="border pb-2 mb-4 text-center rounded-3">BIENVENUE SUR GESIMA</h3> <br> 
</marquee>
</div> 
<center><div class="d-flex align-items-center p-3 my-3 text-green  rounded shadow-sm" style="width:60% ; heigth:60%;">
   
   <div>
    <h1>  <p> Gesima est une plateforme de gestion des infrastructures marchandes </h1>
   <h3> Les différents modules:</h3>
    <ul>
     
    </ul>
     </p>   
</div> 
</div></center>
<br><br>

<div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm ">
         <br>
<center><img  src="img/cart.png" width="50" height="100%" alt="Marchés logo" class="rounded border-0"></center>
   <div class="card-body">
      <h5 class="card-title"> <a href="{{route('ListeMarchés')}}" class="text-info"> La gestion des marchés publics </a></h5>
      <p class="card-text">Consultez la liste des differents marchés publics de la ville de Cotonou </p>
   </div>
</div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm ">
         <br>
<center><img  src="img/shop.jpg" width="60" height="100%" alt="boutique logo"></center>
   <div class="card-body">
      <h5 class="card-title"> <a href="{{route('ListeBoutiques')}}" class="text-info"> La gestion des boutiques </a></h5>
      <p class="card-text">Consultez la liste des différentes boutiques de la ville de Cotonou </p>
   <br></div>
</div></div>

<div class="col">
        <div class="card mb-6 rounded-3 shadow-sm ">
         <br>
<center><img  src="img/parkking.jpg" width="140" height="100%" alt="Parking logo" ></center>
   <div class="card-body">
      <h5 class="card-title"> <a href="{{route('ListeParkings')}}" class="text-info"> La gestion des parkings </a></h5>
      <p class="card-text">Consultez la liste des differents parkings de la ville de Cotonou </p>
  <br> </div>
</div></div>
<div class="col">
        <div class="card mb-6 rounded-3 shadow-sm ">
<center><img  src="img/gare.jpg" width="90" height="100%" alt="Site logo"></center>
   <div class="card-body">
      <h5 class="card-title"> <a href="{{route('ListeEquipements')}}" class="text-info"> La gestion des équipements(gares routieres ,abattoirs...) </a></h5>
      <p class="card-text">Consultez la liste des differents équipements de la ville de Cotonou </p>
   </div>
      </div></div>

</div>

  

   
@endsection
