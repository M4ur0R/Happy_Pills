<html>
    <head>
        <title>
            Formularios
        </title>
        <link rel="stylesheet" href="sisuform.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
  <h1></h1>
  <div class="glass"></div>
     <div class="venta">
        <form action="punto4.php" method="post">
        <input type="text" name="n" placeholder="Nombre">
        <br> 
        <input type="text" name="a" size="40" placeholder="Apellido">
        <br> 
        <input type="email" name="e" size="35" placeholder="E-mail">
        <br>
       <p class="date">Que le pareció nuestra atención:</p>
        <select name="dia">
            <option value="Lunes">Muy Mala</option> 
            <option value="Martes">Mala</option> 
            <option value="Miercoles">Regular</option>  
            <option value="Viernes">Buena</option> 
            <option value="Sabado">Muy Buena</option> 
            <option value="Domingo">Exelente</option> 
        </select>
        <br>
        <textarea name="comentario" rows="5" cols="50" placeholder="Opinion"></textarea>
        <br>
        <input type="submit" value="Confirmar"> 
        <br>
        <input type="reset" value="borrar todo">
        </form>
    </div>
    <?php

    if(isset($_REQUEST['Confirmar'])){
       $d= "n";
        if($_REQUEST['dia']=='Lunes'){
            $d= "Lunes";
        }else{
        if($_REQUEST['dia']=='Martes'){
            $d= "Martes";
        }else{
        if($_REQUEST['dia']=='Miercoles'){
            $d= "Miercoles";
        }else{
        if($_REQUEST['dia']=='Jueves'){
            $d= "Jueves";
        }else{
        if($_REQUEST['dia']=='Viernes'){
            $d= "Viernes";
        }else{
        if($_REQUEST['dia']=='Sabado'){
            $d= "Sabado";
        }else{
        if($_REQUEST['dia']=='Domingo'){
            $d= "Domingo";
        }}}}}}}}
        ?>
</body>
</html>