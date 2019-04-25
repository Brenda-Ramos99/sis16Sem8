<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio6</title>
    </head>
    <body> <form action="#" method="POST">
            <label>Digite un entero positivo :</label>
            <input type="text" name="num">
            <input type="submit" name="b1" value="Enviar">
        </form>
        <?php
        if (isset($_POST["b1"])){
        $num =$_POST["num"];
        echo '<br><br>';
        echo "La serie de la conjetura de Ulam es: ";
        echo "$num";
        while($num!=1)
        {
            if ($num%2==0) 
            {
                $num=$num/2;                
            }
            else
            {
                $num=$num*3+1;
            }
            
            echo ' , ' .$num;
        }
        }        
        ?>
    </body>
</html>
