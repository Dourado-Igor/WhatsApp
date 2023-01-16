<?php

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Formulário</title>
</head>
<body>

<form method="post" action="">
<h1>Formulário</h1>
<fieldset>
 
    <label for="Nombre"><strong>Nombre</strong></label><br>
    <input class="input1" type="text" name="Nombre" placeholder="Escribe su Nombre"><br><br>

    <label for="Apellido"><strong>Apellido</strong></label><br>
    <input class="input2" type="text" name="Apellido" placeholder="Escribe su Apellido"><br><br>

    <label for="Telefono"><strong>Telefono</strong></label><br>
    <input class="input3" type="Telefono" name="Telefono" placeholder="Ponga su numero"><br><br>
   
    <label for="Correo"><strong>Correo</strong></label><br>
    <input class="input4" type="Correo" name="Correo" placeholder="Escribe  su correo eletronico"><br>
    
    <p><strong>Señala los conocimientos que controlas:</strong></p>
    <input type="radio" name="Css" value="Css">
    <label for="Css"><strong>Css</strong></label>
    
    <input type="radio" name="HTML" value="HTML">
    <label for="HTML"><strong>HTML</strong></label>

    <input type="radio" name="PHP" value="PHP">
    <label for="PHP"><strong>PHP</strong></label>

    <input type="radio" name="Javscript" value="Javascript">
    <label for="Javascript"><strong>Javascript</strong></label>

    <input type="radio" name="Phyton" value="Phyton">
    <label for="Phyton"><strong>Phyton</strong></label><br><br>
    
    <label for="Textarea"><strong>Cuentanos en cuales empresas trabajaste:</strong></label><br>
    <textarea name="textarea" id="textarea" cols="50" rows="10"></textarea><br><br>

    <button>Submit</button><br><br>

    

</form>
</fieldset>
</body>
</html>