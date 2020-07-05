<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2|Baloo+Paaji+2|Maven+Pro|Nunito+Sans|Rajdhani&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a340b68414.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Juan Marcos Guzman</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="fondoConNombre row">
        <h1 class="namecolor">Juan Marcos Guzman</h1>
        <h2 class="subtitulo col-12 wow flash">Desarrollador Web Full Stack</h2>
        @if(session()->has('message'))
          <div class="alert alert-success">
            {{ session()->get('message') }}
          </div>
        @endif
        @if($errors->any())
        <h4 class="subtitulo col-12">Hubo un error al enviar el formulario, por favor inténtelo de nuevo</h4>
        @endif
        <div class="divfotoperfil">
        </div>
      </div>
    
      
      
      <br><br><br><br>
      <div class="row">
        <div class="informacion center col-12">
            <br>
            <p>Me considero un estudiante muy dedicado, con muchas ganas de seguir aprendiendo. Actualmente busco insertarme laboralmente en el mundo del desarrollo web para poner en practica las herramientas y conocimientos adquiridos durante mi formación.</p>
            <p>| 04/10/1999 |</p>
            <p>| juanmguzmann@gmail.com |</p>
            <a href="https://www.linkedin.com/in/juanmguzman/" class="sepiconos"><i class="fab fa-linkedin linkedin iconos"></i></a>
            <a href="https://github.com/juanmguzmann" class="sepiconos"><i class="fab fa-github iconos"></i></a> 
            <a href="/storage/CV - Juan Marcos Guzman.pdf" class="sepiconos" download> <i class="far fa-file-pdf iconos"></i></a>
            <a href="mailto:juanmguzmann@gmail.com" target="_blank" class="sepiconos"><i class="iconos far fa-envelope"></i></a>
        </div>
      </div>

      <div class="formacion row">  
        <div class="informacion center col col-md-6 col-lg-4">
          <h2 class="espacios">EDUCACIÓN</h2>
          <ul>
            <li class="bold">Licenciatura en Administración</li>
            <p class="institucion">Universidad de Buenos Aires - En curso</p>
            <li class="bold">Desarrollador Web Full Stack</li>
            <p class="institucion">Digital House Coding School - 2019</p>
            <li>Bachiller con Orientación en Ciencias Económicas</li>
            <p class="institucion">Instituto San Roman - 2017</p>
            <li>English Language Learning Summer Program</li>
            <p class="institucion">Assumption College - 2016</p>
          </ul>
        </div>
        <div class="informacion center col col-md-6 col-lg-4">
          <h2 class="espacios">SKILLS</h2>
          <p class="wow fadeInLeft">PHP</p>
          <p class="wow fadeInLeft">Laravel</p>
          <p class="wow fadeInLeft">HTML5</p>
          <p class="wow fadeInLeft">CSS3</p>
          <p class="wow fadeInLeft">JavaScript</p>
          <p class="wow fadeInLeft">MySQL</p>
        </div>
        <div class="informacion center col col-md-12 col-lg-4">
          <ul class="">
            <h2 class="espacios">EXPERIENCIA</h2>
            <li >IT Access Mgmnt Specialist</li>
            <li class="institucion">Parexel | Sep 2019 - Actualidad</li>
            <br>
            <li>IT Service Desk Specialist</li>
            <li class="institucion">Parexel | Jul 2018 - Ago 2019</li>
            <br>
            <li>Asistente Administrativo</li>
            <li class="institucion">Nutritional Company SRL | Jun 2017 - Jun 2018</li>
          </ul>
        </div>
      </div>
      <div class="contacto row" id="contacto">
        <div class="divcontacto informacion center form col-12">
          <h2 class="espacios">CONTACTO</h2>
          <br>
          <form class="wow fadeInLeft" method="POST" action="/contacto" role="form">
            @csrf
            <div class="form-group has-error">
              <label for="name">Nombre y Apellido  *</label>
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
              <small class="help-block text-danger" role="alert" >
                <div>{{$errors->first('name')}} </div>
              </small>
            </div>
            <div class="form-group">
              <label>Email  *</label> <br>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}" >
              <small class="help-block text-danger" role="alert" >
                <div>{{$errors->first('email')}} </div>
              </small>
            </div>
            <div class="form-group">
              <label>Mensaje</label>
            <textarea name="message" class="form-control">{{ old('message') }}</textarea>
            <small class="help-block text-danger" role="alert" >
              <div>{{$errors->first('message')}} </div>
            </small>
            </div>
            <div class="form-group">
              <button class="btn wow bounceIn" type="submit">Enviar</button>
            </div>
          </form>
        </div>
      </div>
      <footer class="row">
        <h4 class="col-6">2020</h3>
        <ul class="col-6">
          <li>Juan Marcos Guzman | Núñez, CABA</li>
        </ul>
      </footer>


    </div>
    <script src="js/functions.js">
    </script>
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

{{-- <div class="informacion center col-5">
          <h2 class="espacios">INFORMACION</h2>
          <p>Desarrollador Web Full Stack</p>
          <p>Estudiante</p>
          <p>juanmguzmann@gmail.com</p>
          <p>04/10/1999</p>
        </div>  --}}

              {{-- <div class="row">
        <br>
        <div class="col-3">
          <h4>juanmguzmann@gmail.com</h4>
        </div>
        <div class="col-3">
          <h4>04/10/1999</h4>
        </div>
        <div class="col-3">
          <h4>Buenos Aires, Argentina</h4>
        </div>
        <div class="col-3">
          <h4>Estudiante</h4>
        </div>
        <br>
      </div> --}}