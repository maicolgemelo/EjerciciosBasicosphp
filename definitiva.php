<?php
 if(isset($_POST["calcular"])){

 $valor1 = $_POST["txtnumero1"];
 $valor2 = $_POST["txtnumero2"];
 $valor3 = $_POST["txtnumero3"];
 $valor4 = $_POST["txtnumero4"];
 $valor5 = $_POST["txtnumero5"];
           
    if($valor1 == "" || $valor2 == "" || $valor3 == "" || $valor4 == "" || $valor5 == ""){
        echo "debes diligenciar todos los campos.";
    exit;
    }
    echo "<br><br><br>";
            
    $nota1 = $valor1 * 0.2;
    $nota2 = $valor2 * 0.15;
    $nota3 = $valor3 * 0.22;
    $nota4 = $valor4 * 0.10;
    $nota5 = $valor5 * 0.33;

    $suma =$nota1 + $nota2 + $nota3 + $nota4 + $nota5;
    echo "<br><br> el promedio del estudiante es  :" . $suma;
         
 }
         
         
         
         
         
?>
