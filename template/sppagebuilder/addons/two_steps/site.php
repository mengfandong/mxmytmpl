<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_two_steps','sp_two_steps_addon');

function sp_two_steps_addon($atts){

	extract(spAddonAtts(array(
		"image" 				=> '',
		"image_width" 			=> '',
		"image_alignment"		=> '',
		"step_number"			=> '',
		"step_number_color"			=> '',
		"step_number_bg"			=> '',
		"step_number_border_color"			=> '',
		"step_number_border_size"			=> '',
		"title" 				=> '',
		"heading_selector" 		=> 'h3',
		"title_fontsize" 		=> '',
		"title_fontweight" 		=> '',
		"title_text_color" 		=> '',
		"title_margin_top" 		=> '',
		"title_margin_bottom" 	=> '',
		'icon_name' 			=> '',
		'icon_color' 			=> '',
		'icon_size' 			=> '',

		'icon_style' 			=> '',
		'icon_margin_top' 		=> '',
		'icon_margin_bottom' 	=> '',
		'icon_margin_right' 	=> '',
		'icon_padding' 			=> '',
		'number'				=> '',
		'duration'				=> '',
		'counter_symbol'		=> '',
		'counter_color'			=> '',
		'counter_size'			=> '',
		"text" 					=> '',
		
		"text_color" 			=> '',
		"background_color" 		=> '',
		"class"=>'',
		), $atts));


	if($image_alignment=='left') {
		$eontent_class = ' sppb-col-sm-offset-6';
	} else {
		$eontent_class = '';
	}
	
	$stepstyle = '';
	
		if($step_number_bg) {
			if($step_number_bg) $stepstyle .= 'background:' . $step_number_bg . ';';
			if($step_number_border_color) $stepstyle .= 'border-color:' . $step_number_border_color . ';';
			if($step_number_border_color) $stepstyle .= 'border-style:solid;';
			if($step_number_border_size) $stepstyle .= 'border-width:' . $step_number_border_size . 'px;';
			if($step_number_color) $stepstyle .= 'color:' . $step_number_color . ';';
		}

	$media = '';

			if($icon_name) {
				$style = 'text-align:center;';
				$font_size = '';
	
				if($icon_margin_top) $style .= 'margin-top:' . (int) $icon_margin_top . 'px;';
				if($icon_margin_bottom) $style .= 'margin-bottom:' . (int) $icon_margin_bottom . 'px;';
				if($icon_margin_right) $style .= 'margin-right:' . (int) $icon_margin_right . 'px;';
				if($icon_padding) $style .= 'padding:' . (int) $icon_padding  . 'px;';
				if($icon_color) $style .= 'color:' . $icon_color  . ';';
				
	
				if($icon_size) $font_size .= 'font-size:' . (int) $icon_size . 'px;width:' . (int) $icon_size . 'px;height:' . (int) $icon_size . 'px;line-height:' . (int) $icon_size . 'px;';
	
				$media  .= '<span style="display:inline-block;' . $style . ';">';
				$media  .= '<i class="fa ' . $icon_name . '" style="' . $font_size . ';"></i>';
				$media  .= '</span>';
		}

		$counter_style='';
		if ($number) {
			if($counter_color) $counter_style .= 'color:' . $counter_color  . ';';
			if($counter_size) $counter_style .= 'font-size:' . $counter_size  . 'px;';
		}
		
		$title_style = '';
		if($title_margin_top !='') $title_style .= 'margin-top:' . (int) $title_margin_top . 'px;';
		if($title_margin_bottom !='') $title_style .= 'margin-bottom:' . (int) $title_margin_bottom . 'px;';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';	

	

		$output  = '<div class="sppb-addon sppb-addon-two-steps aligment-'. $image_alignment .' clearfix ' . $class . '" style="background-color:'. $background_color .'">';

		
		
		$output .= '<div class="sppb-col-sm-8">';
		//Content
		
		$output .= '<div class="step_number" style="'. $stepstyle .'">'. $step_number .'</div>';
		$output .= '<div class="sppb-two-steps">';
		$output .= '<div class="sppb-content-holder">';
		$output .= '<div class="two-steps-icon"><span class="steps_icon">'. $media . '</span>';
		$output .= '<span class="sppb-animated-number" data-digit="'. $number .'" data-duration="' . $duration . '" style="'. $counter_style .'">0</span><span style="'. $counter_style .'">'. $counter_symbol .'</span>';
		$output .= '</div>';
		if ($title) $output .= '<'.$heading_selector.' class="sppb-two-steps-title" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';
		if($text) $output .= '<p class="sppb-two-steps-text" style="color:'. $text_color .'">' . $text . '</p>';
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';
		$output .= '<div class="sppb-col-sm-4">';
		
		
		//Image
		$output .= '<div class="sppb-image-holder" style="background-image:url(' . JURI::base(true) . '/' . $image . ');">';
		
		$output .= '</div>';

		
		
		$output .= '</div>';
	
		$output .= '</div>';
		
		
		
		return $output;
	

	


}