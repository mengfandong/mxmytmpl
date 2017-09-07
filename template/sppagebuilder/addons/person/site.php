<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_person','sp_person_addon');

function sp_person_addon($atts) {

	extract(spAddonAtts(array(
		'image' 			=> '',
		'border_color' 		=> '',
		'border_width' 		=> '',
		'image_radius' 		=> '',
		'image_margin' 		=> '',
		'image_animation' 	=> '',
		'name' 				=> '',
		'name_color' 		=> '',
		'name_bg_color' 	=> '',
		'name_margin' 		=> '',
		'designation' 		=> '',
		'introtext' 		=> '',
		'facebook' 			=> '',
		'twitter' 			=> '',
		'google_plus' 		=> '',
		'youtube' 			=> '',
		'linkedin' 			=> '',
		'pinterest' 		=> '',
		'flickr' 			=> '',
		'dribbble' 			=> '',
		'behance' 			=> '',
		'instagram' 		=> '',
		'social_position' 	=> '',
		'alignment' 		=> '',
		'class' 			=> '',
		), $atts));

	$output = '';
	$social_icons = '';

	if($facebook || $twitter || $google_plus || $youtube || $linkedin || $pinterest || $flickr || $dribbble || $behance || $instagram) {
		$social_icons  	.= '<div class="sppb-person-social-icons">';
		$social_icons 	.= '<ul class="sppb-person-social">';

		if($facebook) 		$social_icons .= '<li><a target="_blank" href="' . $facebook . '"><i class="fa fa-facebook"></i></a></li>';
		if($twitter) 		$social_icons .= '<li><a target="_blank" href="' . $twitter . '"><i class="fa fa-twitter"></i></a></li>';
		if($google_plus) 	$social_icons .= '<li><a target="_blank" href="' . $google_plus . '"><i class="fa fa-google-plus"></i></a></li>';
		if($youtube) 		$social_icons .= '<li><a target="_blank" href="' . $youtube . '"><i class="fa fa-youtube"></i></a></li>';
		if($linkedin) 		$social_icons .= '<li><a target="_blank" href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a></li>';
		if($pinterest) 		$social_icons .= '<li><a target="_blank" href="' . $pinterest . '"><i class="fa fa-pinterest"></i></a></li>';
		if($flickr) 		$social_icons .= '<li><a target="_blank" href="' . $flickr . '"><i class="fa fa-flickr"></i></a></li>';
		if($dribbble) 		$social_icons .= '<li><a target="_blank" href="' . $dribbble . '"><i class="fa fa-dribbble"></i></a></li>';
		if($behance) 		$social_icons .= '<li><a target="_blank" href="' . $behance . '"><i class="fa fa-behance"></i></a></li>';
		if($instagram) 		$social_icons .= '<li><a target="_blank" href="' . $instagram . '"><i class="fa fa-instagram"></i></a></li>';

		$social_icons 	.= '</ul>';
		$social_icons 	.= '</div>';
	}

	$image_style = '';
	if($border_color) 	$image_style .= 'border-color:' . $border_color . ';';
	if($border_width) 	$image_style .= 'border-width:' . $border_width . 'px; border-style:solid;';
	if($image_radius) 	$image_style .= 'border-radius:' . $image_radius . '; -webkit-border-radius:' . $image_radius . ';';
	
	
	$title_style = '';
	if($name_margin) 	$title_style .= 'margin:' . $name_margin . ';';
	if($name_color) 	$title_style .= 'color:' . $name_color . ';';
	if($name_bg_color) 	$title_style .= 'background:' . $name_bg_color . ';';
	
	
	$image_animate = '';
	
	if($image_animation == 'animated_yes') 	$image_animate .= 'hvr-wobble-vertical';
	
	

	if($image) {
		$output  .= '<div class="sppb-addon sppb-addon-persion ' . $alignment . ' ' . $class . '">';
		$output  .= '<div class="sppb-addon-content">';

		$output  .= '<div class="sppb-person-image " style="margin:'.$image_margin.';">';
		$output  .= '<img class="sppb-img-responsive '. $image_animate .'" src="' . $image . '" alt="" style="'. $image_style .'">';
		$output  .= '</div>';

		if($name || $designation) {
			$output  .= '<div class="sppb-person-information">';
			if($name) $output  .= '<span class="sppb-person-name" style="'. $title_style .'">' . $name . '</span>';
			if($designation) $output  .= '<span class="sppb-person-designation">' . $designation . '</span>';
			$output  .= '</div>';
		}

		if($social_position=='before') $output .= $social_icons;

		if($introtext) $output  .= '<div class="sppb-person-introtext">' . $introtext . '</div>';

		if($social_position=='after') $output .= $social_icons;

		$output  .= '</div>';
		$output  .= '</div>';

		return $output;

	}

	return;

}