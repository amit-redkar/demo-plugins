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

class am_my_wid extends wp_widget
{
	function __construct()
	{
		parent::__construct(false,$name = __('Am My Wid'));
	}
	/*function form()
	{
	}
	function update()
	{
	}*/
	function widget($args, $instance)
	{
		wp_enqueue_script( 'jquery' );
	wp_register_style( 'prefix-style', plugins_url('mycss.css', __FILE__) );
	wp_enqueue_style( 'prefix-style' );
	?>
    <div style="text-align:center;">Demo Plugin - Iteration 1</div>
    <div style="width:240px;margin:auto;">
        <div style="width:120px; margin:0 auto 20px;float:left;">
          <div style="text-align:center;padding:20px 0;"> 
            <input alt="#TB_inline?height=150&amp;width=300&amp;inlineId=examplePopup1" title="Pop up box" class="thickbox" type="button" value="Red"  style="background-color:red; padding:0;width:90px;height:25px;"/>
            <div id="examplePopup1" style="display:none">
              <div style="color:red;">This is a Red button</div>
            </div>
         </div>
       </div>
       <div style="width:120px; margin:0 auto 20px;float:left;">
          <div style="text-align:center;padding:20px 0;"> 
            <input alt="#TB_inline?height=150&amp;width=300&amp;inlineId=examplePopup2" title="Pop up box" class="thickbox" type="button" value="Green" style="background-color:green;padding:0;width:90px;height:25px;"/>
            <div id="examplePopup2" style="display:none">
               <div style="color:green;">This is a Green Button</div>
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
function my_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_register_style( 'prefix-style', plugins_url('mycss.css', __FILE__) );
	wp_enqueue_style( 'prefix-style' );
}
add_action('wp_enqueue_scripts','my_scripts');
?>
