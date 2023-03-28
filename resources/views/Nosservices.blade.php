@extends("layouts.master")

@section("contenu")
<br><br><br><br>
<center><h2 class="border pb-2 mb-4 text-center rounded-3">Nos services:</h2></center>
<br><br><br> <br> <br>
<div class="row row-cols-1 row-cols-md-4 mb-5 text-center">
      <div class="col" style="width: 25%;heigth:25%;">
        <div class="card mb-4 rounded-3 shadow-sm ">
        <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Gestion des marchés </h4>
          </div>
          <div class="card-body">
           <!-- <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>-->
            <ul class="list-unstyled mt-3 mb-4"> 
              <li>Consultez</li>
              <li>Enrégistrez</li>
              <li>Modifiez</li>
              <li>Supprimez</li>
            </ul>
            <a href="{{route('accesMarché')}}" class="w-100 btn btn-lg btn-outline-primary"> Aller</a>
          </div>
        </div>
      </div>
      <div class="col" style="width: 25%;heigth:25%;">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Gestion des boutiques</h4>
          </div>
          <div class="card-body">
       
            <ul class="list-unstyled mt-3 mb-4">
            <li>Consultez</li>
              <li>Enrégistrez</li>
              <li>Modifiez</li>
              <li>Supprimez</li>
            </ul>
            <a href="{{route('accesBoutique')}} " class="w-100 btn btn-lg btn-outline-primary"> Aller</a>
          </div>
        </div>
      </div>
      <div class="col" style="width: 25%;heigth:25%;">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Gestion des parkings</h4>
          </div>
          <div class="card-body">

          <ul class="list-unstyled mt-3 mb-4">
            <li>Consultez</li>
              <li>Enrégistrez</li>
              <li>Modifiez</li>
              <li>Supprimez</li>
            </ul>
            <a href="{{ route('accesParking') }} " class="w-100 btn btn-lg btn-outline-primary"> Aller</a>

            
          </div>
        </div>
      </div>
      <div class="col" style="width: 25%;heigth:25%;">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Gestion des équipements</h4>
          </div>
          <div class="card-body">
           <!-- <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>-->
            <ul class="list-unstyled mt-3 mb-4">
            <li>Consultez</li>
              <li>Enrégistrez</li>
              <li>Modifiez</li>
              <li>Supprimez</li>
            </ul>
            <a href="{{route('accesEquipement')}}" class="w-100 btn btn-lg btn-outline-primary"> Aller</a>
          </div>
        </div>
      </div>
      
    </div>
   
    @endsection