<html>

<head>
  <title>Problema</title>
</head>

<body>

 

    <form action="numeros.php"  method="post">
     
    Longitud lista      : <input type="text" name="longitud"><br>
    Numeros Enteros   : <input type="text" name="numeros"><br>
    Cantidad Consultas: <input type="text" name="consultas"><br>
    Lista a evaluar   : <input type="text" name="evaluar"><br>
    
    <input type="submit">
    <?php 
    if (!empty($_POST["longitud"]))
    {
            $longitud = ($_POST["longitud"]);
            $numeros = array() ;
    }

    if (!empty($_POST["numeros"]))
    {
            $string_numeros = ($_POST["numeros"]);
            $numeros = explode(" ", $string_numeros);
    }

    if (!empty($_POST["consultas"]))
    {
            $consultas = ($_POST["consultas"]);
    }    


    if (!empty($_POST["evaluar"]))
    {
            $string_evaluar = ($_POST["evaluar"]);

            $evaluar = explode(" ", $string_evaluar);            

             for ($x = 0; $x < $consultas  ; $x++) {


                $anterior =    'X' ;             
                $posterior =   'X' ;             


                for ($y = 0; $y < $longitud  ; $y++) {

                 

                    if ( $numeros[ $y ] < $evaluar[ $x ]  )   // tomar como el ultimo menor
                    {

                        $anterior =    $numeros[ $y ] ;             

                    }                                        

                    if ( $numeros[ $y ] > $evaluar[ $x ]  )   // Detenerse e imprimir
                    {
                        $posterior = $numeros[ $y ] ;    
                        break;         
                    }

                
                }     



                echo "<br>";
                echo $anterior ;
                echo $posterior;


             }     



    }        






    ?>   



</body>

</html>