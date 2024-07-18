<?php
  declare(strict_types = 1); 
    require "includes/funciones.php";
    incluirTemplate("header");
  ?>
  <!-- ABOUT US -->
  <main class="contenedor seccion contenido-centrado">
    <h1>Contacto</h1>
    <picture>
        <img src="/build/img/destacada3.webp" alt="imagen contacto"/>
    </picture>
    <h2>Formulario de contacto</h2>
    <form class="formulario" action="">
        <fieldset>
            <legend>Informacion personal</legend>
        
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" placeholder="Ej: Jorge Ramirez"/>
        
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Ej: jorge.ramirez@hotmail.com"/>
        
        <label for="telefono">Telefono</label>
        <input type="telefono" id="telefono" placeholder="Ej: +54 11 3459 9999"/>

        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" id="mensaje"></textarea>
    </fieldset>
    <fieldset>
        <legend>Informacion propiedad</legend>
        <label for="opciones">Compra / venta</label>
        <select name="opciones" id="opciones">
            <option value="compra">Compra</option>
            <option value="venta">Venta</option>
        </select>
        <label for="presupuesto">precio / presupuesto</label>
        <select name="presupuesto" id="presupuesto">
            <option value="precio">Precio</option>
            <option value="presupuesto">Presupuesto</option>
        </select>
    </fieldset>
    
    <input type="submit" value="Enviar"  class="boton-verde"/>
    </form>
  </main>
<?php 
  incluirTemplate("footer");
?>
 