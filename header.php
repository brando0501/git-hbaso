<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hairbands and Sew On</title>

    <?php wp_head();?>

    <?php
        //Favicon
    ?>
    <link rel="icon" href="<?php bloginfo('wpurl');?>/wp-content/uploads/boozebong/general/BoozeBong_Favicon.png" type="image/x-icon" />




    <?php
        //Fonts

        //boozebongs fonts
        //<link rel="stylesheet" href="https://use.typekit.net/xes4jvl.css">
    ?>

    <link rel="stylesheet" href="https://use.typekit.net/bht1gmn.css">



    <?php
        //Material Design
    ?>
    <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.js"></script>
    <?php
        //<link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    ?>
  </head>
  <body <?php body_class('body-content');?>>

    <?php
        //Facebook video
    ?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>


<header>
  <a name="top-of-page"></a>
  <div class="header-container">

    <div class="row">
      <div class="col d-flex align-items-center justify-content-between">

        <div class="top-left-cluster">
          <div class="logo-div">
            <a href="<?php bloginfo('url');?>">

              <img src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/general/logo.png" class="img-fluid logo">
            </a>
          </div>


          <div class="slogan-div">
            <h3 class="title-text">Hairbands and Sew On</h3>
            <p class="slogan-text">Handmade garters, purses, hairbands, accessories & sew on</p>
          </div>
        </div>



        <?php
          wp_nav_menu(
              array(
                'container' => 'ul',
                'container_class' => 'main-nav',

                'theme_location' => 'desktop-menu',
                'menu_class' => 'nav top-menu'
              )
            );
            /* The below code checks if a mobile-menu is set from the backend in the menu settings. If a menu has been set it will be displayed in the header. Or else, a menu has not been set then display a message.*/
            if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
                wp_nav_menu( array(
                  'container' => 'ul',
                  'container_class' => 'main-nav',

                  'theme_location' => 'mobile-menu',
                  'menu_class' => 'nav mobile-menu'
                ) );
                } else {
                   echo "<ul class='nav mobile-menu'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
            }
         ?>

     </div>
   </div>
  </div>
</header>

<?php
/*
  Background
*/
?>
<div class="background-container d-flex">
  <div class="background-circle-1">
  </div>
  <div class="background-circle-2">
  </div>
  <div class="background-circle-3">
  </div>
  <div class="background-circle-4">
  </div>
  <div class="background-circle-5">
  </div>
  <div class="background-circle-6">
  </div>
</div>
