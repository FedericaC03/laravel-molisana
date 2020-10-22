

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Prodotti</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
      
    </head>
    <body>
      @include('partials/header')

        <main class="main-prodotto-page">
          <div class="primoblocco">
            <img src="{{$prodotto["src-h"]}}" alt="">
            <h1 class="prodotto-page-titolo">{{$prodotto["titolo"]}}</h1>
          </div>
          <img class="prodotto-page-img" src="{{$prodotto["src-p"]}}" alt="">

          <div class="container">
            <p class="prodotto-page-descrizione">
              {!! $prodotto["descrizione"] !!}
          </p>
          </div>
        @if ($id > 0)
            <div class="prev">
              <a href="prodotti/show/{{$id -1}}">
                <i class="fas fa-angle-left"></i>
              </a>
              </div>
        @endif
        @if ($id < 12 - 1)
        <div class="next">
        <a href="prodotti/show/{{$id + 1}}">
          <i class="fas fa-angle-right"></i>
        </a>
        </div>

        @endif
                  
        </main>
        @include('partials/footer')


    </body>
    </html>