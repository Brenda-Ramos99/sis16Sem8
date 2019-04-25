<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action='#'>
	Ingrese el factorial que desea obtener:
        <input type="text" name="n"><br>
	<input type="submit" name="b1">
	</form>
        
	 <?php
	if(isset($_GET["b1"])){
	$n=$_GET["n"];
        $f=1;
	try{
	if(!is_numeric($n))
	throw new Exception("Error no es un numero");
			 			
	while ($n!=0) 
        {
            $f=$f*$n;
            $n--;
        }
	
	}catch(Exception $e){
	echo $e->getMessage();
	}
	}
	echo "EL total es de: $f";
	
	?>
    </body>
</html>


