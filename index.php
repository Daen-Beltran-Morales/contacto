<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario de Contacto</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <div class="container">
            <h1>Contacto</h1>
            <form action="guardar.php" method="POST">
                <label>Nombre</label>
                <input type="text" name="nombre" required>
                <label>Correo</label>
                <input type="email" name="correo" required>
                
                <label>Mensaje</label>
                <textarea name="mensaje" required></textarea>
                
                <button type="submit">Enviar</button>
            </form>
        </div>
    </body>
</html>