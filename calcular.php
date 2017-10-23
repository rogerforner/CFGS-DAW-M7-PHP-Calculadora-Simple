<?php
//#######################################################################
//############################################################## "ÍNDICE"
//***********************************************************************
//# *********************************************************************
//# Funciones
//# Valores
//# Operaciones
//# Tratar errores y Resultado
//# *********************************************************************

//# Funciones
//# ---------------------------------------------------------------------


//# Valores
//# ---------------------------------------------------------------------
//Obtener los valores introducidos en los campos del formulario.
//Números
$a = $_POST['a']; //name="a"
$b = $_POST['b']; //name="b"
//Operaciones
$operador = $_POST['operador']; //name="operador"

//# Operaciones
//# ---------------------------------------------------------------------
switch ($operador) {
  case 'resta':
    $operacion = $a - $b;
    $resultado = $a . " - " . $b . " = " . $operacion;
    break;

  case 'multiplicacion':
    $operacion = $a * $b;
    $resultado = $a . " x " . $b . " = " . $operacion;
    break;

  case 'division':
    $operacion = $a / $b;
    $resultado = $a . " % " . $b . " = " . $operacion;
    break;

  case 'potencia':
    $operacion = $a ** $b;
    $resultado = $a . " ^ " . $b . " = " . $operacion;
    break;

  case 'seno':
    $operacionA = sin($a);
    $operacionB = sin($b);
    $resultado =
      "sen " . $a . " = " . $operacionA . "<br>".
      "sen " . $b . " = " . $operacionB
    ;
    break;

  case 'coseno':
    $operacionA = cos($a);
    $operacionB = cos($b);
    $resultado =
      "cos " . $a . " = " . $operacionA . "<br>".
      "cos " . $b . " = " . $operacionB
    ;
    break;

  case 'tangente':
    $operacionA = tan($a);
    $operacionB = tan($b);
    $resultado =
      "tan " . $a . " = " . $operacionA . "<br>".
      "tan " . $b . " = " . $operacionB
    ;
    break;

  default: //suma
    $operacion = $a + $b;
    $resultado = $a . " + " . $b . " = " . $operacion;
    break;
    break;
}

//# Tratar errores y Resultado
//# ---------------------------------------------------------------------
//Comprobaremos si el valor proporcionado es un número.
//Si es un número procederemos a realizar las operaciones.
//Si no es un número enviaremos un mensaje de error.
if (!is_numeric($a) || !is_numeric($b)) {
  echo "Solo se admiten números.";

} else {
  echo $resultado;
}
?>
