<!DOCTYPE HTML>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exercício 7</title>
    </head>
    <body>
        <form action="/exer7resp" method="post">
            @csrf
            <input type="number" placeholder="Valor 1"
            name="valor1"/>
            <button type="submit">Calcular</button>
        </form>