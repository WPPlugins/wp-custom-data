<?php
/*
	Plugin Name: WP Custom Data
	Plugin Script: wp-custom-data-widget.php
	Description: Through this Widget you can easily use your custom data with every theme
	Version: 1.1
	License: GPL 2.0
	Author: ACE Innovation
	Plugin URI: http://www.aceinnova.com/
	Author URI: http://www.aceinnova.com/
*/

class wp_custom_data_widget extends WP_Widget
{
    public function __construct()
    {
    	parent::__construct( 'wp-custom-data', 'WP Custom Data', array('description' => 'Widget to use your Custom Data'));
    }
 
    public function form( $instance )
    {
    	$defaults = array(
            'row0' => NULL,
            'row1' => NULL,
            'row2' => NULL,
            'row3' => NULL,
            'row4' => NULL,
            'row5' => NULL,
            'row6' => NULL,
            'row7' => NULL,
            'row8' => NULL,
            'row9' => NULL
        );
        $instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
        <p>
            <div style="font-weight:bold; padding:4px;">Customize the Rows you Want to Use</div> 
        </p>
 		<p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Row 0: ', 'ACE')?></label>
            <input type="text" id="<?php echo $this->get_field_id( 'row0' ); ?>" name="<?php echo $this->get_field_name( 'row0' ); ?>" value="<?php echo $instance['row0']; ?>" />
 
        </p>
        <p>
           <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Row 1: ', 'ACE')?></label>
           <input type="text" id="<?php echo $this->get_field_id( 'row1' ); ?>" name="<?php echo $this->get_field_name( 'row1' ); ?>" value="<?php echo $instance['row1']; ?>" />
 
       </p>
       <p>
           <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Row 2: ', 'ACE')?></label>
           <input type="text" id="<?php echo $this->get_field_id( 'row2' ); ?>" name="<?php echo $this->get_field_name( 'row2' ); ?>" value="<?php echo $instance['row2']; ?>" />
 
       </p>
       <p>
           <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Row 3: ', 'ACE')?></label>
           <input type="text" id="<?php echo $this->get_field_id( 'row3' ); ?>" name="<?php echo $this->get_field_name( 'row3' ); ?>" value="<?php echo $instance['row3']; ?>" />
 
       </p>
       <p>
           <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Row 4: ', 'ACE')?></label>
           <input type="text" id="<?php echo $this->get_field_id( 'row4' ); ?>" name="<?php echo $this->get_field_name( 'row4' ); ?>" value="<?php echo $instance['row4']; ?>" />
 
       </p>
       <p>
           <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Row 5: ', 'ACE')?></label>
           <input type="text" id="<?php echo $this->get_field_id( 'row5' ); ?>" name="<?php echo $this->get_field_name( 'row5' ); ?>" value="<?php echo $instance['row5']; ?>" />
 
       </p>
       <p>
           <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Row 6: ', 'ACE')?></label>
           <input type="text" id="<?php echo $this->get_field_id( 'row6' ); ?>" name="<?php echo $this->get_field_name( 'row6' ); ?>" value="<?php echo $instance['row6']; ?>" />
 
       </p>
       <p>
           <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Row 7: ', 'ACE')?></label>
           <input type="text" id="<?php echo $this->get_field_id( 'row7' ); ?>" name="<?php echo $this->get_field_name( 'row7' ); ?>" value="<?php echo $instance['row7']; ?>" />
 
       </p>
       <p>
           <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Row 8: ', 'ACE')?></label>
           <input type="text" id="<?php echo $this->get_field_id( 'row8' ); ?>" name="<?php echo $this->get_field_name( 'row8' ); ?>" value="<?php echo $instance['row8']; ?>" />
 
       </p>
       <p>
           <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Row 9: ', 'ACE')?></label>
           <input type="text" id="<?php echo $this->get_field_id( 'row9' ); ?>" name="<?php echo $this->get_field_name( 'row9' ); ?>" value="<?php echo $instance['row9']; ?>" />
 
       </p>
       <p>
       		<div style="padding:4px;">You can use the custom data in your theme with this code: <div style="font-style: italic;">$list = get_option('wp-custom-data'); <br />echo $list['rowX'];</div> where X can be 0...9</div> 
       </p>
       
 
        <?php
    }
 
    public function widget($args, $instance)
    {
    	/*	Nothing do to */
 
    }
 
    public function update($new_instance, $old_instance)
    {
    	$instance = $old_instance;

        $instance['row0'] = strip_tags( $new_instance['row0'] );
        $instance['row1'] = strip_tags( $new_instance['row1'] );
        $instance['row2'] = strip_tags( $new_instance['row2'] );
        $instance['row3'] = strip_tags( $new_instance['row3'] );
        $instance['row4'] = strip_tags( $new_instance['row4'] );
        $instance['row5'] = strip_tags( $new_instance['row5'] );
        $instance['row6'] = strip_tags( $new_instance['row6'] );
        $instance['row7'] = strip_tags( $new_instance['row7'] );
        $instance['row8'] = strip_tags( $new_instance['row8'] );
        $instance['row9'] = strip_tags( $new_instance['row9'] );
        
        if(add_option('wp-custom-data') == false)
        {
        	update_option('wp-custom-data', $instance,'', no);
        }
 
        return $instance;
    }
}

function wp_custom_data_register_widgets()
{
    register_widget( 'wp_custom_data_widget' );
}

add_action( 'widgets_init', 'wp_custom_data_register_widgets' );
?>