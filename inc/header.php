<header>
  <div class="headerInner flexBox">
    <?php
    is_front_page() ?
      print '
      <h1 id="headerLogo">
      <a href="' . get_home_url() . '">Cake Cafe</a>
      </h1>' :
      print '
      <div id="headerLogo">
      <a href="' . get_home_url() . '">Cake Cafe</a>
      </div>'
    ?>

    <div id="humMenu" class="sp"></div>
    <nav>
      <ul id="headerNav" class="flexBox">
        <li><a class="link" href="<?php echo get_home_url() ?>/blog">Blog</a></li>
        <li><a class="link" href="<?php echo get_home_url() ?>/menu">Menu</a></li>
        <li><a class="link" href="<?php echo get_home_url() ?>/store">Store</a></li>
      </ul>
    </nav>
  </div>
</header>