

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa Registro</title>
</head>
<body>
    <form action="php/reg_empresa.php" method="POST">
        <label for="">Datos Personales</label><br>
        <input type="text" name="email" id="" placeholder="Email"><br>
        <input type="password" name="clave" id="" placeholder="Clave"><br>

        <br><br>

        <label for="">Datos Empresa</label><br>
        <input type="text" name="nombre" id="" placeholder="Nombre"><br>
        <label for="">Categoria </label><select name="categoria" id="">
            <option value="Comida">Comida</option>
            <option value="Indumentaria">Indumentaria</option>
            <option value="Belleza">Belleza</option>
            <option value="Otros">Otros</option>
        </select><br>
        <label for="">Localidad </label><select name="localidad" id="">
            <option value="">Villa Bosch</option>
            <option value="">Indumentaria</option>
            <option value="">Belleza</option>
            <option value="">otros</option>
        </select><br>
        <input type="text" name="direccion" id="" placeholder="Direccion">
        <input type="number" name="numero" id="" placeholder="Numero"><br>
        <input type="text" name="comentario" id="" placeholder="Comentario"><br><br>

        <label for="">Redes</label><br>
        <input type="text" name="sitioweb" id="" placeholder="Sitio web"><br>
        <input type="text" name="facebook" id="" placeholder="Facebook"><br>
        <input type="text" name="instagram" id="" placeholder="Instagram"><br>
        <input type="text" name="twitter" id="" placeholder="Twitter"><br><br>

        <label for="imagen">Imagen:</label> 
        <input id="imagen" name="imagen" size="30" type="file" /><br><br>
        <input type="submit" value="Registrarse" />
            
    </form>
    
</body>
</html>


<?php
