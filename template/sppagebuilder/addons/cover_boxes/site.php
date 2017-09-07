<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_cover_boxes','sp_cover_boxes_addon');
AddonParser::addAddon('sp_cover_boxes_item','sp_cover_boxes_item_addon');

function sp_cover_boxes_addon($atts, $content){

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

	$output  = '<div class="sppb-carousel sppb-carousel-pro sppb_cover_boxes sppb-slide' . $class . '" ' . $carousel_autoplay . '> ';


	$output .= '<div class="sppb-carousel-inner">';
	$output .= AddonParser::spDoAddon($content);
	$output	.= '</div>';

	if($arrows) {
		$output	.= '<span class="arrow_main"><a style="' . $color . '" class="sppb-carousel-arrow left sppb-carousel-control" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i></a>';
		$output	.= '<a style="' . $color . '" class="sppb-carousel-arrow right sppb-carousel-control" role="button" data-slide="next"><i class="fa fa-chevron-right"></i></a></span>';
	}

	
	$output .= '</div>';

	return $output;

}

function sp_cover_boxes_item_addon( $atts ){

	extract(spAddonAtts(array(
		"title"						=>'',
		"image1"					=>'',
		"image1_title"				=>'',
		"image1_subtitle"			=>'',
		"image1_text"				=>'',
		"image1_button_text"		=>'',
		"image1_url"				=>'',
		"image1_link_target"		=>'',
		
		"image2"					=>'',
		"image2_title"				=>'',
		"image2_subtitle"			=>'',
		"image2_text"				=>'',
		"image2_button_text"		=>'',
		"image2_url"				=>'',
		"image2_link_target"		=>'',
		
		"image3"					=>'',
		"image3_title"				=>'',
		"image3_subtitle"			=>'',
		"image3_text"				=>'',
		"image3_button_text"		=>'',
		"image3_url"				=>'',
		"image3_link_target"		=>'',
		
		
		
		
		
		), $atts));

	
	$output   = '<div class="sppb-item">';
	

	$output  .= '<div class="sppb-carousel-item-inner">';

	$output  .= '<div class="sppb-main">';
	$output  .= '<div class="sppb-main-inner">';
	$output  .= '<div class="sppb-column">';
	
	
	$output  .= '<div class="sppb-inner">';
	$output  .= '<div class="sppb_cover_image">';
	$output  .= '<img src="'. $image1 .'">';
	$output  .= '</div>';
	$output  .= '<div class="sppb_cover_text">';
	if($image1_title) {
		$output  .= '<div class="cover_title">'. $image1_title .'</div>';		
	}
	
	if($image1_subtitle) {
		$output  .= '<div class="cover_subtitle">'. $image1_subtitle .'</div>';		
	}
	
	if($image1_text) {
		$output  .= '<div class="cover_text">'. $image1_text .'</div>';		
	}
	
	if($image1_url) {
		$output  .= '<div class="cover_text"><a href="'. $image1_url .'" target="'. $image1_link_target .'" class="sppb-btn sppb-btn-default sppb-btn-sm">'. $image1_button_text .'</a></div>';		
	}
	
	$output  .= '</div>';
	$output  .= '</div>';
	
	$output  .= '</div>';








	$output  .= '<div class="sppb-column">';
	
	
	$output  .= '<div class="sppb-inner">';
	$output  .= '<div class="sppb_cover_image">';
	$output  .= '<img src="'. $image2 .'">';
	$output  .= '</div>';
	$output  .= '<div class="sppb_cover_text">';
	if($image2_title) {
		$output  .= '<div class="cover_title">'. $image2_title .'</div>';		
	}
	
	if($image2_subtitle) {
		$output  .= '<div class="cover_subtitle">'. $image2_subtitle .'</div>';		
	}
	
	if($image2_text) {
		$output  .= '<div class="cover_text">'. $image2_text .'</div>';		
	}
	
	if($image2_url) {
		$output  .= '<div class="cover_text"><a href="'. $image2_url .'" target="'. $image2_link_target .'" class="sppb-btn sppb-btn-default sppb-btn-sm">'. $image2_button_text .'</a></div>';		
	}
	
	$output  .= '</div>';
	$output  .= '</div>';
	
	$output  .= '</div>';

	$output  .= '<div class="sppb-column last">';
	
	
	$output  .= '<div class="sppb-inner">';
	$output  .= '<div class="sppb_cover_image">';
	$output  .= '<img src="'. $image3 .'">';
	$output  .= '</div>';
	$output  .= '<div class="sppb_cover_text">';
	if($image3_title) {
		$output  .= '<div class="cover_title">'. $image3_title .'</div>';		
	}
	
	if($image3_subtitle) {
		$output  .= '<div class="cover_subtitle">'. $image3_subtitle .'</div>';		
	}
	
	if($image3_text) {
		$output  .= '<div class="cover_text">'. $image3_text .'</div>';		
	}
	
	if($image3_url) {
		$output  .= '<div class="cover_text"><a href="'. $image3_url .'" target="'. $image3_link_target .'" class="sppb-btn sppb-btn-default sppb-btn-sm">'. $image3_button_text .'</a></div>';		
	}
	
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';

	
	
	
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';

	return $output;

}