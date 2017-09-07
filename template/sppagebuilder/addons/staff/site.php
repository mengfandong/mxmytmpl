<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_staff','sp_staff_addon');
AddonParser::addAddon('sp_staff_item','sp_staff_item_addon');

function sp_staff_addon($atts, $content){

	extract(spAddonAtts(array(
		'autoplay'=>'',
	
		'arrows'=>'',
		'color'=>'',
		'background'=>'',
		"class"=>'',
		), $atts));

	if($background) {
		$background = 'background-color:' . $background . ';';
	}

	if($color) {
		$color = 'color:' . $color . ';';
	}

	$carousel_autoplay = ($autoplay)?'data-sppb-ride="sppb-carousel"':'';

	$output  = '<div style="' . $background . $color . '" class="sppb-carousel sppb-staff-addon sppb-slide ' . $class . '" ' . $carousel_autoplay . '>';

	

	$output .= '<div class="sppb-carousel-inner">';
	$output .= AddonParser::spDoAddon($content);
	$output	.= '</div>';

	if($arrows) {
		$output	.= '<a style="' . $color . '" class="sppb-carousel-arrow left sppb-carousel-control" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i></a>';
		$output	.= '<a style="' . $color . '" class="sppb-carousel-arrow right sppb-carousel-control" role="button" data-slide="next"><i class="fa fa-chevron-right"></i></a>';
	}
	
	$output .= '</div>';

	return $output;

}

function sp_staff_item_addon( $atts ){

	extract(spAddonAtts(array(
		"title"						=>'',
		"title_color"				=>'',
		"last_name"					=>'',
		"last_name_color"			=>'',
		"designation"				=>'',
		"website"					=>'',
		"image"						=>'',
		"content_title"				=>'',
		"content_title_color"		=>'',
		'content'					=>'',
		'skill_bar_color'			=>'',
		'skill_bar_inactive_color'	=>'',
		'skill_text_color'			=>'',
		'skill_bar_height'			=>'',
		'skill1_title'				=>'',
		'skill1_percent'			=>'',
		'skill2_title'				=>'',
		'skill2_percent'			=>'',
		'skill3_title'				=>'',
		'skill3_percent'			=>'',
		'skill4_title'				=>'',
		'skill4_percent'			=>'',
		'icon1'						=>'',
		'icon1_url'					=>'',
		'icon2'						=>'',
		'icon2_url'					=>'',
		'icon3'						=>'',
		'icon3_url'					=>'',
		'icon4'						=>'',
		'icon4_url'					=>'',
		
		
		), $atts));

	

	
	
	$output   = '<div class="sppb-item">';
	$output  .= '<div class="sppb-staff-item-inner">';


	$output  .= '<div class="sppb-row">';

	$output  .= '<div class="sppb-col-sm-2">';
	$output  .= '<div class="sppb-staff-details">';
	
	
	if($title){
			$output  .= '<h2 class="first_name" style="color:'. $title_color .';">' . $title . '</h2>';
		}
	if($last_name){
			$output  .= '<h2 class="last_name" style="color:'. $last_name_color .';">' . $last_name . '</h2>';
		}
	if($designation){
			$output  .= '<div class="designation">' . $designation . '</div>';
		}
	if($website){
			$output  .= '<div class="website">' . $website . '</div>';
		}
	
	
	if($icon1){
		$output  .='<div class="staff_social">';
		if($icon1){
				$output  .= '<a href="' . $icon1_url . '" target="_blank"><i class="fa ' . $icon1 . '"></i></a>';
			}
		if($icon2){
				$output  .= '<a href="' . $icon2_url . '" target="_blank"><i class="fa ' . $icon2 . '"></i></a>';
			}
		if($icon3){
				$output  .= '<a href="' . $icon3_url . '" target="_blank"><i class="fa ' . $icon3 . '"></i></a>';
			}	
		if($icon4){
				$output  .= '<a href="' . $icon4_url . '" target="_blank"><i class="fa ' . $icon4 . '"></i></a>';
			}	
		$output  .='</div>';
	}



	

	$output  .= '</div>';
	$output  .= '</div>';
	
	$output  .= '<div class="sppb-col-sm-2">';
	$output  .= '<div class="sppb-staff-image">';

	
	if($image) {
		$output  .= '<img class="sppb-img-reponsive" src="' . $image . '" alt="">';
	}
	


	$output  .= '</div>';
	$output  .= '</div>';

	$output  .= '<div class="sppb-col-sm-3">';
	$output  .= '<div class="sppb-text-content">';

	if ($content_title) {
        $output  .= '<h3 style="color:'. $content_title_color .';">' . $content_title . '</h3>';
	}
	if ($content) {
        $output  .= '<p>' . $content . '</p>';
	}
	


	$output  .= '</div>';
	$output  .= '</div>';

	$output  .= '<div class="sppb-col-sm-5">';
	$output  .= '<div class="sppb-staff-skill">';

	

	$output .= '<div class="progress_bar_main"><div class="progress_bar_text" style="color:'. $skill_text_color .';"><span class="progress_text">' . $skill1_title . '</span><span class="progress_percent">'. $skill1_percent .'%</span></div>';
	$output .= '<div class="sppb-progress" style="height:'. $skill_bar_height .'px">';
	$output .= '<div class="sppb-progress-bar" role="progressbar" aria-valuenow="' . $skill1_percent . '" aria-valuemin="0" aria-valuemax="100" data-width="' . $skill1_percent . '%">';
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';
	
	
	
	$output .= '<div class="progress_bar_main"><div class="progress_bar_text" style="color:'. $skill_text_color .';"><span class="progress_text">' . $skill2_title . '</span><span class="progress_percent">'. $skill2_percent .'%</span></div>';
	$output .= '<div class="sppb-progress" style="height:'. $skill_bar_height .'px">';
	$output .= '<div class="sppb-progress-bar" role="progressbar" aria-valuenow="' . $skill2_percent . '" aria-valuemin="0" aria-valuemax="100" data-width="' . $skill2_percent . '%">';
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';
	
	
	
	$output .= '<div class="progress_bar_main"><div class="progress_bar_text" style="color:'. $skill_text_color .';"><span class="progress_text">' . $skill3_title . '</span><span class="progress_percent">'. $skill3_percent .'%</span></div>';
	$output .= '<div class="sppb-progress" style="height:'. $skill_bar_height .'px">';
	$output .= '<div class="sppb-progress-bar" role="progressbar" aria-valuenow="' . $skill3_percent . '" aria-valuemin="0" aria-valuemax="100" data-width="' . $skill3_percent . '%">';
	$output  .= '</div>';
	$output  .= '</div>';
	$output  .= '</div>';
	
	
	
	
	$output .= '<div class="progress_bar_main"><div class="progress_bar_text" style="color:'. $skill_text_color .';"><span class="progress_text">' . $skill4_title . '</span><span class="progress_percent">'. $skill4_percent .'%</span></div>';
	$output .= '<div class="sppb-progress" style="height:'. $skill_bar_height .'px">';
	$output .= '<div class="sppb-progress-bar" role="progressbar" aria-valuenow="' . $skill4_percent . '" aria-valuemin="0" aria-valuemax="100" data-width="' . $skill4_percent . '%">';
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