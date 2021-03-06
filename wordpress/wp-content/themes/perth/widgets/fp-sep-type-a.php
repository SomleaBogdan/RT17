<?php

class Perth_Separator_Type_A extends WP_Widget {

    function perth_separator_type_a() {
		$widget_ops = array('classname' => 'perth_sep_a', 'description' => __( 'Row separator', 'perth') );
        parent::__construct(false, $name = __('Perth FP: Separator Type A', 'perth'), $widget_ops);
		$this->alt_option_name = 'perth_sep_a';
		
    }
	
	function form($instance) {
		$sep_fill 	= isset( $instance['sep_fill'] ) ? esc_html( $instance['sep_fill'] ) : '';
	?>
	
	<p><em><?php _e('This is a slanted row separator. It blends with the row directly <strong>below</strong> it. Add the color from the row <strong>above</strong> it to achieve the slanted effect. ', 'perth'); ?></em></p>

	<p><label for="<?php echo $this->get_field_id('sep_fill'); ?>"><?php _e('Fill color for the separator', 'perth'); ?></label></p>
	<p><input class="widefat" id="<?php echo $this->get_field_id('sep_fill'); ?>" name="<?php echo $this->get_field_name('sep_fill'); ?>" type="text" value="<?php echo $sep_fill; ?>" /></p>

	<?php
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['sep_fill'] = strip_tags($new_instance['sep_fill']);

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['perth_action']) )
			delete_option('perth_action');		  
		  
		return $instance;
	}
	
	function widget($args, $instance) {
		$cache = array();
		if ( ! $this->is_preview() ) {
			$cache = wp_cache_get( 'perth_action', 'widget' );
		}

		if ( ! is_array( $cache ) ) {
			$cache = array();
		}

		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();
		extract($args);

		$sep_fill = isset( $instance['sep_fill'] ) ? esc_html($instance['sep_fill']) : '';
		?>

		<div class="svg-container row-svg row-separator" style="fill:<?php echo $sep_fill; ?>">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
				<path d="M0 0 L100 0 L100 2 L0 100 Z"></path>
			</svg>
		</div>


	<?php
		if ( ! $this->is_preview() ) {
			$cache[ $args['widget_id'] ] = ob_get_flush();
			wp_cache_set( 'perth_action', $cache, 'widget' );
		} else {
			ob_end_flush();
		}
	}
	
}