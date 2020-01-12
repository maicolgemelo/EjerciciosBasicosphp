<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>pagina con php</title>
    </head>
    
    <body>
        <h1>Promedio de estudiante</h1>
        <form name="form1" method="POST" action="definitiva.php">
            Nota 1: <input type="text" name="txtnumero1">
            <br>
            Nota 2: <input type="text" name="txtnumero2">
            <br>
            Nota 3: <input type="text" name="txtnumero3">
            <br>
            Nota 4: <input type="text" name="txtnumero4">
            <br>
            Nota 5: <input type="text" name="txtnumero5">
            <br>
            <input type="submit" name="calcular" value="Calcular">


        </form>



         <h2>Ejercicio 2:</h2>
         <p>Elaborar un algoritmo que muestre un mensaje de acuerdo a la edad de 
            una persona: si la edad es de o a 10 años"niño",
            si la edad es de 11 a 14 años"pre-adolescente",
            si la edad es de 15 a 18 años "adolescente",
            si la edad es de 19 a 25 años "joven",si la edad es 
            26 a 65 años "adulto",si la edad es mayor de 65 "anciano".
         </p>

         <form name="form2" method="POST" action="mensajeedad.php">
            Edad : <input type="text" name="txtnumero1">
            
            <input type="submit" name="calcular" value="Calcular">


        </form>

        
    </body>  

</html>
    