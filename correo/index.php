<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    
<form method="post"> 
    <input type="text"  placeholder="Nombre"   name="name" required="">
    <input type="email" placeholder="Mail"  name="email" required="">
    <input type="text"  placeholder="Asunto" name="asunto" required="">
    <textarea placeholder="mensaje" name="msg"> </textarea>
    <input type="submit" name="enviar">
 </form>

<?php
 include("correo.php");
?>


</body>
</html>