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
if(!function_exists('progressbar_sc')) 
{
	function progressbar_sc($atts, $content='')
	{
		extract(shortcode_atts(array(
			"text"=>'',
			"type"=>'',
			"striped"=>'',
			"active"=>'',
			"active_color"=>'',
			"bar"=>''
		), $atts));

		$striped 	= ( $striped === 'yes' ) ? 'progress-striped' : '';
		$active 	= ( $active  === 'yes' ) ? 'active' : '';
		
		$output     = '<div class="progress_sc">';
		$output    .= '<div class="progress_text">' . do_shortcode( $text ) . '<div class="percentage">' . $bar . '</div></div><div class="progress progress-' . $type . ' ' . $striped . ' ' . $active . '">';
 		$output    .= '<div class="bar" style="width: ' . $bar . ';background-color: '. $active_color .' "></div>';
		$output    .= '</div>';
		$output    .= '</div>';

		return $output;
	}

	add_shortcode('progressbar', 'progressbar_sc');
}