<?php

/*
Plugin Name: Generator for HolidayCheck Widgets
Plugin URI: http://booking-calendar-plugin.com
Description: Generating HolidayCheck Widgets as WordPress Widgets.
Author: Advanced Booking Calendar
Version: 1.0
Author URI: http://booking-calendar-plugin.com
*/



class widgetsForHC extends WP_Widget {

// constructor
function widgetsForHC() {
	parent::__construct(false, $name = __('Generator for HolidayCheck Widgets', 'widgetsForHC') );
}

// widget form creation
function form($instance) {

// Check values
if( $instance) {
	$title = esc_attr($instance['title']);
	$hcId = esc_attr($instance['hcId']);
	$hcUrl = esc_attr($instance['hcUrl']);
	$hcLang = esc_attr($instance['hcLang']);
	$hcType = esc_attr($instance['hcType']);
	$hcSize = esc_attr($instance['hcSize']);
	$hcColour = esc_attr($instance['hcColour']);
	$hcReviews = esc_attr($instance['hcReviews']);
	$hcButton = esc_attr($instance['hcButton']);
	$hcError = esc_attr($instance['hcError']);
} else {
	// Initial values
	$title = '';
	$hcId = '';
	$hcUrl = '';
	$hcLang = 'en_US';
	$hcType = '1';
	$hcSize = 's';
	$hcColour = 'b';
	$hcReviews = '1';
	$hcButton = '1';
	$hcError = '0';
}

// Frontend output
?>
<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'widgetsForHC'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('hcUrl'); ?>"><?php _e('HolidayCheck-Url of your hotel: ', 'widgetsForHC');
if($hcError == '1'){ ?><span style="color:#ff1c00;"><?php _e('The URL is not working, something went wrong.', 'widgetsForHC');?></span><?php }?></label>
<input class="widefat" id="<?php echo $this->get_field_id('hcUrl'); ?>" name="<?php echo $this->get_field_name('hcUrl'); ?>" type="text" value="<?php echo $hcUrl; ?>" />
</p>
<p>
<?php _e('Language:', 'widgetsForHC');?><br/>
<input class="radio" id="<?php echo $this->get_field_id('hcLang'); ?>-de_DE" name="<?php echo $this->get_field_name('hcLang'); ?>" type="radio" value="de_DE" <?php if($hcLang=='de_DE'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcLang'); ?>-de_DE">DE</label> |
<input class="radio" id="<?php echo $this->get_field_id('hcLang'); ?>-de_AT" name="<?php echo $this->get_field_name('hcLang'); ?>" type="radio" value="de_AT" <?php if($hcLang=='de_AT'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcLang'); ?>-de_AT">AT</label> |
<input class="radio" id="<?php echo $this->get_field_id('hcLang'); ?>-de_CH" name="<?php echo $this->get_field_name('hcLang'); ?>" type="radio" value="de_CH" <?php if($hcLang=='de_CH'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcLang'); ?>-de_CH">CH</label> |
<input class="radio" id="<?php echo $this->get_field_id('hcLang'); ?>-en_US" name="<?php echo $this->get_field_name('hcLang'); ?>" type="radio" value="en_US" <?php if($hcLang=='en_US'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcLang'); ?>-en_US">EN (US)</label> |
<input class="radio" id="<?php echo $this->get_field_id('hcLang'); ?>-fr_FR" name="<?php echo $this->get_field_name('hcLang'); ?>" type="radio" value="fr_FR" <?php if($hcLang=='fr_FR'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcLang'); ?>-fr_FR">FR</label> |
<input class="radio" id="<?php echo $this->get_field_id('hcLang'); ?>-it_IT" name="<?php echo $this->get_field_name('hcLang'); ?>" type="radio" value="it_IT" <?php if($hcLang=='it_IT'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcLang'); ?>-it_IT">IT</label> |
<input class="radio" id="<?php echo $this->get_field_id('hcLang'); ?>-es_ES" name="<?php echo $this->get_field_name('hcLang'); ?>" type="radio" value="es_ES" <?php if($hcLang=='es_ES'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcLang'); ?>-es_ES">ES</label> |
<input class="radio" id="<?php echo $this->get_field_id('hcLang'); ?>-pl_PL" name="<?php echo $this->get_field_name('hcLang'); ?>" type="radio" value="pl_PL" <?php if($hcLang=='pl_PL'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcLang'); ?>-pl_PL">PL</label>
</p>

<p>
<?php _e('Widget type:', 'widgetsForHC');?><br/>
<input class="radio" id="<?php echo $this->get_field_id('hcType'); ?>-1" name="<?php echo $this->get_field_name('hcType'); ?>" type="radio" value="1" <?php if($hcType=='1'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcType'); ?>-1"><?php _e('Recommendation rate', 'widgetsForHC');?></label><br/>
<input class="radio" id="<?php echo $this->get_field_id('hcType'); ?>-2" name="<?php echo $this->get_field_name('hcType'); ?>" type="radio" value="2" <?php if($hcType=='2'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcType'); ?>-2"><?php _e('Good review(s) with rating', 'widgetsForHC');?></label><br/>
<input class="radio" id="<?php echo $this->get_field_id('hcType'); ?>-0" name="<?php echo $this->get_field_name('hcType'); ?>" type="radio" value="0" <?php if($hcType=='0'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcType'); ?>-0"><?php _e('Good review(s) without rating', 'widgetsForHC');?></label>
</p>
<p>
<?php _e('Widget size:', 'widgetsForHC');?><br/>
<input class="radio" id="<?php echo $this->get_field_id('hcSize'); ?>-s" name="<?php echo $this->get_field_name('hcSize'); ?>" type="radio" value="s" <?php if($hcSize=='s'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcSize'); ?>-s"><?php _e('Small (150px wide)', 'widgetsForHC');?></label><br/>
<input class="radio" id="<?php echo $this->get_field_id('hcSize'); ?>-m" name="<?php echo $this->get_field_name('hcSize'); ?>" type="radio" value="m" <?php if($hcSize=='m'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcSize'); ?>-m"><?php _e('Medium (300px wide)', 'widgetsForHC');?></label><br/>
<input class="radio" id="<?php echo $this->get_field_id('hcSize'); ?>-b" name="<?php echo $this->get_field_name('hcSize'); ?>" type="radio" value="b" <?php if($hcSize=='b'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcSize'); ?>-b"><?php _e('Large (600px wide)', 'widgetsForHC');?></label>
</p>	
<?php _e('Number of reviews (not working on "small"):', 'widgetsForHC');?>&nbsp;
<select class="select"  id="<?php echo $this->get_field_id('hcReviews'); ?>" name="<?php echo $this->get_field_name('hcReviews'); ?>">
	<option <?php if($hcReviews=='1'){echo 'selected';}?>>1</option>
	<option <?php if($hcReviews=='3'){echo 'selected';}?>>3</option>
	<option <?php if($hcReviews=='5'){echo 'selected';}?>>5</option>
</select>
</p>
<p>
<?php _e('Colour theme:', 'widgetsForHC');?><br/>
<input class="radio" id="<?php echo $this->get_field_id('hcColour'); ?>-b" name="<?php echo $this->get_field_name('hcColour'); ?>" type="radio" value="b" <?php if($hcColour=='b'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcColour'); ?>-b"><?php _e('Blue', 'widgetsForHC');?></label><br/>
<input class="radio" id="<?php echo $this->get_field_id('hcColour'); ?>-g" name="<?php echo $this->get_field_name('hcColour'); ?>" type="radio" value="g" <?php if($hcColour=='g'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcColour'); ?>-g"><?php _e('Grey', 'widgetsForHC');?></label><br/>
<input class="radio" id="<?php echo $this->get_field_id('hcColour'); ?>-w" name="<?php echo $this->get_field_name('hcColour'); ?>" type="radio" value="w" <?php if($hcColour=='w'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcColour'); ?>-w"><?php _e('White', 'widgetsForHC');?></label>
</p>
<p>
<?php _e('Show "Review now"-button:', 'widgetsForHC');?><br/>
<input class="radio" id="<?php echo $this->get_field_id('hcButton'); ?>-1" name="<?php echo $this->get_field_name('hcButton'); ?>" type="radio" value="1" <?php if($hcButton=='1'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcButton'); ?>-1"><?php _e('Yes', 'widgetsForHC');?></label>&nbsp;
<input class="radio" id="<?php echo $this->get_field_id('hcButton'); ?>-0" name="<?php echo $this->get_field_name('hcButton'); ?>" type="radio" value="0" <?php if($hcButton=='0'){echo 'checked';}?>>
	<label for="<?php echo $this->get_field_id('hcButton'); ?>-0"><?php _e('No', 'widgetsForHC');?></label>
</p>		
<?php
}

// Update function for changes
function update($new_instance, $old_instance) {
	$instance = $old_instance;
	// Fields
	$instance['title'] = strip_tags($new_instance['title']);
	$instance['hcUrl'] = strip_tags($new_instance['hcUrl']);
	// Trying to get id by URL
	$tempId=getHcIdByUrl(strip_tags($new_instance['hcUrl']));
	if (ctype_digit($tempId) && $tempId >0){ // Check to see if URL worked
		$instance['hcId'] = $tempId;
		$instance['hcError'] = '0';
	} else {
		$instance['hcId'] = '0';
		$instance['hcError'] = '1'; // If URL is not working, hcError gets set to 1
	}	
	$instance['hcLang'] = strip_tags($new_instance['hcLang']);
	$instance['hcType'] = strip_tags($new_instance['hcType']);
	$instance['hcSize'] = strip_tags($new_instance['hcSize']);
	$instance['hcReviews'] = strip_tags($new_instance['hcReviews']);
	$instance['hcColour'] = strip_tags($new_instance['hcColour']);
	$instance['hcButton'] = strip_tags($new_instance['hcButton']);
	return $instance;
}

// Display widget
function widget($args, $instance) {
	extract( $args );

	// Widget options
	$title = apply_filters('widget_title', $instance['title']);
	$hcUrl = $instance['hcUrl'];
	$hcId = $instance['hcId'];
	$hcLang = $instance['hcLang'];
	$hcType= $instance['hcType'];
	$hcSize= $instance['hcSize'];
	$hcReviews= $instance['hcReviews'];
	$hcColour= $instance['hcColour'];
	$hcButton= $instance['hcButton'];
	$hcError= $instance['hcError'];
	echo $before_widget;

	// Display the widget
	echo '<div class="widget-text">';
	echo '<div class="widget-title">';

	// Check if title is set
	if ( $title ) {
		echo $before_title . $title . $after_title ;
	}
	echo '</div>';

	// Check if hcId is set && no error occurred
	echo '<div class="widget-textarea">';
	if( $hcId && $hcError == '0' ) {
		echo '<script src="https://www.holidaycheck.de/widgets?step=code&type=code&options=hotel-1-'.$hcId.'-'.$hcLang.'-'.$hcSize.'-'.$hcColour.'-'.$hcButton.'-'.$hcType.'-1-'.$hcReviews.'-0" type="text/javascript"></script>
			<div id="holidaycheck-widget-hotel-1-'.$hcId.'-'.$hcLang.'-'.$hcSize.'-'.$hcColour.'-'.$hcButton.'-'.$hcType.'-1-'.$hcReviews.'-0">
				<div id="holidaycheck_widget_placeholder-'.$hcId.'" style="width:120px;padding:5px;background:#0058a2;">
					<a href="'.$hcUrl.'">
						<img alt="HolidayCheck" src="https://www.holidaycheck.de/widgets/logo_xlarge.png" border="0">
					</a>
				</div>
			</div>';
	}
	echo '</div>';
	echo '</div>';
	echo $after_widget;
}
}

// Register widget
add_action('widgets_init', create_function('', 'return register_widget("widgetsForHC");'));

// Function for getting an id of an HolidayCheck-URL.
function getHcIdByUrl($hcUrl){
	$hcId = '0';
	if(preg_match("/(^(https?:\/\/(?:www\.)?|(?:www\.))?|\s(https?:\/\/(?:www\.)?|(?:www\.))?)holidaycheck\.*/", $hcUrl)){
		$hcId = '-1';
		$hcUrl = str_replace('https', 'http', $hcUrl);
		$domains = array(".at", ".ch", ".com", ".fr", ".it", ".es", ".pl");
		$hcUrl = str_replace($domains, '.de', $hcUrl);
		try {
			$hcPage = file_get_contents($hcUrl, NULL, NULL, 0, 30000);
			$hcPage = substr($hcPage, stripos($hcPage, 'HotelId')+9);
			$hcId = substr($hcPage, 0, stripos($hcPage, ','));
		}
		catch (Exception $e) {
			$hcId = $e->getMessage();
		}
	}
	return $hcId;
}

// Loading language file
add_action( 'plugins_loaded', 'widgetsForHC_load_textdomain' );
function widgetsForHC_load_textdomain() {
	load_plugin_textdomain('widgetsForHC', FALSE, dirname(plugin_basename(__FILE__)).'/languages/');
}
?>
