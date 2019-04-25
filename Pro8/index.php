<?php

 $n1=$_POST['n1'];
 
 $nueSueldo = array();
 
        $np=0;
        $cnp=0; 
        $nn=0;
        $cnn=0;
        $pnp=0;
        $cptot=0;
        $ptot=0; 
 
 if(isset($_POST['b2']))
{      
                
           if ($n1 > 0)
           {
             $cnp=$cnp+1; 
             $np=$np+n1;   
           }
            
           else if ($n1 < 0)
           {
             $cnn=$cnn+1; 
             $nn=$nn+$n;   
           }                       
        }
        $pnp=$np/$cnp;
        $cptot=$cnp+$cnn;
        $ptot=$cptot/$num;
                
        echo 'Numeros mayores que 0: '+$cnp;    
        echo 'Numeros menores que 0: '+$cnn; 
        echo 'Total de los numeros positvos:'+$np;
        echo 'Promedio de los numeros positvos: '+$p;
        echo 'Total de los numeros negativos: '+$nn;
        echo 'Promedio de todos los numeros:' +$ptot;         
?>
