<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_clients_slider','sp_clients_slider_addon');
AddonParser::addAddon('sp_clients_slider_item','sp_clients_slider_item_addon');

function sp_clients_slider_addon($atts, $content){

	extract(spAddonAtts(array(
		'autoplay'				=>'',
		'heading'				=>'',
		'heading_color'			=>'',
		'text_content'			=>'',
		'text_content_color'	=>'',
		'background_color'		=>'',
		'arrows'				=>'',
		'color'					=>'',
		
		"class"					=>'',
		), $atts));

	

	$carousel_autoplay = ($autoplay)?'data-sppb-ride="sppb-carousel"':'';

	$output  = '<div style="border:5px solid '. $background_color .'" class="sppb-carousel sppb-carousel-pro sppb_clients_slider sppb-slide' . $class . '" ' . $carousel_autoplay . '> ';
	
	$output  .= '<div class="sppb-row">';

	$output  .= '<div class="sppb-col-sm-3" style="background:'. $background_color .'">';
	

	$output  .= '<div class="clients_heading">';
	$output  .= '<span class="clients_heading_inner" style="color:'. $heading_color .';">'. $heading .'</span>';
	
	if($arrows) {
		$output	.= '<span class="arrow_main"><a style="' . $color . '" class="sppb-carousel-arrow left sppb-carousel-control" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i></a>';
		$output	.= '<a style="' . $color . '" class="sppb-carousel-arrow right sppb-carousel-control" role="button" data-slide="next"><i class="fa fa-chevron-right"></i></a></span>';
	}
	$output	.= '</div>';
	
	$output  .= '<div class="clients_content" style="color:'. $text_content_color. ';">';
	$output	.= $text_content ;
	$output	.= '</div>';
	
	$output	.= '</div>';
	$output  .= '<div class="sppb-col-sm-9">';


	$output .= '<div class="sppb-carousel-inner">';
	$output .= AddonParser::spDoAddon($content);
	$output	.= '</div>';

	
	
	
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';

	return $output;

}

function sp_clients_slider_item_addon( $atts ){

	extract(spAddonAtts(array(
		"title"				=>'',
		"image1"			=>'',
		"logo1_title"		=>'',
		"logo1_url"			=>'',
		"image2"			=>'',
		"logo2_title"		=>'',
		"logo2_url"			=>'',
		"image3"			=>'',
		"logo3_title"		=>'',
		"logo3_url"			=>'',
		"image4"			=>'',
		"logo4_title"		=>'',
		"logo4_url"			=>'',
		
		
		
		
		), $atts));

	
	$output   = '<div class="sppb-item">';
	

	$output  .= '<div class="sppb-carousel-item-inner">';

	$output  .= '<div class="sppb-row">';

	$output  .= '<div class="sppb-col-sm-3">';
	if($logo1_url) {
	$output  .= '<a href="'. $logo1_url .'" target="_blank">';
	}
	$output  .= '<img src="'. $image1 .'">';
	if($logo1_url) {
	$output  .= '</a>';
	}
	if($logo1_title) {
		$output  .= '<div class="client_title">'. $logo1_title .'</div>';		
	}
	$output  .= '</div>';

	$output  .= '<div class="sppb-col-sm-3">';
	
	if($logo2_url) {
	$output  .= '<a href="'. $logo2_url .'" target="_blank">';
	}
	$output  .= '<img src="'. $image2 .'">';
	if($logo2_url) {
	$output  .= '</a>';
	}
	
	if($logo2_title) {
		$output  .= '<div class="client_title">'. $logo2_title .'</div>';		
	}
	$output  .= '</div>';

	$output  .= '<div class="sppb-col-sm-3">';
	if($logo3_url) {
	$output  .= '<a href="'. $logo3_url .'" target="_blank">';
	}
	$output  .= '<img src="'. $image3 .'">';
	if($logo3_url) {
	$output  .= '</a>';
	}

	if($logo3_title) {
		$output  .= '<div class="client_title">'. $logo3_title .'</div>';		
	}
	$output  .= '</div>';

	$output  .= '<div class="sppb-col-sm-3">';
	
	if($logo4_url) {
	$output  .= '<a href="'. $logo4_url .'" target="_blank">';
	}
	$output  .= '<img src="'. $image4 .'">';
	if($logo4_url) {
	$output  .= '</a>';
	}
	
	if($logo4_title) {
		$output  .= '<div class="client_title">'. $logo4_title .'</div>';		
	}
	$output  .= '</div>';
	
	
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';

	return $output;

}