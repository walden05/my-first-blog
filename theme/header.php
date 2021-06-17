<!DOCTYPE html>
<html>
<head>

        <?php wp_head(); ?>
    </head>
    <body>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left"><a href="<?php echo site_url()?>"><strong>My</strong> Blog</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li><a href="<?php echo site_url('/about-us')?>">About Us</a></li>
            </ul>
          </nav>
          
    </header>