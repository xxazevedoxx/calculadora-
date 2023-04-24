<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="calc.css">
    <title>CALCULADORA</title>
</head>
<body>
    <form action="calc.php" name="formulario" id="formcalc" method="post">
    <label>Número 1
        <input type="text" name="num1">
    </label>
    <label>Número 2
        <input type="text" name="num2">
    </label>
    
    <input type="submit" name="btn" value="+">
    <input type="submit" name="btn" value="-">
    <input type="submit" name="btn" value="/">
    <input type="submit" name="btn" value="*">

    <input type="reset" name="cancela" value="cancelar">
    
    </form>


</body>
</html>