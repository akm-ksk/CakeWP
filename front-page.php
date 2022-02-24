<?php include_once('inc/head.php') ?>
<section id="mv" class="sec">
  <ul id="mvSlider">
    <?php if (have_rows('mv')) : ?>
      <?php while (have_rows('mv')) : the_row(); ?>
        <?php while (have_rows('img')) : the_row(); ?>
          <li>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php the_sub_field('spImg'); ?>">
              <img src="<?php the_sub_field('pcImg'); ?>" alt="">
            </picture>
          </li>
        <?php endwhile; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </ul>
</section>
<section id="newsArea" class="sec">
  <div class="cntIn">
    <div class="box01 flexBox">
      <div class="boxL">
        <h2 class="titlePt01">News</h2>
        <a href="<?php print get_home_url(); ?>/blog">一覧を見る</a>
      </div>
      <div class="boxR">
        <ul>
          <?php
          $blog = array(
            'post_type' => 'blog',
            'posts_per_page' => 5,
          );
          $blogQuery = new WP_Query($blog);
          if ($blogQuery->have_posts()) :
            while ($blogQuery->have_posts()) :
              $blogQuery->the_post();
              $postData =  get_the_terms($post->ID, 'blog_genre');
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
          wp_reset_query();
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="featureArea" class="sec">
  <div class="cntIn">
    <div class="box01 flexBox">
      <h2 class="titlePt01">Feature</h2>
      <p class="featureText"><?php the_field('feature'); ?></p>
    </div>

  </div>
</section>
<section id="menuArea" class="sec">
  <div class="cntIn">
    <div class="bpx01 flexBox">
      <h2 class="titlePt01">Menu</h2>
      <a href="<?php print get_home_url() ?>/menu">Menu一覧へ</a>
    </div>
    <?php
    $pickUps = get_field('pickUp');
    if (count($pickUps) > 0) :
    ?>
      <h3 class="titlePt02">オーナーシェフのおすすめ</h3>
      <ul id="pickUp" class="gridBox">
        <?php
        foreach ($pickUps as $pickUp) :
          if (!get_field('noSale', $pickUp->ID)) :
        ?>
            <li class="itemCard">
              <img src="<?php the_field('img', $pickUp->ID); ?>" alt="">
              <p class="name"><?php print $pickUp->post_title; ?></p>
              <p class="text"><?php the_field('text', $pickUp->ID); ?></p>
              <p class="price"><?php print number_format(get_field('price', $pickUp->ID)); ?>円</p>
            </li>
        <?php
          endif;
        endforeach;
        ?>
      </ul>
    <?php endif; ?>
  </div>
</section>
<?php include_once('inc/footer.php') ?>