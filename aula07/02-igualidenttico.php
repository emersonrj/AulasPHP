<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
        $a=3;
        $b="3";
        // $r=($a==$b)?"SIM":"NÃO"; se são iguais //
        $r=($a===$b)?"SIM":"NÃO"; // se são identicas //
        echo "As variaveis A e B são identicas? $r";
    ?>
</div>
</body>
</html>
 