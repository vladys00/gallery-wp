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
        <svg viewBox="0 0 24 24" width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 7L4 7" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M20 12L4 12" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M20 17L4 17" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
    </button>
    <nav class="header__nav">
      <div class="header__nav-top">
        <div class="header__nav-logo">GALLERY LOGO</div>
        <button class="header__nav-close"><svg viewBox="0 0 24 24" width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z" fill="#ffffff"></path> </g></svg></button>
      </div>
      <ul class="header__nav-navigation">
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Home</a></li>
      </ul>
    </nav>
  </div>

  
    <!-- Desktop-specific stuff here -->
      <div class="header__desktop">
    <div class="header__desktop-logo">
      <a href="<?php echo get_home_url(); ?>" class="header__logo-link">GALLERY LOGO</a>
    </div>
    <nav class="header__desktop-nav">
      <ul class="header__desktop-menu">
        <li class="header__desktop-menu-item">
          <a href="" class="header__desktop-menu-link">About</a>
        </li>
        <li class="header__desktop-menu-item">
          <a href="" class="header__desktop-menu-link">Contact</a>
        </li>
        <li class="header__desktop-menu-item">
          <a href="<?php echo get_home_url(); ?>" class="header__desktop-menu-link">Home</a>
        </li>
      </ul>
    </nav>
  </div>
  
</header>  

