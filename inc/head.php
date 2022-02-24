<?php
$page = get_post(get_the_ID());
$slug = $page->post_name;
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title><?php is_front_page() ? print 'Cake Cafe' : print $page->post_title . '|Cake Cafe' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="" />
  <meta name="description" content="広島市中区千田町にある焼き菓子やケーキを食べながらおいしいコーヒーの飲めるお店です。千田公園・東千田公園の中間に位置しますのでお持ち帰りでもイートインおすすめのお店です!" />
  <meta property="og:title" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:card" content="">
  <meta property="twitter:url" content="" />
  <link rel="icon" href="">
  <link rel="preconnect" href="">
  <link rel="preconnect" href="" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Josefin+Sans:wght@400;500;600;700&family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resource/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resource/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resource/css/style.min.css">
  <?php wp_head(); ?>
</head>

<body>
  <div id="wrapper">
    <?php include_once('header.php') ?>
    <main id="<?php
              if (is_front_page()) {
                print 'top';
              } elseif (is_page()) {
                print $slug;
              } elseif (is_tax() || is_archive()) {
                print 'list';
              } elseif (is_single()) {
                print 'single';
              } else {
                print 'other';
              }
              ?>">