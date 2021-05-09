<?php global $product; ?>
<div class="item-product">
    <div class="img-product">
    <a href="<?php the_permalink(); ?>">
        <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array( 'class' =>'thumnail') ); ?>
    </a>
        <div class="overlay-product">
            <div class="overlay-chil">
                <a href="?add-to-cart=<?php the_ID(); ?>" class="add-to-cart"><i class="fas fa-cart-plus"></i></a>
                <a href="<?php the_permalink(); ?>" class="like-product"><i class="fas fa-heart"></i></a>
            </div>
        </div>
        <?php if($product->is_on_sale()){ ?>
        <span class="sell"><?php echo percentSale($product->get_regular_price(),$product->get_sale_price()) ?>%</span>
        <?php }?>
    </div>

    <div class="title-price-product">
        <a href="<?php the_permalink(); ?>"  class="title-product"><?php echo the_title()?></a>
        <a href="" class="price-product"><?php echo $product->get_price_html()?></a>
        <!-- <a href="" class="price-sell-product">17.000.000 Đ</a> -->
        <a href="<?php the_permalink(); ?>" class="price-detail">Xem Chi Tiết</a>
    </div>
    

</div>
