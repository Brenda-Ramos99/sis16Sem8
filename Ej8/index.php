<!DOCTYPE html>
<html lang="es"> 
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <meta charset="utf-8">
        
        <form action="#" method="POST">
            <label> ¿Cuantos numeros desea ingresar?</label>
            <input type="text" name="n">
            <input type="submit" name="boton">         
        </form>               
    </body>
    

    <?php
    
        int np=0, cnp=0, nn=0, cnn=0, pnp=0, cptot=0, ptot=0;
       
        for (int i=1; i<=n; i++)
        {
            String numero = JOptionPane.showInputDialog("Ingrese un numero :");       
            int x = Integer.parseInt(numero); 
                
           if (x > 0)
           {
             cnp=cnp+1; 
             np=np+x;   
           }
            
           else if (x < 0)
           {
             cnn=cnn+1; 
             nn=nn+x;   
           }                       
        }
        pnp=np/cnp;
        cptot=cnp+cnn;
        ptot=cptot/num;
                
        System.out.println ("Numeros mayores que 0: "+cnp);    
        System.out.println ("Numeros menores que 0: "+cnn); 
        System.out.println ("Total de los numeros positvos: "+formato.format(np));
        System.out.println ("Promedio de los numeros positvos: "+formato.format(pnp));
        System.out.println ("Total de los numeros negativos: "+formato.format(nn));
        System.out.println ("Promedio de todos los numeros: "+formato.format(ptot)); 
    ?>
    
</html>
