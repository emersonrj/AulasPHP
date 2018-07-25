<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
        $x="abc";
        $$x="def";
        echo "O conteudo da variavel X e $x";
        echo "<br/>A variavel ABC criada recebeu o valor $abc";
    ?>
</div>
</body>
</html>