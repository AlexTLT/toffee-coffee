<?php

// Link the shortcode php to stylesheet
function my_plugin_enqueue_scripts() {
	wp_enqueue_style('my-shortcode',plugins_url('my-plugin/css/style.css')); 
}
add_action( 'wp_enqueue_scripts', 'my_plugin_enqueue_scripts' );


// Add Color to the font 

function text_color( $atts , $content=null ) {
	extract( shortcode_atts(
		array('color'=>'black',
			), $atts )
	);
	return '<div class="section '.$color.'">'.$content.'</div>';

}
add_shortcode( 'text_color', 'text_color' );


//calling my custom postype function
add_shortcode('tc_shortcode', function(){
  $loop = new WP_Query(
    array(
      'post-type' => 'reviews',
      'orderby' => 'title'
      )
  );

  if ($loop-> have_post() ) {
    $output = '<ul class="reviews_list">';

      while ($loop-> have_post() ) {
        $loop-> the_post();
        $meta = get_post_meta(get_the_id(), '');
        print_r($meta);


        $output .='
          <li>
              <a href="' . get_permalink() .'">
                ' .get_the_title() . '
              </a>
              <div>' .get_the_excerpt() . ' </div>
          </li>
        ';
      }
  }

  return $output;
});
