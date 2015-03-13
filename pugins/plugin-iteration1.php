<?php
/*
Plugin Name: Demo Plugin - Iteration 1
Plugin URI: http://www.tasteintown.com
Description: This is a my First plugin, Check it out and let me know if it works.
Version: 1.0
Author: Amit Redkar
Author URI: http://www.tasteintown.com
License: GPLv2 or later.
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
	?>
	<div style="width:300px; margin:0 auto 20px;">
      <div style="text-align:center;padding:20px 0;"> 
  		<input alt="#TB_inline?height=150&amp;width=300&amp;inlineId=examplePopup1" title="Hello Mr. Shyam" class="thickbox" type="button" value="Red"  style="background-color:red;"/>
   		<div id="examplePopup1" style="display:none">
     	<div style="color:red;">This is your red box</div>
        <div>Please let me know if this is not what you had asked me to create.</div>
        <div>-Amit Redkar</div>
      </div>
   </div>
   <div style="width:300px; margin:0 auto 20px;">
      <div style="text-align:center;padding:20px 0;"> 
  		<input alt="#TB_inline?height=150&amp;width=300&amp;inlineId=examplePopup2" title="Hello Mr. Shyam" class="thickbox" type="button" value="Green" style="background-color:green;"/>
   		<div id="examplePopup2" style="display:none">
     	<div style="color:green;">This is your Green box</div>
        <div>Please let me know if this is not what you had asked me to create.</div>
        <div>-Amit Redkar</div>
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
})
?>
