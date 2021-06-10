<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    
    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
    </style>

    <!-- Custom styles for this template -->
<link href="{{asset('css/login.css')}}" rel="stylesheet">
  </head>
  <body class="principal">

<main class="form-signin">
  <a href="https://www.grupodva.com.br/"><img src="{{asset('img/logo_dva.png')}}" alt=""></a>
  <form action="{{route('login.entrar')}}" method="post" >
    @csrf

    <h2 class="">RH</h2>

    @if($errors->all())
      @foreach($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        {{$error}}
      </div>
      @endforeach
    @endif

    <h1 class="">Acesse sua conta</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="nome@email.com.br">
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="senha" id="floatingPassword" placeholder="Senha">
    </div>

    <!-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me">
      </label>
    </div> -->
    <button class="" type="submit">Entrar</button>
  </form>
</main>

  </body>
</html>
