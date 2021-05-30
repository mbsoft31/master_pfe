<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/fontawesome.min.css" rel="stylesheet">
    <link href="css/svg-with-js.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @if(app()->isLocale('ar'))
        <style>
            * {
                direction: rtl;
                --tw-space-x-reverse: 1 !important;
            }

            /* body {
                font-family: 'Amiri', serif;
            } */
        </style>
    @endif
    <script src="{{ mix('js/app.js') }}"></script>
</head>




    <body style="background-color: white" class="antialiased">
        <div class="container-fluid fixed-top p-4">
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-muted">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-muted">Register</a>
                                @endif
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <header id="home" class="home" style="background-color: white">

            <div class="jumbotron jumbotron-fluid" style="background-color: white">

              <div class="container">



                  {{-- <div class="container">
              <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">
                  <div class="mb-3">
                    <br>
                    <div class="input-group mb-3 ">

                      <input type="text" class="form-control " placeholder="trouver des memoires par mots cles" aria-label="Recipient's username" aria-describedby="basic-addon2"  style="border-radius: 50px 5px 5px 50px;">
                      <div class="input-group-append">
                        <button class="input-group-text    text-white" id="basic-addon2  "style="background-color: #513CE3 ;border-radius: 5px 50px 50px 5px;"> <i class="bi bi-search" ></i></button>
                      </div>
                    </div>
                   <!-- <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="trouver des memoires par mots cles"> -->
                  </div>

                </div>
                <div class="col-sm">

                </div>
              </div>
            </div>



              </div> --}}

            <br>
            <br>
            <br>

            </div>


            <br>
            <br>
            <br>

         <div class="list-group ">

            <a href="#" class="list-group-item list-group-item-action">Faculté des Sciences et de la Technologie</a>
            <a href="#" class="list-group-item list-group-item-action">Faculté des Sciences de la Nature et de la Vie</a>
            <a href="#" class="list-group-item list-group-item-action">Faculté des Sciences Economiques, Commerciales et Gestion</a>
            <a href="#" class="list-group-item list-group-item-action">Faculté de Droit et Sciences Politiques</a>
            <a href="#" class="list-group-item list-group-item-action">Faculté des Lettres et des Langues</a>
            <a href="#" class="list-group-item list-group-item-action">Faculté des Sciences Sociales et Humaines</a>
            <a href="#" class="list-group-item list-group-item-action">Institut des Sciences Agronomiques et Vétérinaires</a>
            <a href="#" class="list-group-item list-group-item-action">Institut des Sciences et Techniques des Activités Physiques et Sportives</a>
          </div>

        </header>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>



</body>
</html>
