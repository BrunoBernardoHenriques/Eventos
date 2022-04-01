<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="/css/styles.css">
       
         <script src="/js/scripts.js"></script>

      
    </head>
    <center>
    <body> 
        <h1>Algum título</h1>
        <img src="/img/E3.jpg">
        
@if (10>5)
<p>True</p>
@endif
<h1>
{{ $nome}}
        </h1>



@for($i2 = 0; $i2 < count($nomes); $i2++)


@if ($nomes[$i2] != 'Bruno')
<p>Seu nome é {{$nomes[$i2]}} e não é {{$nome}}</p>
@endif
@endfor


@if ($nome == "Bruno")
<p>O nome é legal</p>
@else 
<p>O nome não é legal</p>
@endif

<p>idade: {{$idade}}</p>

@for($i = 0; $i < count($arr); $i++)
 
<p>Número Indicie array{{$i}}
Número valor array{{$arr[$i]}}</p>
@endfor



@foreach($nomes as $nome)
<p>{{$nome}}</p>
@endforeach
    </body>
</html>
