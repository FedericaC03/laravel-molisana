@php


$data = config('pasta');

    $tipopasta  = [];

    foreach ($data as $key => $prodotto) {
        $prodotto["id"] = $key;
        $tipopasta[$prodotto["tipo"]][] = $prodotto;
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
      @include('partials/header')
      <main class="main">
        <div class="container">
        <div class="blocchiPasta">
          @foreach ($tipopasta as $key => $prodotti)
            <h2>{{$key}}</h2>
            @foreach ($prodotti as $prodotto)
            <div class="single-box">
              <img class="img-pasta" src="{{$prodotto["src"]}}" alt="pasta">
              <div class="overlay">
                <a href="prodotti/show/{{$prodotto["id"]}}"> 
                <h3 class="titolo">{{$prodotto["titolo"]}}</h3> </a> 
               <img class="icon" src="{{url('image/icon.svg')}}" alt="">
              </div>

            </div>
            @endforeach
          @endforeach
        </div>
    </main>
      @include('partials/footer');

    </body>
</html>
