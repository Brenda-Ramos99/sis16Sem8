<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $b=0;             
        echo("Números primos del 1 a 1000");
        echo"<br>";
        for ($i = 1; $i <= 1000; $i++) 
        {
                $b=0;
                
            for ($j = 2; $j <($i); $j++) 
            {
                if ($i % $j == 0) 
                {
                    $b=1;
                }
            }           
            if ($b==0) 
            { 
                echo"<br>";
                echo($i);
                echo"<br>";
            }       
        }
            echo"<br>";
            echo("Años biciestos entre el año 2000 y 3000");
            echo"<br>";
            for($i=2000; $i<=3000; $i++)
            {
            if (($i % 4 == 0) && (($i % 100 != 0) || ($i % 400 == 0)))
            {
               echo"<br>";
               echo($i);
               echo"<br>";
            }
            }
        ?>
    </body>
</html>

