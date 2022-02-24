<?php
/*
Template Name: Store
*/
?>
<?php include_once('inc/head.php') ?>
<section id="titleArea" class="flexBox" style="background-image:url('<?php the_field('bgImg'); ?>');">
  <div class="cntIn">
    <h1 class="flexBox">Store</h1>
  </div>
</section>
<section id="storeInfo">
  <div class="cntIn">
    <div class="boxWrap flexBox">
      <div class="box01">
        <h2 class="name">Cake Cafe<span class="jpName">ケーキカフェ</span></h2>
        <dl id="info">
          <dt>営業時間</dt>
          <dd><?php the_field('time'); ?></dd>
          <dt>TEL</dt>
          <dd><a href="tel:<?php the_field('tel'); ?>"><?php the_field('tel'); ?></a></dd>
          <dt>Mail</dt>
          <dd><a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></dd>
        </dl>
      </div>
      <ul class="box02 gridBox">
        <li class="img01 storeImg"><img src="<?php the_field('img01'); ?>" alt=""></li>
        <li class="img02 storeImg"><img src="<?php the_field('img02'); ?>" alt=""></li>
        <li class="img03 storeImg"><img src="<?php the_field('img03'); ?>" alt=""></li>
      </ul>
    </div>
  </div>
</section>
<?php include_once('inc/footer.php') ?>