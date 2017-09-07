<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');

AddonParser::addAddon('sp_take_tour','sp_take_tour_addon');

function sp_take_tour_addon($atts) {
	extract(spAddonAtts(array(
		'title' 			=> '',
		'pricing_content' 	=> '',
		'button_text' 		=> '',
		'button_url' 		=> '',
		'button_size' 		=> '',
		'button_type' 		=> '',
		'button_icon' 		=> '',
		'button_block' 		=> '',
		'alignment' 		=> '',
		'button_bg' 		=> '',
		'button_color' 			=> '',
		'class' 			=> '',
		), $atts));

	$style = '';


	if($button_icon !='') {
		$button_text = '<i class="fa ' . $button_icon . '"></i> ' . $button_text;
	}

	$output  = '<div class="sppb-addon sppb-addon-take-tour ' . $alignment . ' ' . $class . '">';
	
	$output .= '<div style="' . $style . '" class="sppb-take-tour-box ">';
	$output .= '<div class="sppb-take-tour-header" >';
	if($title) $output .= '<div class="sppb-tak-tour-title">' . $title . '</div>';
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

	$output .= '<div class="sppb-tt-footer">';
	$output .= '<a href="' . $button_url . '" class="sppb-btn sppb-btn-'. $button_type .' sppb-btn-'. $button_size . ' ' . $button_block .'" style="background:'. $button_bg .'; color:'. $button_color .'">'. $button_text .'</a>';
	$output .= '</div>';

	$output .= '</div>';
	
	$output .= '</div>';

	return $output;

}