<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 1</title>
</head>
<body>
    <h1>Cálculo de Juros Compostos</h1>
    <form action="/resposta_exercicio1" method="post">
        @csrf
        <input type="number" name="valor_inicial" placeholder="Valor Inicial"/>
        <input type="number" name="taxa_juros" placeholder="Taxa de Juros Anual"/>
        <input type="number" name="anos" placeholder="Anos"/>
        <button type="submit">Calcular</button>
    </form>
  <?php
  // Seu código PHP aqui
  ?>
</body>
</html>
