<?php
    include "./includes/templates/header.php";
?>
  <!-- ABOUT US -->
  <main class="contenedor seccion">
    <h1>Conoce sobre nosotros</h1>
    <div class="nosotros-contenido"> 
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.avif" type="image/avif"/>
                <source srcset="build/img/nosotros.webp" type="image/webp"/>
                <img src="build/img/nosotros.jpg" alt="sobre nosotros">
            </picture>
        </div>
        <div class="nosotros-texto">
          <blockquote>
              10 anios de experiencia
          </blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate impedit ratione repudiandae dolor quam magnam.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero tempora error velit autem nisi nesciunt distinctio vitae reiciendis perspiciatis laboriosam?</p>
      </div>
    </div>
  </main>
  <!--FIN ABOUT US -->
  
  <footer class="footer section">
    <div class="contenedor contenido-footer">
      <nav class="navegacion">
        <a href="nosotros.html">Nosotros</a>
        <a href="anuncios.html">Anuncios</a>
        <a href="blog.html">Blog</a>
        <a href="contacto.html">Contacto</a>
      </nav>
      <p class="copyright">Todos los derechos reservados 2024 &copy;</p>
    </div>
  </footer>
  <script src="build/js/bundle.min.js"></script>
</body>

</html>