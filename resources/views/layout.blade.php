<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <title>TizCar</title>


   
      
</head>
<body>
    <header>
      @php
          function activeMenu($url){
            return request()->is($url) || request()->is($url.'/*') ? 'active' : '';
          }
      @endphp


      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/">Tizcar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item {{ activeMenu('employees') }} ">
                <a class="nav-link" href=" {{ route('employees.index') }} ">Empleados </a>
              </li>
              <li class="nav-item {{ activeMenu('automobiles') }}">
                <a class="nav-link" href=" {{ route('automobiles.index') }} ">Autos</a>
              </li>
              <li class="nav-item {{ activeMenu('customers') }}">
                <a class="nav-link" href=" {{ route('customers.index') }} ">Clientes</a>
              </li>
              <li class="nav-item {{ activeMenu('sales') }}">
                <a class="nav-link " href=" {{ route('sales.index') }} ">Ventas</a>
              </li>
            </ul>
          </div>
        </nav>
    </header>
    

      <div class="container">
        @yield('content')
  
        <footer>Copyright © {{ date('Y') }}</footer>
  
      </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>