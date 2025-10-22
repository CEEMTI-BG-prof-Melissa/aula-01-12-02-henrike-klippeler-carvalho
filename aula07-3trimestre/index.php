<html>
    <head>
        <title> Aula 07 PHP</title>
    </head>
    <body>
        <?php

            $num=10;

            echo"Valor inicial : $num";

            $num+=5; // Soma 5 ao valor atual de $num (10 + 5 = 15)

            echo"<br><br>A soma de 10 mais 5 e : $num";

            $num-=2; // Subtrai 2 do valor atual de $num (15 - 2 = 13)

            echo"<br>Apos subtrair 2 : $num";

            $num*=3; // Multiplica o valor atual de $num por 3 (13 * 3 = 39)

            echo"<br>Apos multiplica por 3 : $num";

            $num/=2; // Divide o valor atual de $num por 2 (39 / 2 = 19.5)

            echo"<br>Apos dividi por 2 : $num";

            ++$num; 
            // Pré-incremento: incrementa $num antes de usá-lo
            // $num passa de 19.5 para 20.5, e já imprime o valor incrementado

            echo"<br><br>Apos Pré-incremento $num";

            echo"<br>Apos Pós-incremento : " .($num++);
            // Pós-incremento: imprime o valor atual de $num (20.5), depois incrementa
            // $num passa para 21.5 após a impressão

            --$num;
            // Pré-decremento: decrementa $num antes de usá-lo
            // $num passa de 21.5 para 20.5

            echo"<br>Apos Pré-encremento $num";

            echo"<br>Apos Pré-encremento : " .($num--);
            // Pós-decremento: imprime o valor atual de $num (20.5), depois decrementa
            // $num passa para 19.5 após a impressão

            echo"<br><br>Valor final : $num";

        ?>
    </body>
</html>
