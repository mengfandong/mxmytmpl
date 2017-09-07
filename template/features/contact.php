<?php
/**
 * @package Helix3 Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2014 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/
//no direct accees
defined ('_JEXEC') or die('resticted aceess');

class Helix3FeatureContact {

	private $helix3;

	public function __construct($helix3){
		$this->helix3 = $helix3;
		$this->position = $this->helix3->getParam('contact_position');
	}

	public function renderFeature() {
			


		if($this->helix3->getParam('enable_contactinfo')) {

			$output = '<div class="sp-contact-info">';


			if( $this->helix3->getParam('logo_image_drop') ) {
				
			} 


			if($this->helix3->getParam('logo_image_drop')) $output .= '<div class="sp-contact-logo"><img src="'  . $this->helix3->getParam('logo_image_drop') . '"/></div>';

			if($this->helix3->getParam('contact_company')) $output .= '<div class="sp-contact-company-name">' . $this->helix3->getParam('contact_company') . '</div>';


			if($this->helix3->getParam('contact_address')) $output .= '<div class="sp-contact-address"><i class="fa fa-home"></i> &nbsp;' . $this->helix3->getParam('contact_address') . '</div>';

			$output .= '<ul >';
			
			if($this->helix3->getParam('contact_phone')) $output .= '<li class="sp-contact-phone"><i class="fa fa-phone"></i> <a href="tel:' . $this->helix3->getParam('contact_phone') . '">' . $this->helix3->getParam('contact_phone') . '</a></li>';
			if($this->helix3->getParam('contact_email')) $output .= '<li class="sp-contact-email"><i class="fa fa-envelope"></i> <a href="mailto:'. $this->helix3->getParam('contact_email') .'">' . $this->helix3->getParam('contact_email') . '</a></li>';

			$output .= '</ul>';
			$output .= '<div class="contact-social"><ul>';
			if( $this->helix3->getParam('facebook') ) {
				$output .= '<li><a target="_blank" href="'. $this->helix3->getParam('facebook') .'"><i class="fa fa-facebook"></i></a></li>';
			}
			if( $this->helix3->getParam('twitter') ) {
				$output .= '<li><a target="_blank" href="'. $this->helix3->getParam('twitter') .'"><i class="fa fa-twitter"></i></a></li>';
			}
			if( $this->helix3->getParam('googleplus') ) {
				$output .= '<li><a target="_blank" href="'. $this->helix3->getParam('googleplus') .'"><i class="fa fa-google-plus"></i></a></li>';
			}
			if( $this->helix3->getParam('pinterest') ) {
				$output .= '<li><a target="_blank" href="'. $this->helix3->getParam('pinterest') .'"><i class="fa fa-pinterest"></i></a></li>';
			}
			if( $this->helix3->getParam('youtube') ) {
				$output .= '<li><a target="_blank" href="'. $this->helix3->getParam('youtube') .'"><i class="fa fa-youtube"></i></a></li>';
			}
			if( $this->helix3->getParam('linkedin') ) {
				$output .= '<li><a target="_blank" href="'. $this->helix3->getParam('linkedin') .'"><i class="fa fa-linkedin"></i></a></li>';
			}
			if( $this->helix3->getParam('dribbble') ) {
				$output .= '<li><a target="_blank" href="'. $this->helix3->getParam('dribbble') .'"><i class="fa fa-dribbble"></i></a></li>';
			}
			if( $this->helix3->getParam('behance') ) {
				$output .= '<li><a target="_blank" href="'. $this->helix3->getParam('behance') .'"><i class="fa fa-behance"></i></a></li>';
			}
			if( $this->helix3->getParam('flickr') ) {
				$output .= '<li><a target="_blank" href="'. $this->helix3->getParam('flickr') .'"><i class="fa fa-flickr"></i></a></li>';
			}
			if( $this->helix3->getParam('vk') ) {
				$output .= '<li><a target="_blank" href="'. $this->helix3->getParam('vk') .'"><i class="fa fa-vk"></i></a></li>';
			}
			if( $this->helix3->getParam('skype') ) {
				$output .= '<li><a href="skype:'. $this->helix3->getParam('skype') .'?chat"><i class="fa fa-skype"></i></a></li>';
			}
			
			$output .= '</ul></div >';
			
			$output .= '</div>';
			return $output;
		}
		
	}    
}