<?php include_once('inc/head.php'); ?>
<div class="cntIn">
  <div class="blogArea">
    <div class="dataBox">
      <?php $postData =  get_the_terms($post->ID, 'blog_genre'); ?>
      <span class="day"><?php print get_the_date() ?></span>
      <a class="catLink" href="<?php print get_term_link($postData[0]->term_id, 'blog_genre') ?>">
        <?php print $postData[0]->name ?>
      </a>
    </div>
    <h1 class="blogTitle"><?php the_title(); ?></h1>
    <?php
    if (have_rows('blog')) :
      while (have_rows('blog')) :
        the_row();
        if (get_row_layout() == 'textArea') :
    ?>
          <p class="blogText"><?php the_sub_field('text'); ?></p>
        <?php
        endif;
        if (get_row_layout() == 'imgArea') :
        ?>
          <img class="blogImg" src="<?php the_sub_field('img'); ?>" alt="">
    <?php
        endif;
      endwhile;
    endif;
    ?>
  </div>
</div>
<?php include_once('inc/footer.php'); ?>