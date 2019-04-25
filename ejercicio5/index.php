<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio5</title>
    </head>
    <body>
        <?php
        	$i=2; 
		$j=2; 
		$acum=2;

		echo "La serie es: ";
                echo '<br>';
		while ($j <=1800) {
                    if ($i%2==0) {
			$j+3;
			echo "$j";
			echo "<br>";
			$j=$j+3;
                    } else {
			$j+2;
			echo "$j";
			echo "<br>";
			$j=$j+2;
                    }
                        $acum+=$j;
			$i++;
                        echo '<br>';
		}
		echo "La suma de los terminos de la serie anterior es: ".$acum;
?>
    </body>
</html>
