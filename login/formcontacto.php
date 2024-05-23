<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de contacto</title>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>
    <form action="https://formsubmit.co/nathsui527@gmail.com" method="POST"> 
        <h2>Contacto</h2>
        <div class="input-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Ingresa tu nombre">
            <label for="telefono">Telefono</label>
            <input type="tel" name="telefono" id="telefono" placeholder="Ingresa tu numero">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Ingresa tu correo">

            <label for="message">Mensaje</label>
            <textarea name="message" id="message" cols="30" rows="5" placeholder="Dejanos tu mensaje"></textarea>
            <div class="form-txt">
                <a href="#">Politicas de privacidad</a>
                <a href="#">Terminos y condiciones</a>
            </div>
            <input class="btn-form" type="submit" value="Enviar">

            <input type="hidden" name="_next" value="https://nathsui.github.io/pagina2.0/"> <!--agregar dominio -->
            <input type="hidden" name="_captcha" value="false">

        </div>
    </form>
    <main>

   

    
</body>
</html>