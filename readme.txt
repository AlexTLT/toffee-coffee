  _______     __  __                       __  __                                               _             _       
 |__   __|   / _|/ _|                     / _|/ _|                                             | |           (_)      
    | | ___ | |_| |_ ___  ___    ___ ___ | |_| |_ ___  ___   _ __ ___   ___ _ __  _   _   _ __ | |_   _  __ _ _ _ __  
    | |/ _ \|  _|  _/ _ \/ _ \  / __/ _ \|  _|  _/ _ \/ _ \ | '_ ` _ \ / _ \ '_ \| | | | | '_ \| | | | |/ _` | | '_ \ 
    | | (_) | | | ||  __/  __/ | (_| (_) | | | ||  __/  __/ | | | | | |  __/ | | | |_| | | |_) | | |_| | (_| | | | | |
    |_|\___/|_| |_| \___|\___|  \___\___/|_| |_| \___|\___| |_| |_| |_|\___|_| |_|\__,_| | .__/|_|\__,_|\__, |_|_| |_|
                                                                                         | |             __/ |        
                                                                                         |_|            |___/         

Hi welcome to our plugin! This is an instructions file to show you how to use the plugin. 

1) Activate the plugin by going to your WP admin page under plugin. There you should see the toffee-coffee plugin. Click activate.

2) This plugin allows you to sort all menu items under a custom post type. This means new additions to the menu will be a lot simpler. 
   Simply click Menu Items and add your new menu items. We've activated tags and categories for this custom post type which work well with taxonomies.
   Just add your menu items like your normally would do as a post, except now they will be neatly organized under a Menu which can be easily
   displayed using a widget or shortcode.

3) Anytime in a post you want to show your new menu items you can use a shortcode. Just type [tc_shortcode] to display the menu items in any post
   or page. If you want to display a button which links to your menu, simply type [menubutton]. 
	
	To change the color of [menubutton] or edit the text in the menu button open the shortcode.php file and find the following variables. 

	'link'=>'http://google.com', // This attribute changes the link	
	'button_text'=>'Recent Menu Items', // This attribute changes text inside the button
	'button_color' => '#e6e6e6', // This attribute changes button color
	'text_color' => '#000', // This attribute changes text color

If you find the colors don't match your theme, you can pick your own color here: http://htmlcolorcodes.com/

4) To activate the menu widget, go to widgets and drag the "Recent additions to Menu" to your desired sidebar. 
   New menu items will now show up on the widget. 
	
	If you want to change the title of the widget, you can open the tc_widget.php file. 
	$title = "New additions to menu"; //Variables - change the title here 
	you can change the title to Special of the day for example: 
	$title = "Special of the Day"; //Variables - change the title here

5) To uninstall the plugin, go back to your WP admin page. Under plugins, deactive the plugin and then delete the plugin. 
   Thanks for using our plugin!

Hope this readme file was helpful in guiding you how to use our widget!
	

