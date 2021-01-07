<?php

class about_custom_widget extends WP_Widget{
	public function __construct(){
		parent:: __construct('about_custom_widget','Softall About Widget', array(
			'description' => 'Include your about widget.'
		));
	}
	public function widget($args, $instance){ ?>
		<?php echo $args['before_widget']; 
		 echo $args['before_title'].$instance['title'].$args['after_title']; ?>
		    <p> <?php echo $instance['description']; ?></p>
		<?php echo $args['after_widget']; 
		}
		 public function form($three){ ?>

			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
				<input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" class="widefat" value="<?php echo $three['title']; ?>">
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('description'); ?>">Description: </label>
				<input type="text" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>" value="<?php echo $three['description']; ?>" class="widefat">
			</p>

	<?php	}


}

function about_widget_register(){
	register_widget('about_custom_widget');
}
add_action('widgets_init','about_widget_register');

