<?php


function toffee_coffee_enqueue_scripts() {
	wp_enqueue_style('shortcode',plugins_url('toffee-coffee/css/style.css'));
}
add_action( 'wp_enqueue_scripts', 'toffee_coffee_enqueue_scripts' );


// Add Color to the font

function text_color( $atts , $content=null ) {
	extract( shortcode_atts(
		array('color'=>'black',
			), $atts )
	);
	return '<div class="section '.$color.'">'.$content.'</div>';

}
add_shortcode( 'text_color', 'text_color' );


// create a shortcode to display the custom post type 'menu'

add_shortcode( 'tc_shortcode', 'tc_shortcode' );
function tc_shortcode( $atts ) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'menu',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'title',
    ) );
    if ( $query->have_posts() ) { ?>
        <ul class="menu-listing">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }


}

// Creating a button to link to the menu
function menubutton( $atts, $content = null ) {
        extract( shortcode_atts(
            array(
                'link'=>'http://google.com', // This variable is the link
                'button_text'=>'New Menu Items', // This varible changes text inside the button
                'button_color' => '#e6e6e6', // This varible changes button color
                'text_color' => '#000', // This variable changes text color
            ), $atts ));
        
        return $content.'<form action= "'.$link.'"> <input type = "submit" class="menubutton" value="'.$button_text.'"style= "background-color:'.$button_color.'; color:'.$text_color.'"> </form>';
        }

add_shortcode('menubutton', 'menubutton');

add_shortcode('menubutton', 'menubutton');