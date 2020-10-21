@php

$data = config('pasta');

$lunga = [];
$corta = [];
$cortissima = [];

foreach ($data as $key => $prodotto) {
  if ($prodotto["tipo"] == "lunga") {
    $lunga[$key] = $prodotto;
  } elseif ($prodotto["tipo"] == "corta") {
    $corta[$key] = $prodotto;
  } elseif ($prodotto["tipo"] == "cortissima") {
    $cortissima[$key] = $prodotto;
  }
}

@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Molisana</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
   
    </head>
    <body>
      @include('partials/header');
      <main class="main">
          <div class="container">
            <h2>LE LUNGHE</h2> 
            <div class="blocchiPasta">
                
                @foreach ($lunga as $key => $pastalunga)
                  <div class="single-box">
                      <img class="img-pasta" src="{{$pastalunga["src"]}}" alt="pasta">
                      <div class="overlay">
                        <a href="prodotti/show/{{$key}}"> <h3 class="titolo">{{$pastalunga["titolo"]}}</h3> </a>                       <img class="icon" src="{{url('image/icon.svg')}}" alt="">
                      </div>
                  </div>
                @endforeach 
              
            </div>
            <h2>LE CORTE</h2>
            <div class="blocchiPasta">
              @foreach ($corta as $key => $pastacorta)
              <div class="single-box">
                <img class="img-pasta" src="{{$pastacorta["src"]}}" alt="pasta">
                <div class="overlay">
                <a href="prodotti/show/{{$key}}"> <h3 class="titolo">{{$pastacorta["titolo"]}}</h3> </a> 
                <img class="icon" src="{{url('image/icon.svg')}}" alt="">
                </div>
            </div>            @endforeach 
            </div>
            <h2>LE CORTISSIME</h2>
            <div class="blocchiPasta">
              @foreach ($cortissima as $key =>
               $pastacortissima)
              <div class="single-box">
                <img class="img-pasta" src="{{$pastacortissima["src"]}}" alt="pasta">
                <div class="overlay">
                  <a href="prodotti/show/{{$key}}"> <h3 class="titolo">{{$pastacortissima["titolo"]}}</h3> </a>                 <img class="icon" src="{{url('image/icon.svg')}}" alt="">
                </div>
            </div>
              @endforeach 
            </div>
          </div>
      </main>
      @include('partials/footer');

    </body>
</html>
