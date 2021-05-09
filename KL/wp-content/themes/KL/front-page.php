<?php get_header( ); ?>
  <!-- banner-menu-sidebar-->




  <div class="container ">
        <div class="row m-auto">
            <div class="sidebar col-xl-2">
                <div class="sidebar-item">
                    <i class="fas fa-align-left"></i> <span>Danh muc</span>
                </div>
                       

                <div class="sidebar-item-2">
                    <ul>
                        <?php
                        $args = array(
                            'type'      => 'product',
                            'child_of'  => 0,
                            'parent'    => 0,
                            'hide_empty' => 0,
                            'number' =>5,
                            'taxonomy'  =>'product_cat'
                        );
                        $categories = get_categories( $args );
                        foreach ( $categories as $category ) { ?>
                        <li><a href="<?php echo get_term_link($category->slug, 'product_cat');?>">	<?php echo $category->name ; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>

            </div>

            <?php $images = get_field('image');?>

            <div class="banner-menu  col-xl-10">
                <!-- menu main -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo($images['0']['url']) ?>" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo($images['1']['url']) ?>" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo($images['2']['url']) ?>" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                <!-- end slider -->
            </div>
        </div>
    </div>
    <!-- end banner-menu-sidebar -->


    <!-- product -->


    <section class="new-product container">
        <div class="normal-title-product">
            <h4>Sản phẩm nổi bật</h4>
        </div>

               
        <div class="row">
        <?php
                $tax_query[] = array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                    'operator' => 'IN',
                );
            ?>
            <?php $args = array( 'post_type' => 'product','posts_per_page' => 10,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="col-xl-3 col-sm-4 col-6 box-product">
                     <?php get_template_part('content/item_product') ?>
                </div>  
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>

    <!-- product -->
    <!-- banner PR -->
    <section class="banner-pr container">
        <div class="row">
            <div class="pr-item col-xs-12 col-sm-3 col-md-3 ">
                <div class="border-rights">
                    <img src="<?php  bloginfo('template_directory');?>/img/shield.png" alt="">
                    <p>100% Secure Payments</p>
                </div>
            </div>
            <div class="pr-item col-xs-12 col-sm-3 col-md-3 ">
                <div class="border-rights"> <img src="<?php  bloginfo('template_directory');?>/img/piggybank.png" alt="">
                    <p>Money Back Guarantee</p>
                </div>

            </div>
            <div class="pr-item col-xs-12 col-sm-3 col-md-3 ">
                <div class="border-rights"> <img src="<?php  bloginfo('template_directory');?>/img/giftbox.png" alt="">
                    <p>Special Gift Cards</p>
                </div>


            </div>
            <div class="pr-item col-xs-12 col-sm-3 col-md-3 ">

                <img src="<?php  bloginfo('template_directory');?>/img/delivery-truck.png" alt="">
                <p>Worldwide Shipping</p>
            </div>
        </div>
    </section>

    <!--end banner PR  -->

    <!-- Product Xiaomi -->

    <section class="container">
        <div class="row">
            <div class="product-1 col-6">
            <?php $cat=get_term_by('id',18,'product_cat') ;?>
                <h4 class="title-section"><a href="<?php echo get_term_link($cat->slug,'product_cat') ?>"><?php echo $cat->name?></a></h4>
                <div class="product-banner-1 ">
                    <img src="<?php  bloginfo('template_directory');?>/img/mi11banner.jpg" alt="">
                    <div class="product-content">
                        <p>Giảm giá sốc 20%</p>
                        <h3>Xiaomi 11 Ultra</h3>
                        <a href="">Shop now <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="product-detail row">
         
            <?php   
               
                $args = array( 
                'post_type' => 'product',
                'posts_per_page' => 4,
                'product_cat'=> $cat->slug,
                ); ?>

            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="col-12 col-sm-12 col-md-6  box-product">
                     <?php get_template_part('content/item_product') ?>
                </div>  
            <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="product-1 col-6">
            <?php $cat=get_term_by('id',20,'product_cat') ;?>
                <h4 class="title-section"><a href="<?php echo get_term_link($cat->slug,'product_cat') ?>"><?php echo $cat->name?></a></h4>
                <div class="product-banner-1 ">
                    <img src="<?php  bloginfo('template_directory');?>/img/mi11banner.jpg" alt="">
                    <div class="product-content">
                        <p>Giảm giá sốc 20%</p>
                        <h3>Xiaomi 11 Ultra</h3>
                        <a href="">Shop now <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="product-detail row">
                <?php   
               
                $args = array( 
                'post_type' => 'product',
                'posts_per_page' => 4,
                'product_cat'=> $cat->slug,
                ); ?>

            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="col-12 col-sm-12 col-md-6  box-product">
                     <?php get_template_part('content/item_product') ?>
                </div>  
            <?php endwhile; wp_reset_postdata(); ?>
                
               
                </div>

            </div>
        </div>
    </section>

    <!-- End Product Xiaomi -->
    <!-- banner bottom -->
    <div class="container-fluids">
        <div class="banner-image">
            <img src="<?php  bloginfo('template_directory');?>/img/completion.png" alt="">

        </div>
        <!-- banner bottom -->

        <!-- lates new -->

        <section class="container mb-5">
           <h4 class="title-section">
            <a href="<?php echo get_category_link($category_id=93); ?>"> 
            <?php echo get_cat_name( $category_id = 93 );?>
           </a></h4>
            </h4>
            <div class="row">
       

            <?php $args = array( 
            'post_status'=>'publish',
            'post_type' => 'post',
            'posts_per_page' => 3,
            'cat'=>93); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="latest">
                        <div class="latest-img">
                        <a href="<?php the_permalink(); ?>">
                 <?php  the_post_thumbnail('full'); ?>
             </a>
                            <div class="meta">
                                <div class="meta-calendar"><i class="fas fa-calendar-alt"></i><?php echo get_the_date('d - m -Y'); ?></div>
                                <div class="meta-author"><i class="fas fa-user-tie"></i><?php echo get_the_author( ) ?></div>
                            </div>
                        </div>
                        <div class="latest-content">
                            <a href="<?php the_permalink(  ) ?>" class="latest-heading"><?php the_title(); ?></a>
                            <p class="latest-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(  ) ?>" class="latest-btn">Read More</a>
                        </div>
                    </div>

                </div>
            <?php endwhile; wp_reset_postdata(); ?>




            </div>

        </section>

      


        <!-- end lates new -->
        <?php get_footer( );?>
