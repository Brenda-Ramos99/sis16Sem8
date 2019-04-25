<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="POST">
        <label>¿El aumento de cuantos empleados desea calcular? </label><br>
        <input type="text" name="n"><br><br>
        <input type="submit" name="b1"><br><br>
        </form>
   
<?php

if(isset($_POST['b1']))
{
    $num=$_POST['n'];
    
    echo '<form action=Pro7.php method=POST>';
    
    for($i=0;$i<$num;$i++)
    {
        echo '<br><br>Ingrese el codigo del Empleado'.($i+1)."<input type=text name=codigo[]>";
        echo '<br>Ingrese el nombre del Empleado'.($i+1)."<input type=text name=nombre[]>";
        echo '<br>Ingrese el sueldo base del Empleado'.($i+1)."<input type=text name=sueldo[]>";
    }
    echo "<input type=submit name=b2>";
    echo "</form>";
    
}
else
{
    echo "";
}

?>
 </body>
</html>
