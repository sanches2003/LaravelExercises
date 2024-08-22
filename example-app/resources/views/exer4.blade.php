<!DOCTYPE HTML>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exercício 4</title>
    </head>
    <body>
        <form action="/exer4resp" method="post">
            @csrf
            <input type="number" placeholder="Valor 1"
            name="valor1"/>
            <input type="number" placeholder="Valor 2"
            name="valor2"/>
            <button type="submit">Calcular</button>
        </form>