   
<?php 

function theme_support(){
    add_theme_support( 'title-tag');
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');
    
}
add_action( 'after_setup_theme','theme_support');

function create_menus(){
    $locations = array(
        'menu-main'=>"Desktop Primary Menu Main",
        'menu-top'=>"Desktop Primary Menu Top"
    );
    register_nav_menus($locations);
}
add_action('init','create_menus');







// load style
    function load_stylesheets(){
        wp_register_style( 'styles', get_template_directory_uri() . '/assets/css/main.css', array(), 1,'all');
        wp_enqueue_style('styles');

        wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1,'all');
        wp_enqueue_style('bootstrap');

        wp_register_style( 'fontfamily', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), 1,'all');
        wp_enqueue_style('fontfamily');

        wp_register_style( 'fontfamily4', "https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", array(), 1,'all');
        wp_enqueue_style('fontfamily4');

        wp_register_style( 'awe', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), 1,'all');
        wp_enqueue_style('awe');

        wp_register_style( 'fontfamily2', "https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap", 1,'all');
        wp_enqueue_style('fontfamily2');

        wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 1,1,1);
        wp_enqueue_script('jquery');

        wp_register_style( 'fontfamily3',   "https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap", 1,'all');
        wp_enqueue_style('fontfamily3');

    }

    add_action('wp_enqueue_scripts','load_stylesheets');

       
//    <!-- load script -->
   function addjs(){

       wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1,1,1);
        wp_enqueue_script('bootstrap');

        wp_register_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), 1,1,1);
        wp_enqueue_script('popper');

        wp_register_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), 1,1,1);
        wp_enqueue_script('custom');
   }
   add_action('wp_enqueue_scripts','addjs');


   


   function widgets(){

       register_sidebar( 
           array(
               'before_title'=>'',
               'after_title'=>'',
               'before_widget'=>'',
               'after_widget'=>'',
           ),
           array(
               'name'=>'Sidebar Area',
               'id'=>'siderbar-1',
               'description'=>'Sidebar Widget Area',
           )

           );
   }

   add_action( 'widgets_init','widgets' );


   
function percentSale($price,$price_sale){
    $sale=($price_sale*100)/$price;
    $percent=100-$sale;
    return number_format($percent,1);
}
