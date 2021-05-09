

<div class="container">
    <header class="content-header">
       <h1><?php the_title() ?></h1> 
        <div class="meta mb-3"> 
            <span class="date">
                <?php the_date(  ); ?>
            </span> 
            <?php the_tags('<span class="tag">
                <i class="fa fa-tag"></i>','</span><span class="tag">
                <i class="fa fa-tag"></i>','</span>' ) ?>
            
            <span class="comment">
                <a href="#comment">
                    <i class="fa fa-comment"><?php comments_number(); ?></i>
                </a>
            </span>
        </div>
    </header>

    <?php the_content( ) ?>
    <?php comments_template() ?>

</div>