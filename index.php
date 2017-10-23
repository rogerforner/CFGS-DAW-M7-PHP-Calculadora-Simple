<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculadora</title>

  <style media="screen">
  form {
    text-align: center;
    max-width: 430px;
  }
  input.calcular {
    margin-top: 22px;
    width: 300px;
  }
  </style>
</head>
<body>
  <h1>Calculadora <small>simple</small></h1>

  <form class="formulario" action="calcular.php" method="post">
    <!-- Operando "a" -->
    <input type="number" name="a" value="0.00" step="0.01">

    <!-- Operador -->
    <select class="operador" name="operador">
      <option value="suma">+</option>
      <option value="resta">-</option>
      <option value="multiplicacion">x</option>
      <option value="division">%</option>
      <option value="potencia">^</option>
      <option value="seno">sin()</option>
      <option value="coseno">cos()</option>
      <option value="tangente">tan()</option>
    </select>

    <!-- Operando "b" -->
    <input type="number" name="b" value="0.00" step="0.01">

    <!-- Enviar -->
    <br>
    <input class="calcular" type="submit" value="calcular">
  </form>

</body>
</html>
