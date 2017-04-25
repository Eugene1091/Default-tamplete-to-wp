<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
    </title>
    <?php wp_head(); ?>
  </head>
  
  <body>

	<header id="header">
		<div class="container">
			<div class="site-logo">
                <a href="#"><?php
                    if( has_custom_logo() ){
                        echo get_custom_logo();
                    } ?>
                </a>
			</div>
			
            <div class="hamburger hamburger--emphatic js-hamburger">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
			
			<nav class="menu-desktop">
			
			
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 0,
                        'container'         => 'div',
                        'menu_id'    => 'accordion-1',
                        'menu_class'   => 'menu')
                    );
                ?>
                
			</nav>
			
		</div>
		
            <div class="btn-vis-menu">
                <nav>
                   
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'mobile',
                        'theme_location'    => 'mobile',
                        'depth'             => 0,
                        'menu_id'    => 'accordion-mob',
                        'menu_class'   => 'menu-mob')
                    );
                ?>
<!--
                    <ul class="menu-mob">
                        <li class="menu-item current-menu-item">
                            <a href="#">
                                Our services
                            </a>
                            <ul>
                                <li><a href="#">Write my essay</a></li>
                                <li><a href="#">Buy essay online</a></li>
                                <li><a href="#">Custom essay writin</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#">Prices</a></li>
                        <li class="menu-item"><a href="#">How it works</a></li>
                        <li class="menu-item"><a href="#">Samples</a></li>
                        <li class="menu-item"><a href="#">F.A.Q</a></li>
                        <li class="menu-item"><a href="#">Contacts</a></li>
                        <li class="menu-item"><a href="#">Blog</a></li>
                        <li class="menu-item order-now-menu-item"><a href="#">ORDER NOW</a></li>
                    </ul>
-->
                </nav>
			</div>
			
	</header>

