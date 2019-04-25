<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="POST">
        <label>¿Cuantos numeros desea ingresar? </label><br>
        <input type="text" name="n"><br><br>
        <input type="submit" name="b1"><br><br>
        </form>
   
<?php

if(isset($_POST['b1']))
{
    $num=$_POST['n'];
    
    echo '<form action=Pro8.php method=POST>';
    
    for($i=0;$i<$num;$i++)
    {
        echo '<br><br>Digite el numero: '.($i+1)."<input type=text name=n1[]>";       
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