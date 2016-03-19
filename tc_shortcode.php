<?php


//calling my custom postype function
add_shortcode('tc_custom_post_types', function(){
  $loop = new WP_Query(
    $array(
      'post-type' => 'reviews',
      'orderby' => 'title'
      )
  );

  if ($loop-> have_post() ) {
    $output = '<ul class="tc_custom_post_types">';

      while ($loop-> have_post() ) {
        $loop-> the_post();
        $meta = get_post_meta(get_the_id());
        print_r($meta);
      }
  }

  return $output;

});
