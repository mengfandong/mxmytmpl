<?php
/**
 * @package Helix Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2014 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/
//no direct accees
defined ('_JEXEC') or die('resticted aceess');

//[Progressbar]
if(!function_exists('pricing_sc')) 
{
	function pricing_sc($atts)
	{
		extract(shortcode_atts(array(
		'title' 			=> '',
		'price' 			=> '',
		'duration' 			=> '',
		'pricing_content' 	=> '',
		'button_text' 		=> '',
		'button_url' 		=> '',
		'button_size' 		=> '',
		'button_type' 		=> '',
		'button_icon' 		=> '',
		'button_block' 		=> '',
		'alignment' 		=> '',
		'price_bg' 		=> '',
		'button_color' 			=> '',
		), $atts));

	
		
		$style = '';


	if($button_icon !='') {
		$button_text = '<i class="fa ' . $button_icon . '"></i> ' . $button_text;
	}

	$output  = '<div class="sppb-addon sppb-addon-pricing-table ' . $alignment . ' ">';
	
	$output .= '<div style="' . $style . '" class="sppb-pricing-box ">';
	$output .= '<div class="sppb-pricing-header" style="background:'. $price_bg .'; color:'. $button_color .'">';
	if($title) $output .= '<div class="sppb-pricing-title">' . $title . '</div>';
	if($price) $output .= '<div class="pricing_head" style=" border-color:'. $button_color .'"><div class="sppb-pricing-price">' . $price . '</div>';
	if($duration) $output .= '<div class="sppb-pricing-duration">/' . $duration . '</div></div>';
	$output .= '</div>';

	if($pricing_content) {
		$output .= '<div class="sppb-pricing-features">';
		$output .= '<ul>';

		$features = explode("\n", $pricing_content);

		foreach ($features as $feature) {
			$output .= '<li>' . $feature . '</li>';
		}
		
		$output .= '</ul>';
		$output .= '</div>';
	}

	$output .= '<div class="sppb-pricing-footer">';
	$output .= '<a href="' . $button_url . '" class="sppb-btn sppb-btn-'. $button_type .' sppb-btn-'. $button_size . ' sppb-btn-block" style="background:'. $price_bg .'; color:'. $button_color .'">'. $button_text .'</a>';
	$output .= '</div>';

	$output .= '</div>';
	
	$output .= '</div>';
		return $output;
	}

	add_shortcode('pricing', 'pricing_sc');
}