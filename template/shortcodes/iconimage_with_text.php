<?php
/**
 * @package Helix Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2014 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/
//no direct accees
defined ('_JEXEC') or die('resticted aceess');

//[Testimonial]
if(!function_exists('iconimage_with_text_sc')) {
	function iconimage_with_text_sc( $atts, $content="" ){

		extract(shortcode_atts(array(
					'title' => '',
					'title_color' => '',
					'subtitle' => '',
					'subtitle_color' => '',
					'readmore_text' => 'Read More',
					'readmore_link' => 'Read More',
					'readmore_color' => '#ffffff',
					'readmore_bg' => '#aaaaaa',
					'img'=> 'images/icons/desktop.png',
					'img_bg'=> '',
					'img_border_color'=> '',
					'main_bg'=> '#f9f9f9'
					
				), $atts));

		ob_start();
	?>
	<div class="media icon_image_with_text">
        <div class="icon_image_with_text_inner" style="background:<?php echo $main_bg; ?>;">
            <div class="icon_image" style="background:<?php echo $img_bg; ?>; border-bottom-color:<?php echo $img_border_color; ?>;">
                        <img class="testi_img" alt="<?php echo $title; ?>" src="<?php echo $img; ?>" >
                    </div>
          
            <div class="media-body">
            	<div class="title" style="color:<?php echo $title_color; ?>;">
                	<?php echo $title; ?>
                </div>
                <div class="subtitile" style="color:<?php echo $subtitle_color; ?>;">
                	<?php echo $subtitle; ?>
                </div>
                <div class="content">
                    <?php echo do_shortcode($content); ?>
                </div>
                <div class="readmore">
                	<a href="<?php echo $readmore_link; ?>" style="background:<?php echo $readmore_bg; ?>;color:<?php echo $readmore_color; ?>;"><?php echo $readmore_text; ?></a>
                </div>
            </div>
		</div>
	</div>
	<?php  
		return ob_get_clean();
	}
	add_shortcode( 'iconimage_with_text', 'iconimage_with_text_sc' );
}