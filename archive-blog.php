<?php include_once('inc/head.php'); ?>
<section id="titleArea" class="flexBox" style="background-image:url('<?php print get_template_directory_uri() ?>/resource/img/list/bg.jpg');">
  <div class="cntIn">
    <h1 class="flexBox">News</h1>
  </div>
</section>
<section class="listArea">
  <div class="cntIn">
    <ul>
      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => "blog",
        'posts_per_page' => 10,
        'paged' => $paged,
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();
          $postData = get_the_terms($post->ID, 'blog_genre');
      ?>
          <li class="newsItem flexBox">
            <span class="day"><?php print get_the_date(); ?></span>
            <a class="catLink" href="<?php print get_term_link($postData[0]->term_id, 'blog_genre') ?>">
              <?php print $postData[0]->name ?>
            </a>
            <a class="newsTitle" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
      <?php
        endwhile;
      endif;
      ?>
    </ul>
    <?php
    wp_pagenavi(array('query' => $query));
    wp_reset_postdata();
    ?>
  </div>
</section>
<?php include_once('inc/footer.php'); ?>