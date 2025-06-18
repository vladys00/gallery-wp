<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    
</head>
<body <?php body_class(); ?>>
<!-- header.html -->
<header class="header">
  <div class="header__mobile">
    <div class="header__logo">
        <a href="" class="header__logo-link">GALLERY LOGO</a>
    </div>
    <button class="header__toggle">
        <img class="header__icon" src="<?php echo get_template_directory_uri(); ?>/assets/hamburger.png" alt="hamburger icon">
    </button>
    <nav class="header__nav">
        <button class="header__nav-close">x</button>
        <a href="" class="header__nav-link">ABOUT</a>
        <a href="" class="header__nav-link">CONTACT</a>
        <a href="<?php echo get_home_url();?>" class="header__nav-link">HOME</a>
    </nav>
  </div>

  <div class="header__desktop">
    <!-- Desktop-specific stuff here -->
  </div>
</header>  

