<nav class="navbar navbar-expand-lg">
  <div class="container">
    <?php the_custom_logo(); ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <?php
      wp_nav_menu(array(
          'theme_location' => 'menu-superior',
          'menu_class'     => 'navbar-nav mb-2 mb-lg-0',
          'container'      => false,
          'depth'          => 2,
          'walker'         => new bootstrap_5_wp_nav_menu_walker(),
          'fallback_cb'    => 'bootstrap_5_wp_nav_menu_walker::fallback',
      ));
      ?>
       <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </div>
</nav>
