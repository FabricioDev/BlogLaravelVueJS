<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dudu Amaral - Site Oficial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
    <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('index') }}">
    <img src="{{ asset('img/logo.png') }}" width="70px;" title="Home - Dudu Amaral" 
      alt="Página Inicial - Dudu Amaral">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>

    <div class="btn-group" role="group" aria-label="Exemplo básico">
      <button class="btn btn-danger my-2 my-sm-0" type="link">Home</button>
      <button class="btn btn-outline-danger my-2 my-sm-0" type="link">Quem sou</button>
      <button class="btn btn-outline-danger my-2 my-sm-0" type="link">Fotos</button>
      <button class="btn btn-outline-danger my-2 my-sm-0" type="link">Agenda</button>
      <button class="btn btn-outline-danger my-2 my-sm-0" type="link">Contato</button>
    </div>
  </div>
</nav>
</header>
    <main>
    
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade"  data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img/Imagem_01.jpg') }}" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/Imagem_02.jpg') }}" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/Imagem_03.jpg') }}" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/Imagem_04.jpg') }}" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/Imagem_05.jpg') }}" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/Imagem_06.jpg') }}" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/Imagem_07.jpg') }}" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/Imagem_08.jpg') }}" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/Imagem_09.jpg') }}" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="footer-copyright text-center py-3">Siga as redes sociais: 
        <a href="https://www.facebook.com/duduamaraloficial/" title="Facebook Dudu Amaral Oficial" target="_blank"><img src="{{ asset('img/Facebook.png') }}" width="30px;" alt=""></a>
        <a href="https://www.instagram.com/duduamaraloficial/" title="Instagram Dudu Amaral Oficial" target="_blank"><img src="{{ asset('img/1200px-Instagram-Icon.png') }}" width="30px;" alt=""></a>
        <a href="https://www.youtube.com/channel/UCxtZ5w-nc_4i-WsPlttsA6Q" title="YouTube Dudu Amaral Oficial" target="_blank"><img src="{{ asset('img/YT.png') }}" width="30px;" alt=""> </a>
    </div>

       </body>
</html>