<?php


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
