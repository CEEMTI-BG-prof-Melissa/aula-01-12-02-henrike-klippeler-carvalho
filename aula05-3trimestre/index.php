<html>
    <head>
        <title> Aula 05 PHP</title>  
    </head>
    <body>
        <?php
            $num1= 2;
            $num2= $_GET["x"]; 

            echo "<br>Os valores informados são $num1 e $num2 ";
            echo "<br><br>O valor absoluto de $num1 é " .abs($num1);
            echo "<br><br>O número $num2 <sup>$num1</sup> é igual a " .pow($num2,$num1);
            echo "<br><br>A raiz quadrada de $num2 é " .sqrt($num2);

            echo "<br><br> O $num2 arredondado fica " .round($num2);
            echo "<br> O $num2 arredondado para cima fica " .ceil($num2);
            echo "<br> O $num2 arredondado para baixo fica " .floor($num2);
            
            echo"<br><br><br>";
            echo "A parte inteira de $num2 é igual a " .intval($num2);
            
            echo"<br><br>";
            echo "Um pirulito custa " .number_format($num1, 2, ",", ".");
            
            
         ?>
    </body>
</html>
