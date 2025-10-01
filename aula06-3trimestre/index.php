<html>
    <head>
        <title> Aula 06 PHP</title>  
    </head>
    <body>
        <h3> Operadores de atribuição </h3>
        <hr>
        
        <?php
            $a=2;
            $b=$a+5;

            echo"<br> A é igual a $a e B é igual a $b.";
            echo"<br><br>";
            $a=$a+3;
            echo"Adicionando 3 ao valor de A fica igual a $a.";
            echo"<br><br>";
            $b+=8;
            echo"Adicionando 8 ao valor de B fica igual a $b.";
            echo"<br><br>";
            $b-=5;
            echo"Subtraindo 5 do valor de B fica igual a $b.";

            echo"<hr>";
            echo"<br>";
            
            $b*=2;
            echo"Multiplicando B por 2 fica $b.";
            echo"<br><br>";
            $b/=10;
            echo"Dividindo o valor de B por 10 fica $b.";
            echo"<br><br>";
            $b%=3;
            echo"O resto da divisão de B dividido por 3 é igual $b.";
            echo"<br><br>";
            $b.=10;
            echo" Conctenando o valor de b com o número 10 fica igual $b.";
            echo"<br><br>";
            
        ?>
    </body>
</html>
