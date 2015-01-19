<?php
/**
 * @package Slideshow
 * @version 0.1
 */
/*
Plugin Name: Slideshow To A Post
Plugin URI: http://vk.com/zhekaognemet
Description: This plugin creates a possibility to attach a slideshow to a post.
Author: Evgeny Pletnev
Version: 0.1
Author URI: http://vk.com/zhekaognemet
*/





class Slide {
	public $slideURL;
	public $title;
	public $text;
	public function __construct($a, $b, $c) {
		$this->slideURL = $a;
		$this->title    = $b;
		$this->text     = $c;
	}
}


function wp_gear_manager_admin_scripts() {
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
wp_enqueue_script('jquery');
}

function wp_gear_manager_admin_styles() {
wp_enqueue_style('thickbox');
}


add_action('admin_print_scripts', 'wp_gear_manager_admin_scripts');
add_action('admin_print_styles', 'wp_gear_manager_admin_styles');


function slideshowMetaBox() {
		add_meta_box(
			'slideshowId',
			'Slideshow',
			'slideshowMetaBoxCallback',
			'post'
		);
}

function slideshowMetaBoxCallback() {
	// todo:
		// $SLIDESCOUNT has to be a variable, and it has to change dynamicly through jQuery 
		$SLIDESCOUNT = 1;
	$slideshow = array();
	for ($i=0; $i < $SLIDESCOUNT; $i++) { 
		$path = plugin_dir_url(__FILE__) . "default.png";
		$singleSlide = new Slide($path, 'nigger', 'nigger');
		array_push($slideshow, $singleSlide);
	}
?> 
<script language="JavaScript">
	jQuery(document).ready(function() {
	jQuery('#upload_image_button').click(function() {
	formfield = jQuery('#upload_image').attr('name');
	tb_show('', 'media-upload.php?type=image&TB_iframe=true');
	return false;
	});

	window.send_to_editor = function(html) {
	imgurl = jQuery('img',html).attr('src');
	jQuery('#upload_image').val(imgurl);
	tb_remove();
	}

	});
</script>
<?php
echo '<p>Use the following shortcode to embed the slideshow: [slideshow]. </p>';

	$num = 1;
	foreach ($slideshow as $slide) { 
		echo '<div style="border:1px solid grey; ">';
		?>

		<img src='<?php echo $slide->slideURL; ?>' width='360' height='240' alt='Slide #<?php echo $slideIndex + 1; ?>'/>
		<i>Slide #<?php echo $num++;?></i>
		<input id="upload_image" class="hidden" type="text" name="upload_image" />
		<input id="upload_image_button" class="button" type="button" value="Upload Image" />

		<?php 
		echo '</div>';
	}


echo '<button class="button" type="button">Add Slide</button>';

}

function insertTheSlideShow() {
	
}

add_action( 'edit_form_after_editor', 'slideshowMetaBox' );
add_shortcode( 'slideshow', 'insertTheSlideShow' );

?>
