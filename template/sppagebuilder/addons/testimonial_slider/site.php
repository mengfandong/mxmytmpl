<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_testimonial_slider','sp_testimonial_slider_addon');
AddonParser::addAddon('sp_testimonial_slider_item','sp_testimonial_slider_item_addon');

function sp_testimonial_slider_addon($atts, $content){

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

	$output  = '<div class="sppb-carousel sppb-carousel-pro sppb_testimonial_slider sppb-slide' . $class . '" ' . $carousel_autoplay . '>  ';


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

function sp_testimonial_slider_item_addon( $atts ){

	extract(spAddonAtts(array(
		"author1_name"				=>'',
		"testi1_img"				=>'',
		"author1_designation"		=>'',
		"author1_website"			=>'',
		"testi1_url"				=>'',
		"testi1_link_target"		=>'',
		"testi1_text"				=>'',
		
		"author2_name"				=>'',
		"testi2_img"				=>'',
		"author2_designation"		=>'',
		"author2_website"			=>'',
		"testi2_url"				=>'',
		"testi2_link_target"		=>'',
		"testi2_text"				=>'',
		
		"author3_name"				=>'',
		"testi3_img"				=>'',
		"author3_designation"		=>'',
		"author3_website"			=>'',
		"testi3_url"				=>'',
		"testi3_link_target"		=>'',
		"testi3_text"				=>'',
		
		
		), $atts));

	
	$output   = '<div class="sppb-item">';
	$output  .= '<div class="sppb-carousel-item-inner">';
	$output  .= '<div class="sppb-main">';
	$output  .= '<div class="sppb-row">';
	
	
	
	$output  .= '<div class="sppb-col-md-4">';
	$output  .= '<div class="sppb-inner">';
	$output  .= '<div class="sppb_testimonial_slider_item">';
	
	$output  .= '<div class="sppb_testimonial_slider_text">';
	if($testi1_text) {
		$output  .= '<div class="cover_text">'. $testi1_text .'</div>';		
	}
	$output  .= '<div class="author_img" ><img src="'. $testi1_img .'" ></div>';
	$output  .= '</div>';

	$output  .= '<div class="sppb_ts_author_details">';
	if($author1_name) {
		$output  .= '<div class="author_name">- '. $author1_name .'</div>';		
	}
	
	if($author1_designation) {
		$output  .= '<span class="author_designation">'. $author1_designation .'</span>';		
	}
	if($author1_website) {
		$output  .= ' - <span class="author_url"><a href="'. $testi1_url .'" target="'. $testi1_link_target .'" class="ts_url">'. $author1_website .'</a></span>';		
	}
	$output  .= '</div>';
	
	
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';








	$output  .= '<div class="sppb-col-md-4">';
	$output  .= '<div class="sppb-inner">';
	$output  .= '<div class="sppb_testimonial_slider_item">';
	
	$output  .= '<div class="sppb_testimonial_slider_text">';
	if($testi2_text) {
		$output  .= '<div class="cover_text">'. $testi2_text .'</div>';		
	}
	$output  .= '<div class="author_img" ><img src="'. $testi2_img .'"  ></div>';
	$output  .= '</div>';

	$output  .= '<div class="sppb_ts_author_details">';
	if($author2_name) {
		$output  .= '<div class="author_name">- '. $author2_name .'</div>';		
	}
	
	if($author2_designation) {
		$output  .= '<span class="author_designation">'. $author2_designation .'</span>';		
	}
	if($author2_website) {
		$output  .= ' - <span class="author_url"><a href="'. $testi2_url .'" target="'. $testi2_link_target .'" class="ts_url">'. $author2_website .'</a></span>';		
	}
	$output  .= '</div>';
	
	
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';
	
	
	

	$output  .= '<div class="sppb-col-md-4">';
	$output  .= '<div class="sppb-inner">';
	$output  .= '<div class="sppb_testimonial_slider_item">';
	
	$output  .= '<div class="sppb_testimonial_slider_text">';
	if($testi3_text) {
		$output  .= '<div class="cover_text">'. $testi3_text .'</div>';		
	}
	$output  .= '<div class="author_img" ><img src="'. $testi3_img .'"  ></div>';
	$output  .= '</div>';

	$output  .= '<div class="sppb_ts_author_details">';
	if($author3_name) {
		$output  .= '<div class="author_name">- '. $author3_name .'</div>';		
	}
	
	if($author3_designation) {
		$output  .= '<span class="author_designation">'. $author3_designation .'</span>';		
	}
	if($author3_website) {
		$output  .= ' - <span class="author_url"><a href="'. $testi3_url .'" target="'. $testi3_link_target .'" class="ts_url">'. $author3_website .'</a></span>';		
	}
	$output  .= '</div>';
	
	
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';
	
	
	
	
	
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';

	return $output;

}