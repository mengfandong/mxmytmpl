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
if(!function_exists('testimonial_sc')) {
	function testimonial_sc( $atts, $content="" ){

		extract(shortcode_atts(array(
					'name' => 'John Doe',
					'name_color' => '',
					'designation' => '',
					
					'email' => 'email@email.com',
					'url' => '',
					'img'=> 'images/user.jpg'
					
				), $atts));

		ob_start();
	?>
	<div class="media testimonial_sc">
        <div class="testimonial_inner">
            
           
               
           
            <div class="media-body">
                <div class="testimonial-content">
                	 <i class="fa fa-quote-left"></i><?php echo do_shortcode($content); ?><i class="fa fa-quote-right"></i>
                </div>
                <div style="margin-top:5px" class="media testimonial-author">
                    <div class="pull-left">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="author_name">
                        <strong style="color:<?php echo $name_color; ?>"><?php echo $name; ?></strong> / <?php echo $designation; ?>
                        <br/>
                        <a href="<?php echo $url; ?>"><?php echo $url; ?></a>
                    </div>
				</div>
            </div>
		</div>
	</div>
	<?php 

		return ob_get_clean();
	}
	add_shortcode( 'testimonial', 'testimonial_sc' );
}