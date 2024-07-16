<?php
    include "./includes/templates/header.php";
  ?>
  <!-- ABOUT US -->
  <main class="contenedor seccion contenido-centrado">
    <h1>Titulo blog</h1>

    <p class="informacion-meta">Escrito <span>09/07/24</span> por: <span>admin</span></p>
    <picture>
        <source srcset="build/img/destacada2.avif" type="image/avif"/>
        <source srcset="build/img/destacada2.webp" type="image/webp"/>
        <img loading="lazy" src="build/img/destacada2.jpg" alt="Destacada">
    </picture>

    <div class="resumen-propiedad">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quis impedit explicabo culpa id velit quas maxime molestiae repellat. Cupiditate voluptas error, laborum rem praesentium id dolorem culpa, modi voluptatum impedit necessitatibus velit enim ipsa odit incidunt sequi ab doloremque? A, natus? Quae, maiores voluptas cum quod nobis distinctio accusamus possimus voluptatem ex quasi ullam? Dolores consectetur eligendi quae molestiae vitae praesentium ea veniam suscipit? Quidem tenetur officiis quasi necessitatibus accusamus et ab. Modi vel voluptatum doloremque unde ducimus repudiandae facilis provident sint error. Facilis totam autem, possimus libero animi modi reiciendis eius, numquam inventore ex impedit voluptate alias tempora.</p>
    </div>
  </main>
  
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