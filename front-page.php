
<?php
/*
  Side background
*/
?>


<?php
/*

<div class="sides">
  <div class="left-side">
    <div class="div-1">

    </div>
    <div class="div-2">

    </div>
    <div class="div-3">

    </div>
    <div class="div-4">

    </div>
    <div class="div-5">

    </div>

  </div>

</div>

*/
?>

<?php
get_header();
?>




<?php
  //Featured Post and Picture Thumbnail
  /*

  <div id="featured">
      <?php
        query_posts('posts_per_page=1&tag=front-page');
        if ( have_posts() ) while ( have_posts() ) : the_post();
      ?>

        <div class="fp-container d-flex justify-content-center">
          <div class="fp-content">
            <div class="fp-img">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
            </div>
            <div class="fp-text">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><?php the_excerpt(); ?></p>
            </div>

          </div>
        </div>
      <?php
        endwhile;
      ?>
      <?php wp_reset_query(); ?>
  </div>


  <div class="fb-video mask-strip-video" data-href="https://www.facebook.com/hairbandsandsewon/videos/626869084535708/" data-show-text="false" data-width="500px">
    <blockquote cite="https://developers.facebook.com/hairbandsandsewon/videos/626869084535708/" class="fb-xfbml-parse-ignore">
      <a href="https://developers.facebook.com/hairbandsandsewon/videos/626869084535708/">I 💕 U Baaa B ! 😷🎶</a>
      <p>One for every occasion. Order yours 😊</p>
      Posted by
      <a href="https://www.facebook.com/hairbandsandsewon/">Hairbands And Sew On</a>
      on Wednesday, April 29, 2020
    </blockquote>
  </div>

  <iframe class="mask-strip-video" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fhairbandsandsewon%2Fvideos%2F626869084535708%2F&show_text=false&width=734&height=1311&appId" width="734" height="1311" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>






  */
?>









<div class="mask-strip" id="mask-strip">
  <div class="pink-polka-strip pps-face-masks d-flex justify-content-center">

      <div class="strip-title-box">

        <h2 class="mask-strip-title mp-title-text">Face Masks</h2>

      </div>
  </div>


<div class="mask-strip-content-container">
  <?php
/*  <div class="mask-strip-content ">
    <div class="mask-strip-video" id="mask-strip-video">
      <div class="fb-video" data-href="https://www.facebook.com/hairbandsandsewon/videos/626869084535708/" data-show-text="false" data-width=""></div>
    </div>

    <div class="mask-strip-right-group">
      <div class="mask-strip-img-container">
        <a href="<?php bloginfo('url');?>">
          <img class="img-pink-rounded mask-strip-img" id="mask-strip-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/mask_examples.jpg">
        </a>
      </div>

      <p class="mask-strip-text mp-paragraph-text" id="mask-strip-text">To help keep you safe during the Coronavirus outbreak, Hairbands and Sew On is now offering custom handmade face masks. Breathe safe, and in style! </p>
      <a class="" href="<?php bloginfo('url');?>">
        <button type="button" class="pink-button">Get Yours Now!</button>
      </a>
    </div>
  </div>*/
  ?>

<div class="d-flex justify-content-center">

    <div class="mask-wrapper">

      <div class="box1 grid-box mask-content-container d-flex justify-content-center">

          <div class="mask-content">
            <div class="fb-video-400">
              <div class="fb-video" data-href="https://www.facebook.com/hairbandsandsewon/videos/626869084535708/" data-show-text="false" data-width="400"></div>
            </div>

            <div class="fb-video-300">
              <div class="fb-video" data-href="https://www.facebook.com/hairbandsandsewon/videos/626869084535708/" data-show-text="false" data-width="300"></div>
            </div>

          </div>

      </div>

      <div class="box2 grid-box d-flex justify-content-center">
          <div class="text-center">
            <h5 class="grid-titles">Masks Made For You</h5>
            <p class="mp-paragraph-text">
              To help keep you safe during the Coronavirus outbreak, Hairbands and Sew On is now offering custom handmade face masks. Why walk around with a plain old face mask when you could sport one with some character? We all wish we didn't need one, but now you can stand out when you just can't stay in any longer. Breathe safe, and in style!
            </p>
          </div>
      </div>

      <div class="box3 grid-box d-flex justify-content-center">
        <div class="text-center">
          <h5 class="grid-titles">Fits The Whole Family</h5>
          <p class="mp-paragraph-text">
            Hairbands and Sew On's quality handmade face masks feature elastic ear straps , fitted wire nose grip for a precise fit and a pocket to insert a filter if desired.  They come in four sizes, so everyone can have one that fits just right! We can make any size mask in any style you'd like, simply select which sizes you'd like before checking out. Get everyone in your family a mask they'll love and fits their unique personality.
          </p>
        </div>
      </div>

      <div class="box4 grid-box mask-content-container">
        <div class="mask-content">

            <a class="shop-link" href="https://hairbandsandsewon.com/shop/">
              <img class="img-pink-rounded mask-picture" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/mask_examples.jpg">
            </a>

        </div>
      </div>
    </div>
</div>




    <div class="mask-carousel" id="mask-carousel">
      <div class="d-flex justify-content-center">
        <a class="shop-link" href="https://hairbandsandsewon.com/shop/">
          <button type="button" class="carousel-title carousel-title-button">Grab A Face Mask</button>
        </a>
      </div>




      <div class="mask-carousel-container">
        <div class="glide glide-mask">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">

              <li class="glide__slide">
                <img class="img-fluid mask-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/carousel/scott_april_masks.jpg" id="mask-carousel-img-0" onclick="carouselClick('mask-carousel-img-0', 'mask-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid mask-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/carousel/mask_big_dots.jpg" id="mask-carousel-img-1" onclick="carouselClick('mask-carousel-img-1', 'mask-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid mask-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/carousel/mask_skulls.jpg" id="mask-carousel-img-2" onclick="carouselClick('mask-carousel-img-2', 'mask-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid mask-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/carousel/mask_maker.jpg" id="mask-carousel-img-3" onclick="carouselClick('mask-carousel-img-3', 'mask-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid mask-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/carousel/mask_floral.jpg" id="mask-carousel-img-4" onclick="carouselClick('mask-carousel-img-4', 'mask-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid mask-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/carousel/mask_miami.jpg" id="mask-carousel-img-5" onclick="carouselClick('mask-carousel-img-5', 'mask-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid mask-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/carousel/mask_turquoise_pattern.jpg" id="mask-carousel-img-6" onclick="carouselClick('mask-carousel-img-6', 'mask-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid mask-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/carousel/mask_pink_dots.jpg" id="mask-carousel-img-7" onclick="carouselClick('mask-carousel-img-7', 'mask-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid mask-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/carousel/mask_purple.jpg" id="mask-carousel-img-8" onclick="carouselClick('mask-carousel-img-8', 'mask-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid mask-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/carousel/mask_hunting.jpg" id="mask-carousel-img-7" onclick="carouselClick('mask-carousel-img-7', 'mask-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid mask-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/masks/carousel/mask_blue_floral.jpg" id="mask-carousel-img-8" onclick="carouselClick('mask-carousel-img-8', 'mask-carousel');">
              </li>

            </ul>
          </div>

          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<" onclick="prevClicked('mask-carousel');">prev</button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">" onclick="nextClicked('mask-carousel');">next</button>
          </div>
        </div>
      </div>
    </div>





</div>

</div>


<?php
  //garters
?>

<div class="pink-polka-strip pps-face-masks d-flex justify-content-center">
  <div class="strip-title-box">
    <h2 class="mask-strip-title mp-title-text">Garters</h2>
  </div>
</div>


<div class="garter-strip">
  <div class="d-flex justify-content-center">
    <div class="garter-wrapper">

      <div class="box1 grid-box garter-content-container">

          <div class="garter-content">

              <a class="shop-link" href="https://hairbandsandsewon.com/shop/">
                <img class="img-pink-rounded garter-picture" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/garters/demos/garter_girls.jpg">
              </a>

          </div>

      </div>

      <div class="box2 grid-box d-flex justify-content-center">
          <div class="text-center">
            <h5 class="grid-titles">Perfect For Prom</h5>
            <p class="mp-paragraph-text">
              Add the finishing touch to your special night with a custom garter by Hairbands and Sew On. Each garter is designed and created with you to perfectly complement your dress and dates attire. We can model off of existing samples, or custom create from scratch to ensure your look is unique to you. From simple single bows to elaborate multi-color bows with lace, ribbon, ruffles and charms. Classy, Sassy, Stylish or Bold!            </p>
          </div>
      </div>

      <div class="box3 grid-box d-flex justify-content-center">
        <div class="text-center">
          <h5 class="grid-titles">Match Dress Fabrics</h5>
          <p class="mp-paragraph-text">
            Together we pick your garter center band ribbon, ruffle material, bow size and colors.  We can even add your charms.   Would you like a perfect match? Save the scraps from your dress alterations and these can be used in creating your garter!  See samples of garters designed for previous occasions for ideas or starting points.
          </p>
        </div>
      </div>

      <div class="box4 grid-box garter-content-container">
        <div class="garter-content">

            <a class="shop-link" href="https://hairbandsandsewon.com/shop/">
              <img class="img-pink-rounded garter-picture" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/garters/garter_gold.jpg">
            </a>

        </div>
      </div>
    </div>
  </div>

  <div class="garter-carousel" id="garter-carousel">
    <div class="d-flex justify-content-center">
      <a class="shop-link" href="https://hairbandsandsewon.com/shop/">
        <button type="button" class="carousel-title carousel-title-button">Get Your Own Custom Garter</button>
      </a>
    </div>




    <div class="garter-carousel-container">
      <div class="glide glide-garter">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">

              <li class="glide__slide">
                <img class="img-fluid garter-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/garters/carousel/garter_gold.jpg" id="garter-carousel-img-1" onclick="carouselClick('garter-carousel-img-1', 'garter-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid garter-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/garters/carousel/garter_blue.jpg" id="garter-carousel-img-2" onclick="carouselClick('garter-carousel-img-2', 'garter-carousel');">
              </li>

              <li class="glide__slide" id="garter-slide-tall">
                <img class="img-fluid garter-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/garters/carousel/garter_purple.jpg" id="garter-carousel-img-3" onclick="carouselClick('garter-carousel-img-3', 'garter-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid garter-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/garters/carousel/garter_pink_white.jpg" id="garter-carousel-img-4" onclick="carouselClick('garter-carousel-img-4', 'garter-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid garter-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/garters/carousel/garter_black.jpg" id="garter-carousel-img-5" onclick="carouselClick('garter-carousel-img-5', 'garter-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid garter-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/garters/carousel/garter_red.jpg" id="garter-carousel-img-6" onclick="carouselClick('garter-carousel-img-6', 'garter-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid garter-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/garters/carousel/garter_white_black.jpg" id="garter-carousel-img-7" onclick="carouselClick('garter-carousel-img-7', 'garter-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid garter-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/garters/carousel/garter_white_red.jpg" id="garter-carousel-img-8" onclick="carouselClick('garter-carousel-img-8', 'garter-carousel');">
              </li>

          </ul>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<" onclick="prevClicked('garter-carousel');">prev</button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">" onclick="nextClicked('garter-carousel');">next</button>
        </div>
      </div>
    </div>
  </div>

</div>


<?php
  //purses
?>


<div class="pink-polka-strip pps-face-masks d-flex justify-content-center">
  <div class="strip-title-box">
    <h2 class="mask-strip-title mp-title-text">Purses</h2>
  </div>
</div>


<div class="purse-strip">
  <div class="d-flex justify-content-center">


        <div class="purse-wrapper ">

          <div class="box1 grid-box purse-content-container">

              <div class="purse-content">

                  <a class="shop-link" href="https://hairbandsandsewon.com/shop/">
                    <img class="img-pink-rounded purse-picture" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/purses/grid/purses_badger.jpg">
                  </a>

              </div>

          </div>

          <div class="box2 grid-box d-flex justify-content-center">
              <div class="text-center">
                <h5 class="grid-titles">Glitz Up Gameday</h5>
                <p class="mp-paragraph-text">
                  Hairbands and Sew On's signature Game Day bag features a convertible strap allowing you to change it from a cross body purse to a fanny pack with just he slide of string.  Perfect for festivals and Game Day where only small bags are allowed.   An outside easy access pocket fits your I-phone 8 plus,  a small zippered pocket on the back securely stores your cash or cards, and the main pocket is just right for sunglasses, chapstick and a few other essentials.
                </p>
              </div>
          </div>

          <div class="box3 grid-box d-flex justify-content-center">
            <div class="text-center">
              <h5 class="grid-titles">Sleek and Stylish</h5>
              <p class="mp-paragraph-text">
                Festival & GameDay Bags were designed to carry just what you need for a fun day, evening out or quick trip to the store. Features a unique strap that converts from a cross body bag to a fanny pack with a simple slide of the strap. As your day changes and you want to go hands free just slide the strap and wear on your waist. Easy access snap pocket fits your phone, small outside zip pocket is just right for cards and cash, and use the main pocket for sunglasses, lipbalm and other essentials. Great way to keep just what you need safe and secure on your day out and still look great. Hundreds of fabric to choose from.
              </p>
            </div>
          </div>

          <div class="box4 grid-box purse-content-container">
            <div class="purse-content">

                <a class="shop-link" href="https://hairbandsandsewon.com/shop/">
                  <img class="img-pink-rounded purse-picture" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/purses/grid/purses_six.jpg">
                </a>

            </div>
          </div>




        </div>

  </div>


  <div class="purse-carousel" id="purse-carousel">
    <div class="d-flex justify-content-center">
      <a class="shop-link" href="https://hairbandsandsewon.com/shop/">
        <button type="button" class="carousel-title carousel-title-button">Purchase Your Purse</button>
      </a>
    </div>




    <div class="purse-carousel-container">
      <div class="glide glide-purse">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">

              <li class="glide__slide" id="purse-carousel-img-1-div">
                <img class="img-fluid purse-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/purses/carousel/purses_squares_lady.jpg" id="purse-carousel-img-1" onclick="carouselClick('purse-carousel-img-1', 'purse-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid purse-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/purses/carousel/purses_flag.jpg" id="purse-carousel-img-2" onclick="carouselClick('purse-carousel-img-2', 'purse-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid purse-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/purses/carousel/purses_camo.jpg" id="purse-carousel-img-3" onclick="carouselClick('purse-carousel-img-3', 'purse-carousel');">
              </li>

              <li class="glide__slide" id="purse-carousel-img-4-div">
                <img class="img-fluid purse-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/purses/carousel/purses_clear.jpg" id="purse-carousel-img-4" onclick="carouselClick('purse-carousel-img-4', 'purse-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid purse-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/purses/carousel/purses_blue_flower.jpg" id="purse-carousel-img-5" onclick="carouselClick('purse-carousel-img-5', 'purse-carousel');">
              </li>

              <li class="glide__slide" id="purse-carousel-img-6-div">
                <img class="img-fluid purse-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/purses/carousel/purses_five.jpg" id="purse-carousel-img-6" onclick="carouselClick('purse-carousel-img-6', 'purse-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid purse-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/purses/carousel/purses_minnesota.jpg" id="purse-carousel-img-7" onclick="carouselClick('purse-carousel-img-7', 'purse-carousel');">
              </li>

              <li class="glide__slide" id="purse-carousel-img-8-div">
                <img class="img-fluid purse-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/purses/carousel/purses_black_flower.jpg" id="purse-carousel-img-8" onclick="carouselClick('purse-carousel-img-8', 'purse-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid purse-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/purses/carousel/purses_white_dots.jpg" id="purse-carousel-img-9" onclick="carouselClick('purse-carousel-img-9', 'purse-carousel');">
              </li>

          </ul>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<" onclick="prevClicked('purse-carousel');">prev</button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">" onclick="nextClicked('purse-carousel');">next</button>
        </div>
      </div>
    </div>
  </div>


</div>


<?php
  //hairbands
  //<form method="GET" action="http://www.amazon.com/gp/aws/cart/add.html"> <input type="hidden" name="AssociateTag" value="storeid-20"/> <input type="hidden" name="SubscriptionId" value="[AWSAccessKeyId]"/> <input type="hidden" name="ASIN.1" value="B00003CWT6"/><br/>
  //  <input type="hidden" name="Quantity.1" value="1"/> <br/> <input type="image" name="add" value="Buy from Amazon.com" border="0" alt="Buy from Amazon.com" src="http://images.amazon.com/images/G/01/associates/add-to-cart.gif"> </form>

?>


<div class="pink-polka-strip pps-face-masks d-flex justify-content-center">
  <div class="strip-title-box">
    <h2 class="mask-strip-title mp-title-text">Hairbands</h2>
  </div>
</div>

<div class="hairband-strip">
  <div class="d-flex justify-content-center">


        <div class="hairband-wrapper ">

          <div class="box1 grid-box hairband-content-container">

              <div class="hairband-content">

                  <a class="shop-link" href="https://hairbandsandsewon.com/shop/">
                    <img class="img-pink-rounded hairband-picture" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/grid/hairbands_two_girls.jpg">
                  </a>

              </div>

          </div>

          <div class="box2 grid-box d-flex justify-content-center">
              <div class="text-center">
                <h5 class="grid-titles">Our Specialty</h5>
                <p class="mp-paragraph-text">
                  Hairbands and Sew On all started with our handmade adjustable hairbands. Featuring a no-slip backing, our hairbands are made to comfortably fit heads of all sizes and reliably hold back your hair, even while exercising and playing sports. Quit blowing the hair out of your eyes and select a style from our growing selection.
                </p>
              </div>
          </div>

          <div class="box3 grid-box d-flex justify-content-center">
            <div class="text-center">
              <h5 class="grid-titles">Perfect For Teams</h5>
              <p class="mp-paragraph-text">
                Up your team's game and order a hairband for every player. Our adjustable elastic strap means that everyone can play or dance in comfort, and our customizable design means that they can also do it in style. We offer designs for a variety of sports and can match the color to your team's uniform.  Dancers love the sparkle and functionality of our adjustable hairbands, offer them as an add on at your dance team camp.

                If you don't see your team's sport in our inventory, don't hesitate to make a custom request, that's our specialty!
              </p>
            </div>
          </div>

          <div class="box4 grid-box hairband-content-container">
            <div class="hairband-content">

                <a class="shop-link" href="https://hairbandsandsewon.com/shop/">
                  <img class="img-pink-rounded hairband-picture" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/grid/hairbands_basketball.jpg">
                </a>

            </div>
          </div>




        </div>

  </div>


  <div class="hairband-carousel" id="hairband-carousel">
    <div class="d-flex justify-content-center">
      <a class="shop-link" href="https://hairbandsandsewon.com/shop/">
        <button type="button" class="carousel-title carousel-title-button">Get a Handmade Hairband</button>
      </a>
    </div>



    <div class="hairband-carousel-container">
      <div class="glide glide-hairband">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides hairband-slides" id="hairband-slides">

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_flowers.jpg" id="hairband-carousel-img-1" onclick="carouselClick('hairband-carousel-img-1', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_red_soccer.jpg" id="hairband-carousel-img-2" onclick="carouselClick('hairband-carousel-img-2', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_girl.jpg" id="hairband-carousel-img-3" onclick="carouselClick('hairband-carousel-img-3', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_pink_dogs.jpg" id="hairband-carousel-img-4" onclick="carouselClick('hairband-carousel-img-4', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_white_tennis.jpg" id="hairband-carousel-img-5" onclick="carouselClick('hairband-carousel-img-5', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_rack_one.jpg" id="hairband-carousel-img-6" onclick="carouselClick('hairband-carousel-img-6', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_purple_baseball.jpg" id="hairband-carousel-img-7" onclick="carouselClick('hairband-carousel-img-7', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_rack_two.jpg" id="hairband-carousel-img-8" onclick="carouselClick('hairband-carousel-img-8', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_pink_love.jpg" id="hairband-carousel-img-9" onclick="carouselClick('hairband-carousel-img-9', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_christmas_rack.jpg" id="hairband-carousel-img-10" onclick="carouselClick('hairband-carousel-img-10', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_christmas.jpg" id="hairband-carousel-img-11" onclick="carouselClick('hairband-carousel-img-11', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_brownies.jpg" id="hairband-carousel-img-12" onclick="carouselClick('hairband-carousel-img-12', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_rack_three.jpg" id="hairband-carousel-img-13" onclick="carouselClick('hairband-carousel-img-13', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_lions.jpg" id="hairband-carousel-img-14" onclick="carouselClick('hairband-carousel-img-14', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_green.jpg" id="hairband-carousel-img-15" onclick="carouselClick('hairband-carousel-img-15', 'hairband-carousel');">
              </li>

              <li class="glide__slide">
                <img class="img-fluid hairband-carousel-img" src="<?php bloginfo('wpurl');?>/wp-content/uploads/hbaso/hairbands/carousel/hairbands_rack_four.jpg" id="hairband-carousel-img-16" onclick="carouselClick('hairband-carousel-img-16', 'hairband-carousel');">
              </li>

          </ul>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<" onclick="prevClicked('hairband-carousel');">prev</button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">" onclick="nextClicked('hairband-carousel');">next</button>
        </div>
      </div>
    </div>
  </div>


</div>


<?php
  //Sew On
?>

<div class="pink-polka-strip pps-face-masks d-flex justify-content-center">
  <div class="strip-title-box">
    <h2 class="mask-strip-title mp-title-text">Sew On...</h2>
  </div>
</div>


<?php
  //Pop up image modal
?>
<div id="main-page-modal" class="modal">
  <span class="close">&times;</span>
  <div class="modal-content">
    <img class="modal-img" id="modal-img">
  </div>
  <div id="caption"></div>
  <?php
    //Pop up image modal

/*  <div class="glide__arrows" data-glide-el="controls">
    <button class="glide__arrow glide__arrow--left" data-glide-dir="<" onclick="prevClicked();">prev</button>
    <button class="glide__arrow glide__arrow--right" data-glide-dir=">" onclick="nextClicked();">next</button>
  </div>*/
  ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <script>
    const config = {
      type: 'carousel',
      perView: 3,
      breakpoints:{
        1200:{
          perView: 2
        },
        600:{
          perView: 1
        }
      }
    }
    const configmask = {
      type: 'carousel',
      perView: 4,
      breakpoints:{
        1200:{
          perView: 3
        },
        900:{
          perView: 2
        },
        600:{
          perView: 1
        }
      }
    }
    new Glide(".glide-mask", configmask).mount();
    new Glide(".glide-garter", config).mount();
    new Glide(".glide-purse", config).mount();
    new Glide(".glide-hairband", config).mount();
  </script>





  <div id="featured">
      <?php
        query_posts('posts_per_page=5&tag=front-page');
        if ( have_posts() ) while ( have_posts() ) : the_post();
      ?>

        <div class="sew-container d-flex justify-content-center">
          <div class="sew-content justify-content-center">
            <div class="sew-img">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>

            </div>
            <div class="sew-text">
              <a class="sew-text-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <div class="sew-text-excerpt"><p><?php the_excerpt(); ?></p></div>
            </div>


          </div>
        </div>
      <?php
        endwhile;
      ?>
      <?php wp_reset_query(); ?>
  </div>




<div class="facebook-feed justify-content-center">
  <?php
  //$album = fpf_fetch_album_content( '184031131963485', array('cols'=>2, 'max'=>8), 'hideCaps=1' );
  //echo $album['content'];
  //echo "Cover photo: " . $album['cover'] . ", Photo Count: " . $album['count'];
  //echo do_shortcode('[<!--FBGallery2 184031131963485 --><!--/FBGallery2-->]');

  ?>
  <!--FBGallery2 184031131963485 --><!--/FBGallery2-->
</div>


  <?php

/*<div class="overlayContainer">
    <?php
     //<div class="overlayBox" style="background: red;"></div>
     //<div class="overlayBox" style="background: blue;"></div>
    ?>
       <div class="fire-script">
         <iframe src="<?php bloginfo('wpurl');?>/wp-content/uploads/boozebong/main_page/js/movingFire.html" class="fire-script"></iframe>
       </div>


       <div>
         helloS
       </div>

 </div>*/
?>



<?php
/*<script>
var graphic,LG,LY,LR,RG,RY,RR,a,step,arcTime,baseAngle,pulsePhase,i,BBGreen="#0bb420",BBYellow="#ffde17",BBRed="#d12027",w=1700,h=1700,lastSecond=0,imgW=150,imgH=140,imgS=1,angle=0,colorAngle=0,CAPS=20,timeStep=.05,rotationTime=30,slices=0,minSize=.3,growth=.6;function getSecond(){return millis()/1e3}function drawChippi(i,e,g){graphic.strokeWeight(1),graphic.circle(43*g+i,e,18),graphic.circle(47*g+i,e,16),graphic.circle(51*g+i,e,14),graphic.circle(67*g+i,e,7),graphic.circle(58*g+i,e,10),graphic.circle(60*g+i,e,9),graphic.circle(33*g+i,e,14),graphic.circle(22*g+i,1+e,13),graphic.circle(17*g+i,3+e,14),graphic.circle(13*g+i,5+e,15),graphic.circle(9*g+i,8+e,15),graphic.circle(6*g+i,12+e,16),graphic.circle(3*g+i,15+e,16),graphic.circle(1*g+i,21+e,16),graphic.circle(2*g+i,33+e,16),graphic.circle(4*g+i,42+e,16),graphic.circle(4*g+i,48+e,16),graphic.circle(3*g+i,54+e,15),graphic.circle(2*g+i,57+e,14),graphic.circle(1*g+i,60+e,13),graphic.circle(i-1*g,63+e,12),graphic.circle(i-3*g,66+e,11),graphic.circle(i-5*g,68+e,10),graphic.circle(i-9*g,71+e,9),graphic.circle(i-11*g,72+e,8),graphic.circle(i-13*g,73+e,9),graphic.circle(i-15*g,74+e,9),graphic.circle(i-20*g,76+e,10),graphic.circle(i-22*g,76+e,11),graphic.circle(i-26*g,77+e,11),graphic.circle(i-30*g,76+e,12),graphic.circle(i-37*g,72+e,12),graphic.circle(i-42*g,69+e,12),graphic.circle(i-47*g,67+e,12),graphic.circle(i-51*g,67+e,12),graphic.circle(i-56*g,68+e,11),graphic.circle(i-60*g,72+e,9),graphic.circle(i-62*g,74+e,7),graphic.circle(i-64*g,76+e,5),graphic.circle(i-63*g,77+e,6),graphic.circle(i-62*g,83+e,5),graphic.circle(i-61*g,85+e,4),graphic.circle(i-59*g,88+e,3),graphic.circle(i-58*g,90+e,3),graphic.circle(i-56*g,92+e,2.5),graphic.circle(i-54*g,94+e,2),graphic.circle(i-52*g,96+e,1.25),graphic.strokeWeight(9),graphic.line(15*g+i,-8+e,5*g+i,-17+e),graphic.line(5*g+i,-17+e,10*g+i,-33+e),graphic.circle(10*g+i,-33+e,3),graphic.line(18*g+i,15+e,42*g+i,35+e),graphic.line(21*g+i,15+e,36*g+i,30+e),graphic.circle(42*g+i,35+e,3),graphic.line(-10*g+i,48+e,-30*g+i,38+e),graphic.line(-10*g+i,42+e,-23*g+i,41+e),graphic.circle(-30*g+i,38+e,4),graphic.line(5*g+i,70+e,25*g+i,70+e),graphic.line(5*g+i,57+e,25*g+i,70+e),graphic.line(25*g+i,70+e,33*g+i,78+e),graphic.circle(33*g+i,78+e,4)}function setup(){angleMode(RADIANS),createCanvas(w,h-(h/2-435)),(graphic=createGraphics(imgW,imgH)).stroke(BBGreen),graphic.fill(BBGreen),drawChippi(75,41,-1),LG=graphic.get(),graphic.clear(),graphic.stroke(BBYellow),graphic.fill(BBYellow),drawChippi(75,41,-1),LY=graphic.get(),graphic.clear(),graphic.stroke(BBRed),graphic.fill(BBRed),drawChippi(75,41,-1),LR=graphic.get(),graphic.clear(),graphic.stroke(BBGreen),graphic.fill(BBGreen),drawChippi(75,41,1),RG=graphic.get(),graphic.clear(),graphic.stroke(BBYellow),graphic.fill(BBYellow),drawChippi(75,41,1),RY=graphic.get(),graphic.clear(),graphic.stroke(BBRed),graphic.fill(BBRed),drawChippi(75,41,1),RR=graphic.get(),graphic.clear()}function draw(){for(translate(w/2,435),scale(.75),clear(),arcTime=2*PI/rotationTime,step=getSecond(),pulsePhase=-PI/8.5,getSecond()>=lastSecond+timeStep&&(colorAngle+=CAPS,lastSecond=getSecond()),angle=(baseAngle=step*arcTime)/(2*PI)*360,imgS=abs(sin(10*baseAngle))*growth+minSize,rotate(baseAngle),slices=11,a=2*PI/slices,i=0;i<slices;i+=1)(i*(360/slices)+angle%360)%360>=0+colorAngle%360&&(i*(360/slices)+angle%360)%360<120+colorAngle%360?image(RG,-20,-365,imgS*imgW,imgS*imgH):(i*(360/slices)+angle%360)%360>colorAngle%360-360&&(i*(360/slices)+angle%360)%360<colorAngle%360-240?image(RG,-20,-365,imgS*imgW,imgS*imgH):(i*(360/slices)+angle%360)%360>=120+colorAngle%360&&(i*(360/slices)+angle%360)%360<240+colorAngle%360?image(RR,-20,-365,imgS*imgW,imgS*imgH):(i*(360/slices)+angle%360)%360>colorAngle%360-240&&(i*(360/slices)+angle%360)%360<colorAngle%360-120?image(RR,-20,-365,imgS*imgW,imgS*imgH):image(RY,-20,-365,imgS*imgW,imgS*imgH),rotate(a);for(colorAngle-=1,imgS=abs(sin(10*baseAngle+pulsePhase))*growth+minSize,rotate(-2*baseAngle),slices=17,a=2*PI/slices,i=0;i<slices;i+=1)(i*(360/slices)-1*angle%360+360)%360>0+colorAngle%360&&(i*(360/slices)-1*angle%360+360)%360<120+colorAngle%360?image(LG,-20,-510,imgS*imgW,imgS*imgH):(i*(360/slices)-1*angle%360+360)%360>colorAngle%360-360&&(i*(360/slices)-1*angle%360+360)%360<colorAngle%360-240?image(LG,-20,-510,imgS*imgW,imgS*imgH):(i*(360/slices)-1*angle%360+360)%360>=120+colorAngle%360&&(i*(360/slices)-1*angle%360+360)%360<240+colorAngle%360?image(LR,-20,-510,imgS*imgW,imgS*imgH):(i*(360/slices)-1*angle%360+360)%360>=colorAngle%360-240&&(i*(360/slices)-1*angle%360+360)%360<colorAngle%360-120?image(LR,-20,-510,imgS*imgW,imgS*imgH):image(LY,-20,-510,imgS*imgW,imgS*imgH),rotate(a);for(colorAngle-=14,imgS=abs(sin(10*baseAngle+2*pulsePhase))*growth+minSize,rotate(2*baseAngle),slices=23,a=2*PI/slices,i=0;i<slices;i+=1)(i*(360/slices)+angle%360)%360>=0+colorAngle%360&&(i*(360/slices)+angle%360)%360<120+colorAngle%360?image(RG,-20,-655,imgS*imgW,imgS*imgH):(i*(360/slices)+angle%360)%360>colorAngle%360-360&&(i*(360/slices)+angle%360)%360<colorAngle%360-240?image(RG,-20,-655,imgS*imgW,imgS*imgH):(i*(360/slices)+angle%360)%360>=120+colorAngle%360&&(i*(360/slices)+angle%360)%360<240+colorAngle%360?image(RR,-20,-655,imgS*imgW,imgS*imgH):(i*(360/slices)+angle%360)%360>colorAngle%360-240&&(i*(360/slices)+angle%360)%360<colorAngle%360-120?image(RR,-20,-655,imgS*imgW,imgS*imgH):image(RY,-20,-655,imgS*imgW,imgS*imgH),rotate(a);for(colorAngle-=20,imgS=abs(sin(10*baseAngle+3*pulsePhase))*growth+minSize,rotate(-2*baseAngle),slices=31,a=2*PI/slices,i=0;i<slices;i+=1)(i*(360/slices)-1*angle%360+360)%360>0+colorAngle%360&&(i*(360/slices)-1*angle%360+360)%360<120+colorAngle%360?image(LG,-20,-800,imgS*imgW,imgS*imgH):(i*(360/slices)-1*angle%360+360)%360>colorAngle%360-360&&(i*(360/slices)-1*angle%360+360)%360<colorAngle%360-240?image(LG,-20,-800,imgS*imgW,imgS*imgH):(i*(360/slices)-1*angle%360+360)%360>=120+colorAngle%360&&(i*(360/slices)-1*angle%360+360)%360<240+colorAngle%360?image(LR,-20,-800,imgS*imgW,imgS*imgH):(i*(360/slices)-1*angle%360+360)%360>=colorAngle%360-240&&(i*(360/slices)-1*angle%360+360)%360<colorAngle%360-120?image(LR,-20,-800,imgS*imgW,imgS*imgH):image(LY,-20,-800,imgS*imgW,imgS*imgH),rotate(a);for(colorAngle-=20,imgS=abs(sin(10*baseAngle+4*pulsePhase))*growth+minSize,rotate(2*baseAngle),slices=37,a=2*PI/slices,i=0;i<slices;i+=1)(i*(360/slices)+angle%360)%360>=0+colorAngle%360&&(i*(360/slices)+angle%360)%360<120+colorAngle%360?image(RG,-20,-945,imgS*imgW,imgS*imgH):(i*(360/slices)+angle%360)%360>colorAngle%360-360&&(i*(360/slices)+angle%360)%360<colorAngle%360-240?image(RG,-20,-945,imgS*imgW,imgS*imgH):(i*(360/slices)+angle%360)%360>=120+colorAngle%360&&(i*(360/slices)+angle%360)%360<240+colorAngle%360?image(RR,-20,-945,imgS*imgW,imgS*imgH):(i*(360/slices)+angle%360)%360>colorAngle%360-240&&(i*(360/slices)+angle%360)%360<colorAngle%360-120?image(RR,-20,-945,imgS*imgW,imgS*imgH):image(RY,-20,-945,imgS*imgW,imgS*imgH),rotate(a);for(colorAngle-=25,imgS=abs(sin(10*baseAngle+5*pulsePhase))*growth+minSize,rotate(-2*baseAngle),slices=37,a=2*PI/slices,i=0;i<slices;i+=1)(i*(360/slices)-1*angle%360+360)%360>0+colorAngle%360&&(i*(360/slices)-1*angle%360+360)%360<120+colorAngle%360?image(LG,-20,-1080,imgS*imgW,imgS*imgH):(i*(360/slices)-1*angle%360+360)%360>colorAngle%360-360&&(i*(360/slices)-1*angle%360+360)%360<colorAngle%360-240?image(LG,-20,-1080,imgS*imgW,imgS*imgH):(i*(360/slices)-1*angle%360+360)%360>=120+colorAngle%360&&(i*(360/slices)-1*angle%360+360)%360<240+colorAngle%360?image(LR,-20,-1080,imgS*imgW,imgS*imgH):(i*(360/slices)-1*angle%360+360)%360>=colorAngle%360-240&&(i*(360/slices)-1*angle%360+360)%360<colorAngle%360-120?image(LR,-20,-1080,imgS*imgW,imgS*imgH):image(LY,-20,-1080,imgS*imgW,imgS*imgH),rotate(a);colorAngle+=81}
</script>*/
?>





<?php get_footer();?>
