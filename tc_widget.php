<?php

//Constructing the menu widget
//https://codex.wordpress.org/Widgets_API 
//https://codex.wordpress.org/Widgets_API#Example

class tc_menu_widget extends WP_Widget{
	public function __construct( ){
		parent::__construct("tc_menu_widget", //Base ID
				__("Recent additions to Menu"), //Name
			array("description" => __("New additions to the menu.")) //Args
			);
	}

// Displaying the widget

	public function widget($args, $instance){
		$title = "Recent menu items"; //Variables
		print($args["before_widget"]);
		if(!empty($title)){
			print($args["before_title"] . $title . $args["after_title"]);
		}
?>
		<ul>

<?php
//retriving the custom post type https://codex.wordpress.org/Class_Reference/WP_Query
$wp_query = new WP_Query(array("post_type" => "menu", "posts_per_page" => 5)); //custom post type
//WP loop to display menu items
	if($wp_query->have_posts( ))
	{
		while($wp_query->have_posts( ))
			{
			$wp_query->the_post( );
?>
	<li>
		<a href="<?php the_permalink( ) ?>"><?php the_title( ) ?></a>
	</li>
<?php
		}
	}
?>
	</ul>
<?php
		print($args["after_widget"]);
	}
}

//registering the widget
function register_tc_widget() {
   register_widget('tc_menu_widget');
}
add_action( 'widgets_init', 'register_tc_widget' );





