<!DOCTYPE HTML>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exercício 5</title>
    </head>
    <body>
        <form action="/exer5resp" method="post">
            @csrf
            <input type="number" placeholder="Valor 1"
            name="valor1"/>
            <input type="number" placeholder="Valor 2"
            name="valor2"/>
            <input type="number" placeholder="Valor 2"
            name="valor3"/>
            <button type="submit">Calcular</button>
        </form>