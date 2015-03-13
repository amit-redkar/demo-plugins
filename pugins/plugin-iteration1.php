<?php
/*
Plugin Name: Demo Plugin - Iteration 1
Plugin URI: http://www.tasteintown.com
Description: This is a basic plugin with two buttons, one red and the other green. Clicking on the individual buttons will open a pop up box with the respective color values.
Version: 1.0
Author: Amit Redkar
Author URI: http://www.tasteintown.com
License: none.
*/
function ch2pit_queue_stylesheet() {
	wp_enqueue_style( 'privateshortcodestyle',
	plugins_url( 'mycss.css', __FILE__ ) );
	}
class am_my_wid extends wp_widget
{
	function __construct()
	{
		parent::__construct(false,$name = __('Am My Wid'));
	}
	function widget($args, $instance)
	{
	?>
    <div class="plug_title">Demo Plugin - Iteration 1</div>
    <div class="pop_container">
        <div class="pop_button">
          <div class="pop_content"> 
            <input alt="#TB_inline?height=150&amp;width=300&amp;inlineId=examplePopup1" title="Pop up box" class="thickbox color_button1" type="button" value="Red"/>
            <div id="examplePopup1">
              <div class="red_but">This is a Red button</div>
            </div>
         </div>
       </div>
       <div class="pop_button">
          <div class="pop_content"> 
            <input alt="#TB_inline?height=150&amp;width=300&amp;inlineId=examplePopup2" title="Pop up box" class="thickbox color_button2" type="button" value="Green"/>
            <div id="examplePopup2">
               <div class="gre_but">This is a Green Button</div>
            </div>
          </div>
       </div>
    </div>
	<?php
	}
}
add_action('widgets_init', function()
{
	register_widget('am_my_wid');
	add_thickbox();
	
});
add_action( 'wp_enqueue_scripts', 'ch2pit_queue_stylesheet' );
?>
