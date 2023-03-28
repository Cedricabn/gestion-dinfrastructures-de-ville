
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   
    <title> Gesima</title>

 
    

    

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

 
<meta name="theme-color" content="#712cf9">


<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      body {
color:black;
background-color:whitesmoke;
background-image:url('img/backb.jpg') ;
}
  
  </style>

    
  
    <link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet">
  </head>
  <body  >

  <div class="container d-flex align-items-auto bg-secondary rounded-5 " >  
 
<nav class="navbar navbar-expand-lg   flex-column flex-md-row bd-navbar " aria-label="Main navigation" >
  <div class="container-fluid">
  <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
      <img src="{{ asset('img/logo.jpg') }}" alt="Mairiedecotonoulogo" style="border-style: none;" width="40" height="100%" class=" logo me-auto rounded" border-radius="3" viewBox="0 0 118 94"> 
      <h1><span class=" logo mx-5 fs-4 text-info">GESIMA</span> </h1>
      </a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse mx-5" id="navbarsExampleDefault" style="align: right ;">
     <h5> <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link mx-4" aria-current="page" href="{{ route('Accueil') }}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-4 text-" href="{{ route('NosServices') }}">Nos services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-4" href="">A propos</a>
        </li>
        <div class="dropdown">
        <li class="nav-item dropdown">
          <a   class="nav-link dropdown-toggle mx-2 " data-bs-toggle="dropdown">Contactez-nous</a>
       
            <ul class="dropdown-menu">
      <li class="dropdown-item">   <img src="{{ asset('img/phone-call.png') }}" alt="" height="16px" width="16px" > <a  href="tel:+22921603539"> 21603539</a></li>
      <li class="dropdown-item">  <img src="{{ asset('img/gmail.png')}}" alt=""> <a href="mailto:Cotonoucommune229@gmail.com"  >Cotonoucommune229@gmail.com</a></li>
    </ul>
    </h5>
        </li>
        </div>
      </ul>
    </div>
  </div>
</nav>
    </div>


<main class="container">

  @yield("contenu")
    
</main>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

      <script src="{{ asset('js/offcanvas.js') }}"></script>
      </div>
  </body>
</html>


