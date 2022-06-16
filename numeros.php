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
            echo "<br>";
            echo "longitud:";
            $longitud = ($_POST["longitud"]);
            echo $longitud;
            $numeros = array() ;
        
    }

    if (!empty($_POST["numeros"]))
    {
            echo "<br>";
            echo "numeros";
            $string_numeros = ($_POST["numeros"]);
            $numeros = explode(" ", $string_numeros);
            for ($x = 0; $x < $longitud  ; $x++) {
                echo "<br>";                 
                 echo "The number is: $numeros[$x] <br>";
             }            

            var_dump($numeros);
            // for ($x = 0; $x <= $longitud  ; $x++) {
                
            //     echo "The number is: $numeros[$x] <br>";
            // }

    }

    if (!empty($_POST["consultas"]))
    {
            echo "<br>";
            echo "consultas";
            $consultas = ($_POST["consultas"]);
            echo $consultas;


    }    


    if (!empty($_POST["evaluar"]))
    {
            echo "<br>";
            echo "evaluar";
            $string_evaluar = ($_POST["evaluar"]);
            echo $string_evaluar;
            $evaluar = explode(" ", $string_evaluar);            

  

             for ($x = 0; $x < $consultas  ; $x++) {


                $anterior =    'X' ;             
                $posterior =   'X' ;             


                for ($y = 0; $y < $longitud  ; $y++) {

                    // echo "<br>";                    
                    // echo "numeros[ y ]" ;
                    // echo $numeros[ $y ] ;
                    // echo "<br>";
                    // echo "evaluar[ x ]";                    
                    // echo $evaluar[ $x ];                    

                    if ( $numeros[ $y ] < $evaluar[ $x ]  )   // tomar como el ultimo menor
                    {

                        $anterior =    $numeros[ $y ] ;             

                    }                                        

                    // if ( $numeros[ $y ] == $evaluar[ $x ]  )   // ignorar
                    // {

                    // }  

                    if ( $numeros[ $y ] > $evaluar[ $x ]  )   // Detenerse e imprimir
                    {
                        $posterior = $numeros[ $y ] ;    
                        break;         
                    }

                
                }     
                // echo "<br>";
                // echo "comparar";
                // echo $numeros[ $y ] ;
                // echo $evaluar[ $x ];



                echo "<br>";
                echo $anterior ;
                echo $posterior;


             }     



    }        






    ?>   



</body>

</html>