<html>
    <head>
        <title> Aula 03 PHP</title>
    </head>
    <body>
        <?php
            $nome="Henrike";
            $n1=10;
            $n2=2;
            $soma=$n1+$n2;
            echo "Meu nome é " .$nome ; 
            echo "<br>Meu nome é  $nome" ; 
            echo "<br><br> A soma de $n1 + $n2 é igual a $soma";
            echo "<br><br> O resultado da Subtração dos números $n1 e $n2 é igual a: " .($n1-$n2) ;
            echo "<br><br> O número $n1 Multiplicado por $n2 é igual a: " .($n1*$n2) ;
            echo "<br><br> O número $n1 divido por $n2 é: " .($n1/$n2) ;
            echo "<br><br> O resto da divisão de $n1 por $n2 é: ".($n1%$n2) ;
        ?>
    </body>
</html>
