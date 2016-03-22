  _______     __  __                       __  __                                               _             _       
 |__   __|   / _|/ _|                     / _|/ _|                                             | |           (_)      
    | | ___ | |_| |_ ___  ___    ___ ___ | |_| |_ ___  ___   _ __ ___   ___ _ __  _   _   _ __ | |_   _  __ _ _ _ __  
    | |/ _ \|  _|  _/ _ \/ _ \  / __/ _ \|  _|  _/ _ \/ _ \ | '_ ` _ \ / _ \ '_ \| | | | | '_ \| | | | |/ _` | | '_ \ 
    | | (_) | | | ||  __/  __/ | (_| (_) | | | ||  __/  __/ | | | | | |  __/ | | | |_| | | |_) | | |_| | (_| | | | | |
    |_|\___/|_| |_| \___|\___|  \___\___/|_| |_| \___|\___| |_| |_| |_|\___|_| |_|\__,_| | .__/|_|\__,_|\__, |_|_| |_|
                                                                                         | |             __/ |        
                                                                                         |_|            |___/         


/*
 * Plugin Name: toffee-coffee-plugin
 * Plugin URI: https://phoenix.sheridanc.on.ca/~ccit3470/
 * Description: Assignment 3: Wordpress plugin - menu custom type post, menu widget and shortcode that displays menu items
 * Author: Alex Tsai, Chungyu Lay, Keizac Lee
 * Version: 1.0.1
 * Tested on WordPress version 4.4.2
 */


Hi welcome to our plugin! This is an instructions file to show you how to use the plugin. 

1) Activate the plugin by going to your WP admin page under plugin. There you should see the toffee-coffee plugin. Click activate.

2) This plugin allows you to sort all menu items under a custom post type. This means new additions to the menu will be a lot simpler. 
   Simply click Menu Items and add your new menu items. We've activated tags and categories for this custom post type which work well with taxonomies.
   Just add your menu items like your normally would do as a post, except now they will be neatly organized under a Menu which can be easily
   displayed using a widget or shortcode.

3) Anytime in a post you want to show your new menu items you can use a shortcode. Just type [tc_shortcode] to display the menu items in any post
   or page. If you want to display a button which links to your menu, simply type [menubutton]. 
	
	To change the color of [menubutton] or edit the text in the menu button open the shortcode.php file and find the following line:

	'link'=>'http://google.com', // This attribute changes the link	
	'button_text'=>'Recent Menu Items', // This attribute changes text inside the button
	'button_color' => '#e6e6e6', // This attribute changes button color
	'text_color' => '#000', // This attribute changes text color

Simply replace the values inside the '' to reflect the changes you want and save and refresh. For example if you want to change the button_text:
	
	'button_text'=>'Recent Menu Items', 
	'button_text'=>'Specials of the Day',  

And your button will now display 'Specials of the Day' 

If you find the colors don't match your theme, you can pick your own color here: http://htmlcolorcodes.com/

4) To activate the menu widget, go to widgets and drag the "Recent additions to Menu" to your desired sidebar. 
   New menu items will now show up on the widget. 
	
	If you want to change the title of the widget, you can open the tc_widget.php file and find the following line: 

	$title = "New additions to menu";  
	you can change the title to Special of the day for example: 
	$title = "Special of the Day";  

And your button will now display 'Specials of the Day' 

5) To uninstall the plugin, go back to your WP admin page. Under plugins, deactive the plugin and then delete the plugin. 
   Thanks for using our plugin!

Hope this readme file was helpful in guiding you how to use our widget!
	

/*
Changelog
 */

See Github for more details. 
https://github.com/AlexTLT/toffee-coffee

1.0.0 - First Version - added custom post type
1.0.1 - Final Version added widget, shortcode and custom post type
