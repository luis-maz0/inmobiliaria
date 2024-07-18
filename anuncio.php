<?php
    declare(strict_types = 1); 
    require "includes/funciones.php";
    incluirTemplate("header");
  ?>
  <!-- ABOUT US -->
  <main class="contenedor seccion contenido-centrado">
    <h1>Anuncio</h1>
    <picture>
        <source srcset="build/img/destacada.avif" type="image/avif"/>
        <source srcset="build/img/destacada.webp" type="image/webp"/>
        <img loading="lazy" src="build/img/destacada.jpg" alt="Destacada">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">500.000 USD</p>
        <ul class="anuncio-iconos">
            <li>
              <img loading="lazy" src="build/img/icono_wc.svg" alt="icono banios">
              <p>3</p>
            </li>
            <li>
              <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
              <p>1</p>
            </li>
            <li>
              <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono cuartos">
              <p>4</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quis impedit explicabo culpa id velit quas maxime molestiae repellat. Cupiditate voluptas error, laborum rem praesentium id dolorem culpa, modi voluptatum impedit necessitatibus velit enim ipsa odit incidunt sequi ab doloremque? A, natus? Quae, maiores voluptas cum quod nobis distinctio accusamus possimus voluptatem ex quasi ullam? Dolores consectetur eligendi quae molestiae vitae praesentium ea veniam suscipit? Quidem tenetur officiis quasi necessitatibus accusamus et ab. Modi vel voluptatum doloremque unde ducimus repudiandae facilis provident sint error. Facilis totam autem, possimus libero animi modi reiciendis eius, numquam inventore ex impedit voluptate alias tempora.</p>
    </div>
  </main>
<?php 
  incluirTemplate("footer");
?>