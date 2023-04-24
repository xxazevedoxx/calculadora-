<?php
if (isset($_POST["btn"])){ // querer fazer o php no arq html
    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];
    $op = $_POST["btn"];
    switch($op){
        case '+':
            $res = $n1 + $n2;
            break;
        case '-':
            $res = $n1 - $n2;
            break;
        case '/': // tratar o n2, não pode ser zero
            if ($n2 != 0) $res = $n1 / $n2;
            else $res= "Não existe divisão por zero";
            break;
        case '*':
            $res = $n1 * $n2;
            break;
            
    }
    echo " <br> <h1> O resultado da op $op é $res </h1>";
    //echo ' <br> <h1> O resultado da op $op é $res </h1>';
}
?>