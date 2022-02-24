<?php
/*
Template Name: Menu
*/
?>
<?php include_once('inc/head.php') ?>
<section id="titleArea" class="flexBox" style="background-image:url('<?php the_field('bgImg'); ?>');">
  <div class="cntIn">
    <h1 class="flexBox">Menu</h1>
  </div>
</section>
<?php
$terms = get_terms('item');
foreach ($terms as $term) :
?>
  <?php
  $item = array(
    'post_type' => 'cake',
    'posts_per_page' => -1,
    'tax_query' => array(
      'relation' => 'AND',
      array(
        'taxonomy' => 'item',
        'field' => 'slug',
        'terms' => $term->slug,
      )
    )
  );
  $theQuery = new WP_Query($item);
  if ($theQuery->have_posts()) :
  ?>
    <section id="<?php print $term->slug ?>Menu" class="sec">
      <div class="cntIn">
        <h2 class="title"><?php print $term->name ?></h2>
        <ul class="itemList gridBox">
          <?php
          while ($theQuery->have_posts()) :
            $theQuery->the_post();
            if (!get_field('noSale')) :
          ?>
              <li class="itemCard">
                <img src="<?php the_field('img'); ?>" alt="">
                <p class="name"><?php print the_title(); ?></p>
                <p class="text"><?php the_field('text'); ?></p>
                <p class="price"><?php print number_format(get_field('price')); ?>円</p>
              </li>
          <?php
            endif;
          endwhile; ?>
        </ul>
      </div>
    </section>

<?php
  endif;
  wp_reset_query();
endforeach;
?>

<?php include_once('inc/footer.php') ?>