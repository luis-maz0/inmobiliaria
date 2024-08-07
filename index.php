  <?php  
    require "includes/funciones.php";
    incluirTemplate("header", $inicio = true);
  ?>

  <!-- ABOUT US -->
  <main class="contenedor seccion">
    <h1>Sobre nosotros</h1>
    <div class="iconos-nosotros">
      <div class="icono">
        <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
        <h3>seguridad</h3>
        <p class="icono-texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed qui incidunt natus minima
          iure amet dolorum porro reprehenderit, voluptatibus fugit maxime assumenda tempora nulla. Cupiditate,
          obcaecati doloribus. Dolore, cum provident!</p>
      </div>
      <div class="icono">
        <img src="build/img/icono2.svg" alt="Icono seguridad" loading="lazy">
        <h3>precio</h3>
        <p class="icono-texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed qui incidunt natus minima
          iure amet dolorum porro reprehenderit, voluptatibus fugit maxime assumenda tempora nulla. Cupiditate,
          obcaecati doloribus. Dolore, cum provident!</p>
      </div>
      <div class="icono">
        <img src="build/img/icono3.svg" alt="Icono seguridad" loading="lazy">
        <h3>tiempo</h3>
        <p class="icono-texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed qui incidunt natus minima
          iure amet dolorum porro reprehenderit, voluptatibus fugit maxime assumenda tempora nulla. Cupiditate,
          obcaecati doloribus. Dolore, cum provident!</p>
      </div>
    </div>
  </main>
  <!--FIN ABOUT US -->
  <!-- ANUNCIOS -->
  <section class="contenedor seccion">
    <h2>Casas y dptos en venta</h2>
    <!-- CONTENEDOR ANUNCIOS -->
    <div class="contenedor-anuncios">
      <!-- CARD ANUNCIO -->
      <div class="anuncio-card">
        <picture>
          <source srcset="build/img/anuncio1.avif" type="image/avif">
          <source srcset="build/img/anuncio1.webp" type="image/webp">
          <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
          <img src="build/img/anuncio1.jpg" alt="anuncio">
        </picture>
        <div class="anuncio-card-contenido">
          <div class="anuncio-card-titulo">
            <h3>Casa frente al lago</h3>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, doloremque?</p>
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
          <a href="anuncio.html" class="boton-amarillo">
            + información
          </a>
        </div>
      </div>
      <!-- FIN CARD ANUNCIO -->
      <!-- CARD ANUNCIO -->
      <div class="anuncio-card">
        <picture>
          <source srcset="build/img/anuncio2.avif" type="image/avif">
          <source srcset="build/img/anuncio2.webp" type="image/webp">
          <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
          <img src="build/img/anuncio2.jpg" alt="anuncio">
        </picture>
        <div class="anuncio-card-contenido">
          <div class="anuncio-card-titulo">
            <h3>Casa moderna</h3>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, doloremque?</p>
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
          <a href="anuncio.html" class="boton-amarillo">
            + información
          </a>
        </div>
      </div>
      <!-- FIN CARD ANUNCIO -->
      <!-- CARD ANUNCIO -->
      <div class="anuncio-card">
        <picture>
          <source srcset="build/img/anuncio3.avif" type="image/avif">
          <source srcset="build/img/anuncio3.webp" type="image/webp">
          <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
          <img src="build/img/anuncio3.jpg" alt="anuncio">
        </picture>
        <div class="anuncio-card-contenido">

          <div class="anuncio-card-titulo">
            <h3>Casa con amplia piscina</h3>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, doloremque?</p>
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
          <a href="anuncio.html" class="boton-amarillo">
            + información
          </a>
        </div>
      </div>
      <!-- FIN CARD ANUNCIO -->
    </div>
    <!-- FIN CONTENEDOR ANUNCIOS -->
     <div class="alinear-derecha">
      <a href="anuncios.html" class="boton-verde">Ver mas</a>
     </div>
  </section>
  <!-- FIN ANUNCIOS -->
   <!-- CONTACTAR -->
  <section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueño</h2>
    <p>Completa el siguiente formulario para brindarte el mejorar asesoramiento.</p>
    <a href="contacto.html" class="boton-amarillo-inline">Contactanos</a>
  </section>
   <!-- FIN CONTACTAR -->
  <div class="contenedor seccion-inferior">
    <section class="blog">
      <h3>Nuestro blog</h3>
      <article class="entrada-blog">
          <div class="entrada-blog-img">
            <picture>
              <source srcset="build/img/blog1.avif" type="image/avif"/>
              <source srcset="build/img/blog1.webp" type="image/webp"/>
              <source srcset="build/img/blog1.jpg" type="image/jpeg"/>
              <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog"/>
            </picture>
          </div>
          <div class="entrada-blog-texto">
            <a href="entrada.html">
              <h4>Terraza en tu casa</h4>
              <p class="informacion-meta">Escrito: <span>24/06/24</span> por: <span>Admin</span></p>
              <p>La mejor forma de disfrutar de una terraza. Utilizando los mejores consejos de decoracion</p>
            </a>
          </div>
      </article>
      <article class="entrada-blog">
          <div class="entrada-blog-img">
            <picture>
              <source srcset="build/img/blog2.avif" type="image/avif"/>
              <source srcset="build/img/blog2.webp" type="image/webp"/>
              <source srcset="build/img/blog2.jpg" type="image/jpeg"/>
              <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog"/>
            </picture>
          </div>
          <div class="entrada-blog-texto">
            <a href="entrada.html">
              <h4>Los mejores lugares para visitar este verano</h4>
              <p class="informacion-meta">Escrito: <span>24/06/24</span> por: <span>Admin</span></p>
              <p>Nada mejor que relajarse en los hoteles con piscinas y vistas a la playa. Enterate de nuestro top de lugares que recomendamos. </p>
            </a>
          </div>
      </article>
    </section>
    <section class="testimonios">
      <h3>Testimonios</h3>
      <div class="testimonio">
        <blockquote>Excelente atencion al cliente. Muy lindas casas y departamentos.</blockquote>
        <p class="testimonio-autor">- Casimiro Rojas</p>
      </section>
      </div>
  </div>

<?php 
  incluirTemplate("footer");
?>
  
