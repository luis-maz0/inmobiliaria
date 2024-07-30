<?php 
    //Base de datos
    require "../../includes/config/database.php";

    conectarDB(); 

    //Funciones
    require "../../includes/funciones.php";
    incluirTemplate("header");
?>

<main class="contenedor seccion">
    <h1>Crear propiedad</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <form class="formulario" action="" method="">
        <fieldset>
            <legend>Informacion general</legend>
            
            <label for="titulo">titulo</label>
            <input type="text" id="titulo" placeholder="titulo propiedad" name="titulo"/>

            <label for="precio">precio</label>
            <input type="number" id="precio" placeholder="precio propiedad" name="precio"/>
            
            <label for="imagen">imagen</label>
            <input type="file" id="imagen" accept="image/jpeg image/png" name="imagen"/>
            
            <label for="descripcion">descripcion</label>
            <textarea name="descripcion" id="descripcion" ></textarea>
        </fieldset>
        <fieldset>
            <legend>informacion propiedad</legend>
            
            <label for="habitaciones">habitaciones</label>
            <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max="9" name="habitaciones"/>

            <label for="banios">baños</label>
            <input type="number" id="banios" placeholder="Ej: 2" min="1" max="9" name="banios"/>

            <label for="estacionamiento">cochera</label>
            <input type="number" id="estacionamiento" placeholder="Ej: 1" min="1" max="9" name="cochera"/>
        </fieldset>
        <fieldset>
            <legend>Informacion vendedor</legend>
            <select name="vendedor" id="vendedor">
                <option value="1">Juan</option>
                <option value="2">Luis</option>
            </select>
        </fieldset>
        <input type="submit" value="Crear propiedad" class="boton boton-verde"/>
    </form>
</main>

<?php 
    incluirTemplate("footer");
?>