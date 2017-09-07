<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_number_flip_box','sp_number_flip_box_addon');

function sp_number_flip_box_addon($atts){
	

	extract(spAddonAtts(array(
		"title"					=> '',
		"back_title"			=> '',
		'counter_title' 		=> '',
		'number'				=> '',
		'pre_symbol'			=> '',
		'post_symbol'			=> '',
		'duration'				=> '',
		'icon_name' 			=> '',
		'text'					=> '',
		'alignment' 			=> '',
		'class'					=> '',
		"button_text"			=> '',
		"button_url"			=> '',
		"button_type"			=> '',
		"button_icon"			=> '',
		"button_target"			=> '',
		
		), $atts));




	
	$counter_content = '';
	$counter_content .= '<div class="sppb-addon-content">';
	if($counter_title) $counter_content .= '<div class="sppb-animated-number-title">' . $counter_title . '</div>';
	$counter_content .= '<span>'. $pre_symbol .'</span><span class="sppb-animated-number" data-digit="'. $number .'" data-duration="' . $duration . '" >0</span><span>'. $post_symbol .'</span>';

	$counter_content .= '</div>';
	
	
	

	//Icon or Image
	$media = '';
	if($icon_name) {
		$media  .= '<div class="sppb-icon">';
		$media  .= '<span>';
		$media  .= '<i class="fa ' . $icon_name . '"></i>';
		$media  .= '</span>';
		$media  .= '</div>';
	}
		
		//Title
	$feature_title = '';
	if($title) {
	$feature_title .= '';
	$feature_title .= '<div class="sppb-number-flip-box-title">' . $title . '</div>';
	}
	
	
	

	if($button_icon) {
		$button_text = '<i class="fa ' . $button_icon . '"></i> ' . $button_text;
	}
	
	$button_output = '<a target="' . $button_target . '" href="' . $button_url . '" class="sppb-btn sppb-btn-' . $button_type . '" role="button">' . $button_text . '</a>';
	


	//Feature Text
	$feature_text = '';
	$feature_text  .= '<div class="sppb-addon-text">';
	$feature_text .= '<div class="sppb-number-flip-box-back-title">' . $back_title . '</div>';
	$feature_text .= '<div class="content_text">'.$text.'</div>';
	if ($button_text) $feature_text .= $button_output;
	$feature_text .= '</div>';
	
	//Output
	$output = '<div class="sppb-addon sppb-addon-number-flip-box ' . $alignment . ' ' . $class . '">';
	$output .= '<div class="sppb-addon-inner" >';

	$output .= '<div class="sppb-addon-front" >';
	if($title) $output .= $feature_title;
	if($counter_content) $output .= $counter_content;
	if($media) $output .= $media;
	$output .= '</div>';
		
	$output .= '<div class="sppb-addon-back" >';
	$output .= $feature_text;
	$output .= '</div>';



	$output .= '</div>';

	$output .= '</div>';

	return $output;
		
		
	
}