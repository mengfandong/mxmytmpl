<?php
/**
 * @package Helix Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2013 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

//no direct accees
defined ('_JEXEC') or die('resticted aceess');

//[Testimonial]
if(!function_exists('team_sc')) {
	function team_sc( $atts, $content="" ){
	
		extract(shortcode_atts(array(
				   'name' => 'John Doe',
				   'designation' => '',
				   'avatar' => 'email@email.com',
				   'url' => '',
				   'facebook' => '',
				   'twitter' => '',
				   'googleplus' => '',
				   'linkedin' => '',
				   'rss' => '',
				   'content' => ''
				   
			 ), $atts));
		
		ob_start();
	?>
		<div class="teamic">
        	<div class="teamic_inner">
            	<div class="teamic_details"><img src="<?php echo $avatar; ?>" class="teamic_avatar" />
                <div class="teamic_name"><span><?php echo $name; ?></span> // <?php echo $designation; ?></div>
                </div>
                <div class="teamic_text">
                <div class="teamic_social">
                	<a class="facebook" href="<?php echo $facebook; ?>"><i class="icon-facebook"></i></a>
                    <a class="twitter" href="<?php echo $twitter; ?>"><i class="icon-twitter"></i></a>
                    <a class="google-plus" href="<?php echo $googleplus; ?>"><i class="icon-google-plus"></i></a>
                    <a class="linkedin" href="<?php echo $linkedin; ?>"><i class="icon-linkedin"></i></a>
                    <a class="rss" href="<?php echo $rss; ?>"><i class="icon-rss"></i></a>
                </div>
                <div class="teamic_content"><?php echo $content; ?></div>
                <div class="teamic_url"><?php echo $url; ?></div>
                </div>
            </div>
		</div>
        <?php 

		return ob_get_clean();
	}
	add_shortcode('team', 'team_sc' );
}
	

