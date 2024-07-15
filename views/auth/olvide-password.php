<h1 class="nombre-pagina">Olvide mi contraseña</h1>
<p class="descripción-pagina">Restablece tu password ingresando tu Email a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>


<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">E-mail</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Tu E-mail"
        />
    </div>

    <input type="submit" value="Enviar instrucciones" class="boton"> 
</form>

<div class="acciones">
    <a href="/">Ya tengo una cuenta</a>
    <a href="/crear-cuenta">Crear cuenta</a>
</div>