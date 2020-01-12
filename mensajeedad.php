<?php
 if(isset($_POST["calcular"])){

 $edad= $_POST["txtnumero1"];
 
           
    if($edad == "" ){
        echo "debes diligenciar todos los campos.";
    exit;
    }
    echo "<br><br><br>";
            

    if($edad >=0 && $edad <=10){
        echo "niño";
    }else if($edad >=11 && $edad <=14){
        echo "pre-adolescente";
    }else if($edad >=15 && $edad <=18){
        echo "adolescente";
    }else if($edad >=19 && $edad <=25){
        echo "joven";
    }else if($edad >=26 && $edad <=65){
        echo "adulto";
    }elseif($edad > 65){
        echo "anciano";
    }else{
        echo "valor incorrecto";
    }
        
    
        
    
        
    
        
    
    

   

    

    

    
         
 }
         
         
?>