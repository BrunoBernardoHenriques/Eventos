<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
 
        
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@0;1&display=swap" rel="stylesheet">
        


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    
     
    </head>
    <body> 
    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse" id="navbar">
   <a href="/" class="navbar-brand">
   <img src="/img/logo.png" alt="BrunexEventos">
</a>

<ul  class="navbar-nav">
 <li class="nav-item">
     <a href="/" class="nav-link">Eventos</a>
</li>
  
<li class="nav-item">
     <a href="/" class="nav-link">Criar Eventos</a>
</li>
<li class="nav-item">
     <a href="/" class="nav-link">Entrar</a>
</li>
<li class="nav-item">
     <a href="/" class="nav-link">Cadastrar</a>
</li>




</ul>









</div>
</nav>



            </header>
   @yield('content')
<footer>
<p>Brunex Eventos &copy; 2022</p>
</footer>
 </body>

</html>
