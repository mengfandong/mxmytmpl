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
if(!function_exists('animated_numbers_sc')) 
{
	function animated_numbers_sc($atts, $content='')
	{
		extract(shortcode_atts(array(
		'number'			=> '',
		'pre_symbol'			=> '',
		'post_symbol'			=> '',
		'duration'			=> '',
		'font_size'			=> '',
		'font_weight'			=> '',
		'border_color' 		=> '',
		'border_width' 		=> '',
		'border_radius' 	=> '',
		'color' 			=> '',
		'background' 		=> '',
		'counter_title' 	=> '',
		'title_font_size'	=> '',
		'counter_color' 	=> '',
		'alignment'			=> '',
		), $atts));

		
		
		$style 			= '';
	$number_style 	= '';
	$text_style 	= '';

	if($background) $class .= $class . ' sppb-hasbg';

	if($background) $style .= 'background-color:' . $background  . ';';
	if($border_color) $style .= 'border-style:solid;border-color:' . $border_color  . ';';
	if($border_width) $style .= 'border-width:' . (int) $border_width  . 'px;';
	if($border_radius) $style .= 'border-radius:' . (int) $border_radius  . 'px;';

	if($color) $number_style .= 'color:' . $color  . ';';
	if($font_size) $number_style .= 'font-size:' . (int) $font_size . 'px;line-height:' . (int) $font_size . 'px;';
	if($font_weight) $number_style .= 'font-size:' . $font_weight . ';';
	
	
	if($counter_color) $text_style .= 'color:' . $counter_color  . ';';
	if($title_font_size) $text_style .= 'font-size:' . (int) $title_font_size . 'px;line-height:' . (int) $title_font_size . 'px;';

	$output  = '<div class="sppb-addon sppb-addon-animated-number '. $alignment . ' ' . $class .'">';

	$output .= '<div class="sppb-addon-content" style="' . $style . '">';
	$output .= '<span style="'. $number_style .'">'. $pre_symbol .'</span><span class="sppb-animated-number" data-digit="'. $number .'" data-duration="' . $duration . '" style="'. $number_style .'">0</span><span style="'. $number_style .'">'. $post_symbol .'</span>';
	if($counter_title) $output .= '<div class="sppb-animated-number-title" style="' . $text_style . '">' . $counter_title . '</div>';
	$output .= '</div>';

	$output .= '</div>';

	return $output;
	}

	add_shortcode('animated_numbers', 'animated_numbers_sc');
}