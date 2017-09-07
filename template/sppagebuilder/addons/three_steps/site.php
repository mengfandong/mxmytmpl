<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_three_steps','sp_three_steps_addon');

function sp_three_steps_addon($atts){

	extract(spAddonAtts(array(
	
		"title"					=> '',
		"subtitle" 				=> '',
		"main_content" 			=> '',
		"button_text" 			=> '',
		"button_url" 			=> '',	
		"button_target"			=> '',
		
		
		"step_one_title"		=> '',
		"icon1_name"			=> '',
		"icon1_size"			=> '',
		"icon1_animation_style"	=> '',
		'icon1_animated' 		=> '',
		'icon1_onparenthover' 	=> '',
		'text1' 				=> '',
		
		"step_two_title"		=> '',
		"icon2_name"			=> '',
		"icon2_size"			=> '',
		"icon2_animation_style"	=> '',
		'icon2_animated' 		=> '',
		'icon2_onparenthover' 	=> '',
		'text2' 				=> '',

		
		"step_three_title"		=> '',
		"icon3_name"			=> '',
		"icon3_size"			=> '',
		"icon3_animation_style"	=> '',
		'icon3_animated' 		=> '',
		'icon3_onparenthover' 	=> '',
		'text3' 				=> '',

		
		
		
		
		
		), $atts));

	
		
		if($title){
		
		$step_details ='';
		
		$step_details .= '<div class="sppb-col-sm-3 step_details">';
		
		
			$step_details .= '<div class="sppb-addon sppb-details">';
			$step_details .= '<div class="sppb-details-content">';
			$step_details .= '<div class="sppb-details-subtitle">'. $subtitle .'</div>';
			$step_details .= '<div class="sppb-details-title">'. $title .'</div>';
			$step_details .= '<div class="sppb-details-text">'. $main_content .'</div>';
			$step_details .= '<div class="sppb-details-button"><a href="'. $button_url .'" target="'. $button_target .'">'. $button_text .'</a></div>';
			$step_details .= '</div>';
			$step_details .= '</div>';
		
		$step_details .= '</div>';
		
		}
		
		
		
		
		
		
		
		if($step_one_title){
		$step1_details ='';
		
		
		if($icon1_animation_style == 'animated1'){
		
			$media1 = '';
			if($icon1_name) {	
				$media1  = '<div class="sppb-icon">';
				$media1  .= '<span style="display:inline-block;;">';
				$media1  .= '<i class="fa '. $icon1_name .' faa-'. $icon1_animated .' animated" style="font-size:' . $icon1_size . 'px;"></i>';
				$media1  .= '</span>';
				$media1  .= '</div>';
			}
		
			//Title
			$step1_title = '';
			if($step_one_title) {
				$step1_title = '<div class="sppb-step_one_title" >' . $step_one_title . '</div>';
			}
		
			//Feature Text
			$step1_text = '';
			if($text1) {
				$step1_text  = '<div class="sppb-step1_text">';
				$step1_text .= $text1;
				$step1_text .= '</div>';
			}
	
			//Output
			$step1_details = '<div class="sppb-col-sm-3 step1_details">';
			$step1_details .= '<div class="sppb-addon sppb-step1">';
			$step1_details .= '<div class="sppb-step1-content">';
			$step1_details .= $media1;
			$step1_details .= $step1_title;
			$step1_details .= $step1_text;
			$step1_details .= '</div>';
			$step1_details .= '</div>';
			$step1_details .= '</div>';

		



	} else if ($icon1_animation_style == 'onparenthover1') {
			
		$media1 = '';		
		if($icon1_name) {
				$media1  = '<div class="sppb-icon">';
				$media1  .= '<span style="display:inline-block;;">';
				$media1  .= '<i class="fa '. $icon1_name .' faa-'. $icon1_onparenthover .'" style="font-size:' . $icon1_size . 'px;"></i>';
				$media1  .= '</span>';
				$media1  .= '</div>';
			}
		
			//Title
			$step1_title = '';
			if($step_one_title) {
				$step1_title .= '<div class="sppb-step_one_title" >' . $step_one_title . '</div>';
			}
		
			//Feature Text
			$step1_text = '';
			if($text1) {
				$step1_text  = '<div class="sppb-step1_text">';
				$step1_text .= $text1;
				$step1_text .= '</div>';
			}
	
			//Output
			$step1_details = '<div class="sppb-col-sm-3 step1_details">';
			$step1_details .= '<div class="sppb-addon sppb-step1">';
			$step1_details .= '<div class="sppb-step1-content faa-parent animated-hover">';
			$step1_details .= $media1;
			$step1_details .= $step1_title;
			$step1_details .= $step1_text;
			$step1_details .= '</div>';
			$step1_details .= '</div>';
			$step1_details .= '</div>';


		
		
		
		
		} else  {
			$media1 = '';
			if($icon1_name) {
				$media1  = '<div class="sppb-icon">';
				$media1  .= '<span style="display:inline-block;;">';
				$media1  .= '<i class="fa '. $icon1_name .' " style="font-size:' . $icon1_size . 'px;"></i>';
				$media1  .= '</span>';
				$media1  .= '</div>';
			}
		
			//Title
			$step1_title = '';
			if($step_one_title) {
				$step1_title = '<div class="sppb-step_one_title" >' . $step_one_title . '</div>';
			}
		
			//Feature Text
			$step1_text = '';
			if($text1) {
				$step1_text  = '<div class="sppb-step1_text">';
				$step1_text .= $text1;
				$step1_text .= '</div>';
			}
	
			//Output
			$step1_details = '<div class="sppb-col-sm-3 step1_details">';
			$step1_details .= '<div class="sppb-addon sppb-step1">';
			$step1_details .= '<div class="sppb-step1-content">';
			$step1_details .= $media1;
			$step1_details .= $step1_title;
			$step1_details .= $step1_text;
			$step1_details .= '</div>';
			$step1_details .= '</div>';
			$step1_details .= '</div>';


	
		
		
		
		}
		
		
		}
	
	
	
	
	
	
	
	if($step_two_title){
		$step2_details ='';
	
	
		
	if($icon2_animation_style == 'animated2'){
		
			$media2 = '';
			if($icon2_name) {	
				$media2  = '<div class="sppb-icon">';
				$media2  .= '<span style="display:inline-block;;">';
				$media2  .= '<i class="fa '. $icon2_name .' faa-'. $icon2_animated .' animated" style="font-size:' . $icon2_size . 'px;"></i>';
				$media2  .= '</span>';
				$media2  .= '</div>';
			}
		
			//Title
			$step2_title = '';
			if($step_two_title) {
				$step2_title = '<div class="sppb-step_two_title" >' . $step_two_title . '</div>';
			}
		
			//Feature Text
			$step2_text = '';
			if($text2) {
				$step2_text  = '<div class="sppb-step2_text">';
				$step2_text .= $text2;
				$step2_text .= '</div>';
			}
	
			//Output
			$step2_details = '<div class="sppb-col-sm-3 step2_details">';
			$step2_details .= '<div class="sppb-addon sppb-step2">';
			$step2_details .= '<div class="sppb-step2-content">';
			$step2_details .= $media2;
			$step2_details .= $step2_title;
			$step2_details .= $step2_text;
			$step2_details .= '</div>';
			$step2_details .= '</div>';
			$step2_details .= '</div>';
		



	} else if ($icon2_animation_style == 'onparenthover2') {
			
				
		if($icon2_name) {
				$media2  = '<div class="sppb-icon">';
				$media2  .= '<span style="display:inline-block;;">';
				$media2  .= '<i class="fa '. $icon2_name .' faa-'. $icon2_onparenthover .'" style="font-size:' . $icon2_size . 'px;"></i>';
				$media2  .= '</span>';
				$media2  .= '</div>';
			}
		
			//Title
			$step2_title = '';
			if($step_two_title) {
				$step2_title = '<div class="sppb-step_two_title" >' . $step_two_title . '</div>';
			}
		
			//Feature Text
			$step2_text = '';
			if($text2) {
				$step2_text  = '<div class="sppb-step2_text">';
				$step2_text .= $text2;
				$step2_text .= '</div>';
			}
	
			//Output
			$step2_details = '<div class="sppb-col-sm-3 step2_details">';
			$step2_details .= '<div class="sppb-addon sppb-step2">';
			$step2_details .= '<div class="sppb-step2-content faa-parent animated-hover">';
			$step2_details .= $media1;
			$step2_details .= $step2_title;
			$step2_details .= $step2_text;
			$step2_details .= '</div>';
			$step2_details .= '</div>';
			$step2_details .= '</div>';


		
		
		
		
		} else  {
			
				if($icon2_name) {
				$media2  = '<div class="sppb-icon">';
				$media2  .= '<span style="display:inline-block;;">';
				$media2  .= '<i class="fa '. $icon2_name .' " style="font-size:' . $icon2_size . 'px;"></i>';
				$media2  .= '</span>';
				$media2  .= '</div>';
			}
		
			//Title
			$step2_title = '';
			if($step_two_title) {
				$step2_title = '<div class="sppb-step_two_title" >' . $step_two_title . '</div>';
			}
		
			//Feature Text
			$step2_text = '';
			if($text2) {
				$step2_text  = '<div class="sppb-step2_text">';
				$step2_text .= $text2;
				$step2_text .= '</div>';
			}
	
			//Output
			$step2_details = '<div class="sppb-col-sm-3 step2_details">';
			$step2_details .= '<div class="sppb-addon sppb-step2">';
			$step2_details .= '<div class="sppb-step2-content">';
			$step2_details .= $media2;
			$step2_details .= $step2_title;
			$step2_details .= $step2_text;
			$step2_details .= '</div>';
			$step2_details .= '</div>';
			$step2_details .= '</div>';


		
		
		
		
		}
		
	
	
	
	}
	
	
	
	
	
	
	
	
	
	if($step_three_title){
		$step3_details ='';
	
	
		
	if($icon3_animation_style == 'animated3'){
		
			$media3 = '';
			if($icon3_name) {	
				$media3  = '<div class="sppb-icon">';
				$media3  .= '<span style="display:inline-block;;">';
				$media3  .= '<i class="fa '. $icon3_name .' faa-'. $icon3_animated .' animated" style="font-size:' . $icon3_size . 'px;"></i>';
				$media3  .= '</span>';
				$media3  .= '</div>';
			}
		
			//Title
			$step3_title = '';
			if($step_three_title) {
				$step3_title = '<div class="sppb-step_three_title" >' . $step_three_title . '</div>';
			}
		
			//Feature Text
			$step3_text = '';
			if($text3) {
				$step3_text  = '<div class="sppb-step3_text">';
				$step3_text .= $text3;
				$step3_text .= '</div>';
			}
	
			//Output
			$step3_details = '<div class="sppb-col-sm-3 step3_details">';
			$step3_details .= '<div class="sppb-addon sppb-step3">';
			$step3_details .= '<div class="sppb-step3-content">';
			$step3_details .= $media3;
			$step3_details .= $step3_title;
			$step3_details .= $step3_text;
			$step3_details .= '</div>';
			$step3_details .= '</div>';
			$step3_details .= '</div>';

		



	} else if ($icon3_animation_style == 'onparenthover3') {
			
				$media3 = '';
		if($icon3_name) {
				$media3  = '<div class="sppb-icon">';
				$media3  .= '<span style="display:inline-block;;">';
				$media3  .= '<i class="fa '. $icon3_name .' faa-'. $icon3_onparenthover .'" style="font-size:' . $icon3_size . 'px;"></i>';
				$media3  .= '</span>';
				$media3  .= '</div>';
			}
		
			//Title
			$step3_title = '';
			if($step_three_title) {
				$step3_title = '<div class="sppb-step_three_title" >' . $step_three_title . '</div>';
			}
		
			//Feature Text
			$step3_text = '';
			if($text3) {
				$step3_text  = '<div class="sppb-step3_text">';
				$step3_text .= $text3;
				$step3_text .= '</div>';
			}
	
			//Output
			$step3_details = '<div class="sppb-col-sm-3 step3_details">';
			$step3_details .= '<div class="sppb-addon sppb-step3">';
			$step3_details .= '<div class="sppb-step3-content faa-parent animated-hover">';
			$step3_details .= $media3;
			$step3_details .= $step3_title;
			$step3_details .= $step3_text;
			$step3_details .= '</div>';
			$step3_details .= '</div>';
			$step3_details .= '</div>';


		
		
		
		
		} else  {
				$media3 = '';
				if($icon3_name) {
				$media3  = '<div class="sppb-icon">';
				$media3  .= '<span style="display:inline-block;;">';
				$media3  .= '<i class="fa '. $icon3_name .' " style="font-size:' . $icon3_size . 'px;"></i>';
				$media3  .= '</span>';
				$media3  .= '</div>';
			}
		
			//Title
			$step3_title = '';
			if($step_three_title) {
				$step3_title = '<div class="sppb-step_three_title" >' . $step_three_title . '</div>';
			}
		
			//Feature Text
			$step3_text = '';
			if($text3) {
				$step3_text  = '<div class="sppb-step3_text">';
				$step3_text .= $text3;
				$step3_text .= '</div>';
			}
	
			//Output
			$step3_details = '<div class="sppb-col-sm-3 step3_details">';
			$step3_details .= '<div class="sppb-addon sppb-step3">';
			$step3_details .= '<div class="sppb-step3-content">';
			$step3_details .= $media3;
			$step3_details .= $step3_title;
			$step3_details .= $step3_text;
			$step3_details .= '</div>';
			$step3_details .= '</div>';
			$step3_details .= '</div>';

		
		
		
		
		}
		
	}
	$output = '<div class="three_steps_addon"><div class="three_steps_inner">';
	$output .= $step_details;
	$output .= $step1_details;
	$output .= $step2_details;
	$output .= $step3_details;
	$output .= '</div></div>';
	return $output;
}