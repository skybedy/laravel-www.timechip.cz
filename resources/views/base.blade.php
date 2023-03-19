<!DOCTYPE html>
<html lang="cs" dir="ltr">
<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="sport timing,čipová časomíra, měření závodů">
    <meta name="description" content="Výsledkový systém a čipová časomíra">
    <meta name="author" content="TimeChip">
    <meta name="Robots" content="index,follow" />
    <title>timechip | @yield('title')</title>
    <link rel="stylesheet" href="/css/fontello.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="/css/main.css" media="screen" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:301,400,700' rel='stylesheet' type='text/css'>
     <script src="https://cdn.jsdelivr.net/npm/vue@3.2.45/dist/vue.global.min.js"></script>
  </head>
<body>



<div class="@yield('container-type')">

<nav class="navbar navbar-expand-lg">
  
  <div class="container-fluid">
    
  <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="TimeChip" width="146" height="34" /></a></a>
    
    <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Závody
          </a>
          <ul class="dropdown-menu">
            @for ($i = $currentYear; $i > 2008; $i--)
              <li><a class="dropdown-item" href="{{route('race',['raceYear' => $i])}}"> {{ $i }}</a></li>
            @endfor
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Výsledky
          </a>
          <ul class="dropdown-menu">
            @for ($i = $currentYear; $i > 2010; $i--)
              <li><a class="dropdown-item" href="{{ url('vysledky/'.$i) }}"> {{ $i }}</a></li>
            @endfor
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('registration',['raceYear' => 2023,'raceId' => 8]) }}">Registrace</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" target="_blank" href="{{ route('contact.show') }}">Kontakt</a>
        </li>
      </ul>
    
    </div>

  </div>
</nav>
    
</div>
    

    <div class="container-fluid underbar">
        <div class="@yield('container-type')">
            <h1>@yield('h1')</h1>
        </div>
    </div>

    <div class="@yield('container-type')">
      @yield('content')
    </div>
    
    <div class="@yield('container-type')">
        <div class="footer">
            timechip.cz 2004-{{ $currentYear }}
        </div>
    </div>

    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
    
