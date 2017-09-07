<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_number_feature','sp_number_feature_addon');

function sp_number_feature_addon($atts){


	extract(spAddonAtts(array(
		"title"						=> '',
		"heading_selector" 			=> 'h3',
		"title_fontsize" 			=> '',
		"title_fontweight" 			=> '',
		"heading_transform" 		=> '',
		"title_text_color" 			=> '',
			
		"title_url"					=> '',		
		"title_position"			=> 'before',
		"feature_type"				=> 'icon',
		"feature_image"				=> '',
		'icon_name' 				=> '',
		'icon_color' 				=> '',
		'icon_color_hover' 			=> '',
		'icon_size' 				=> '',
		'icon_border_color' 		=> '',
		'icon_border_color_hover' 	=> '',
		'icon_border_width' 		=> '',
		'icon_border_radius' 		=> '',
		'icon_style' 				=> '',
		'icon_background' 			=> '',
		'icon_background_hover' 	=> '',
		'icon_margin_top' 			=> '',
		'icon_margin_bottom' 		=> '',
		'icon_margin_right' 		=> '',
		'icon_margin_left' 			=> '',
		'icon_padding' 				=> '',
		'text'						=> '',
		'alignment' 				=> '',
		'class'						=> '',
		
		'box_bg_color'				=> '',
		'box_bg_color_hover'		=> '',
		'box_border_color'			=> '',
		'box_border_color_hover'	=> '',
		'box_border_width'			=> '',
		'right_arrow'				=> '',
		'box_left_margin'				=> '',
		'text_color'				=> '',
		'text_color_hover'			=> '',
		
		
		'icon_animation_style'		=> '',
		'icon_animated'				=> '',
		'icon_onhover'				=> '',
		'icon_onparenthover'		=> '',
		
		
		), $atts));


	
		$uniqueid = uniqid();
	
		$doc = JFactory::getDocument();
		$style_hover = '.feature-boxed-'. $uniqueid .' .sppb-addon-content:hover {';
		$style_hover	.= 'background-color:'. $box_bg_color_hover .' !important;';
		$style_hover	.= 'color:'. $text_color_hover .' !important;';
		$style_hover	.= 'border-color:'. $box_border_color_hover .' !important;';
		$style_hover	.= '}';
		
		
		$style_icon_hover    = '.feature-boxed-'. $uniqueid .' .sppb-addon-content:hover .sppb-icon span {';
		$style_icon_hover	.= 'background:'. $icon_background_hover .' !important;';
		$style_icon_hover	.= 'color:'. $icon_color_hover .' !important;';
		$style_icon_hover	.= 'border-color:'. $icon_border_color_hover .' !important;';
		$style_icon_hover	.= '}';
		
		$arrow_color 	 = '.feature-boxed-'. $uniqueid .' .sppb-addon-content.right_arrow_yes:after {';
		$arrow_color	.= 'color:'. $box_border_color .' !important;';
		$arrow_color	.= '}';
		
		$arrow_color_hover 	 = '.feature-boxed-'. $uniqueid .' .sppb-addon-content.right_arrow_yes:hover:after {';
		$arrow_color_hover	.= 'color:'. $box_border_color_hover .' !important;';
		$arrow_color_hover	.= '}';
		
		
		
		
		$doc->addStyleDeclaration($arrow_color_hover);
		$doc->addStyleDeclaration($arrow_color);
		$doc->addStyleDeclaration($style_icon_hover);
		$doc->addStyleDeclaration($style_hover);
		
		
		
		
		

	//Image or icon position
	if($title_position == 'before') {
		$icon_image_position = 'after';
	} else if($title_position == 'after') {
		$icon_image_position = 'before';
	} else {
		$icon_image_position = $title_position;
	}

	//Reset Alignment for left and right style
	if( ($icon_image_position=='left') || ($icon_image_position=='right') ) {
		$alignment = 'sppb-text-' . $icon_image_position;
	}
	
	
	$box_style = '';
	
	if($box_bg_color) $box_style .= 'background-color:'. $box_bg_color . ';';
	if($text_color) $box_style .= 'color:'. $text_color . ';';
	if($box_bg_color) $box_style .= 'padding:30px;';
	if($box_border_color) $box_style .= 'border-color:'. $box_border_color .';';
	if($box_border_width) $box_style .= 'border-style:solid; border-width:'. $box_border_width .'px;';
	if($box_left_margin) $box_style .= 'margin-left:'. $box_left_margin .'px;';
	
	

	//Icon or Image
	$media = '';
	
	if($icon_animation_style == 'animated'){
		if($feature_type == 'icon') {
			if($icon_name) {
				$style = 'text-align:center;';
				$font_size = '';
	
				if($icon_margin_top) $style .= 'margin-top:' . (int) $icon_margin_top . 'px;';
				if($icon_margin_bottom) $style .= 'margin-bottom:' . (int) $icon_margin_bottom . 'px;';
				if($icon_margin_right) $style .= 'margin-right:' . (int) $icon_margin_right . 'px;';
				if($icon_margin_left) $style .= 'margin-left:' . (int) $icon_margin_left . 'px;';
				if($icon_padding) $style .= 'padding:' . (int) $icon_padding  . 'px;';
				if($icon_color) $style .= 'color:' . $icon_color  . ';';
				if($icon_background) $style .= 'background-color:' . $icon_background  . ';';
				if($icon_border_color) $style .= 'border-style:solid;border-color:' . $icon_border_color  . ';';
				if($icon_border_width) $style .= 'border-width:' . (int) $icon_border_width  . 'px;';
				if($icon_border_radius) $style .= 'border-radius:' . (int) $icon_border_radius  . 'px;';
	
				if($icon_size) $font_size .= 'font-size:' . (int) $icon_size . 'px;width:' . (int) $icon_size . 'px;height:' . (int) $icon_size . 'px;line-height:' . (int) $icon_size . 'px;';
	
				$media  .= '<div class="sppb-icon">';
				$media  .= '<span style="display:inline-block;' . $style . ';">';
				$media  .= '<span class=" faa-'. $icon_animated .' animated" style="' . $font_size . ';">'.$icon_name.'</span>';
				$media  .= '</span>';
				$media  .= '</div>';
			}
		} else {
	
			if($feature_image) { 
	
				$img_style ='';
	
				if($icon_margin_top) $img_style .= 'margin-top:' . (int) $icon_margin_top . 'px;';
				if($icon_margin_bottom) $img_style .= 'margin-bottom:' . (int) $icon_margin_bottom . 'px;';
				if($icon_margin_right) $img_style .= 'margin-right:' . (int) $icon_margin_right . 'px;';
				if($icon_margin_left) $style .= 'margin-left:' . (int) $icon_margin_left . 'px;';
				$media  .= '<span style="display:inline-block;' . $img_style . ';">';
				$media  .= '<img class="sppb-img-responsive" src="' . $feature_image . '" alt="">';
				$media  .= '</span>';
			}
		}
		
		//Title
	$feature_title = '';
	if($title) {

		$title_style = '';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
		if($heading_transform) $title_style .= 'text-transform:'.$heading_transform.';';


		$heading_class = '';

		if( ($icon_image_position=='left') || ($icon_image_position=='right') ) {
			$heading_class = ' sppb-media-heading';
		}

		if($title_url) $feature_title .= '<a href="'. $title_url .'">';

		$feature_title .= '<'.$heading_selector.' class="sppb-feature-box-title'. $heading_class .'" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';

		if($title_url) $feature_title .= '</a>';

	}

	//Feature Text
	$feature_text  = '<div class="sppb-addon-text">';
	$feature_text .= $text;
	$feature_text .= '</div>';

	//Output
	$output  = '<div class="sppb-addon sppb-addon-feature-boxed number_feature ' . $alignment . ' ' . $class . ' feature-boxed-'. $uniqueid .'">';
	$output .= '<div class="sppb-addon-content '. $right_arrow .'" style="'. $box_style .'">';

	if ($icon_image_position == 'before') {

		if($media) $output .= $media;
		
		if($title) $output .= $feature_title;

		$output .= $feature_text;

	} else if ($icon_image_position == 'after') {
		
		if($title) $output .= $feature_title;

		if($media) $output .= $media;

		$output .= $feature_text;

	} else {

		if($media) {
			$output .= '<div class="sppb-media">';
			$output .= '<div class="pull-'. $icon_image_position .'">';
			$output .= $media;
			$output .= '</div>';
			$output .= '<div class="sppb-media-body">';
			if($title) $output .= $feature_title;
			$output .= $feature_text;
			$output .= '</div>';
			$output .= '</div>';
		}

	}

	$output .= '</div>';

	$output .= '</div>';

	return $output;
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	} else if ($icon_animation_style == 'onhover' ){
			
				if($feature_type == 'icon') {
					if($icon_name) {
						$style = 'text-align:center;';
						$font_size = '';
			
						if($icon_margin_top) $style .= 'margin-top:' . (int) $icon_margin_top . 'px;';
						if($icon_margin_bottom) $style .= 'margin-bottom:' . (int) $icon_margin_bottom . 'px;';
						if($icon_margin_right) $style .= 'margin-right:' . (int) $icon_margin_right . 'px;';
						if($icon_margin_left) $style .= 'margin-left:' . (int) $icon_margin_left . 'px;';
						if($icon_padding) $style .= 'padding:' . (int) $icon_padding  . 'px;';
						if($icon_color) $style .= 'color:' . $icon_color  . ';';
						if($icon_background) $style .= 'background-color:' . $icon_background  . ';';
						if($icon_border_color) $style .= 'border-style:solid;border-color:' . $icon_border_color  . ';';
						if($icon_border_width) $style .= 'border-width:' . (int) $icon_border_width  . 'px;';
						if($icon_border_radius) $style .= 'border-radius:' . (int) $icon_border_radius  . 'px;';
			
						if($icon_size) $font_size .= 'font-size:' . (int) $icon_size . 'px;width:' . (int) $icon_size . 'px;height:' . (int) $icon_size . 'px;line-height:' . (int) $icon_size . 'px;';
			
						$media  .= '<div class="sppb-icon">';
						$media  .= '<span style="display:inline-block;' . $style . ';">';
						$media  .= '<span class=" faa-'. $icon_onhover .' animated-hover" style="' . $font_size . ';">'.$icon_name.'</span>';

						$media  .= '</span>';
						$media  .= '</div>';
					}
				} else {
			
					if($feature_image) { 
			
						$img_style ='';
			
						if($icon_margin_top) $img_style .= 'margin-top:' . (int) $icon_margin_top . 'px;';
						if($icon_margin_bottom) $img_style .= 'margin-bottom:' . (int) $icon_margin_bottom . 'px;';
						if($icon_margin_right) $img_style .= 'margin-right:' . (int) $icon_margin_right . 'px;';
						if($icon_margin_left) $style .= 'margin-left:' . (int) $icon_margin_left . 'px;';
						$media  .= '<span style="display:inline-block;' . $img_style . ';">';
						$media  .= '<img class="sppb-img-responsive" src="' . $feature_image . '" alt="">';
						$media  .= '</span>';
					}
				}
		
		
		
		
		
		//Title
	$feature_title = '';
	if($title) {

		$title_style = '';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
		if($heading_transform) $title_style .= 'text-transform:'.$heading_transform.';';
		
		$heading_class = '';

		if( ($icon_image_position=='left') || ($icon_image_position=='right') ) {
			$heading_class = ' sppb-media-heading';
		}

		if($title_url) $feature_title .= '<a href="'. $title_url .'">';

		$feature_title .= '<'.$heading_selector.' class="sppb-feature-box-title'. $heading_class .'" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';

		if($title_url) $feature_title .= '</a>';

	}

	//Feature Text
	$feature_text  = '<div class="sppb-addon-text">';
	$feature_text .= $text;
	$feature_text .= '</div>';

	//Output
	$output  = '<div class="sppb-addon sppb-addon-feature-boxed number_feature ' . $alignment . ' ' . $class . ' feature-boxed-'. $uniqueid .'">';
	$output .= '<div class="sppb-addon-content '. $right_arrow .'" style="'. $box_style .'">';

	if ($icon_image_position == 'before') {

		if($media) $output .= $media;
		
		if($title) $output .= $feature_title;

		$output .= $feature_text;

	} else if ($icon_image_position == 'after') {
		
		if($title) $output .= $feature_title;

		if($media) $output .= $media;

		$output .= $feature_text;

	} else {

		if($media) {
			$output .= '<div class="sppb-media">';
			$output .= '<div class="pull-'. $icon_image_position .'">';
			$output .= $media;
			$output .= '</div>';
			$output .= '<div class="sppb-media-body">';
			if($title) $output .= $feature_title;
			$output .= $feature_text;
			$output .= '</div>';
			$output .= '</div>';
		}

	}

	$output .= '</div>';

	$output .= '</div>';

	return $output;
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				
		} else if ($icon_animation_style == 'onparenthover') {
			
				if($feature_type == 'icon') {
					if($icon_name) {
						$style = 'text-align:center;';
						$font_size = '';
			
						if($icon_margin_top) $style .= 'margin-top:' . (int) $icon_margin_top . 'px;';
						if($icon_margin_bottom) $style .= 'margin-bottom:' . (int) $icon_margin_bottom . 'px;';
						if($icon_margin_right) $style .= 'margin-right:' . (int) $icon_margin_right . 'px;';
						if($icon_margin_left) $style .= 'margin-left:' . (int) $icon_margin_left . 'px;';
						if($icon_padding) $style .= 'padding:' . (int) $icon_padding  . 'px;';
						if($icon_color) $style .= 'color:' . $icon_color  . ';';
						if($icon_background) $style .= 'background-color:' . $icon_background  . ';';
						if($icon_border_color) $style .= 'border-style:solid;border-color:' . $icon_border_color  . ';';
						if($icon_border_width) $style .= 'border-width:' . (int) $icon_border_width  . 'px;';
						if($icon_border_radius) $style .= 'border-radius:' . (int) $icon_border_radius  . 'px;';
			
						if($icon_size) $font_size .= 'font-size:' . (int) $icon_size . 'px;width:' . (int) $icon_size . 'px;height:' . (int) $icon_size . 'px;line-height:' . (int) $icon_size . 'px;';
			
						$media  .= '<div class="sppb-icon ">';
						$media  .= '<span style="display:inline-block;' . $style . ';">';
						$media  .= '<span class=" faa-'. $icon_onparenthover .'" style="' . $font_size . ';">'.$icon_name.'</span>';

						$media  .= '</span>';
						$media  .= '</div>';
					}
				} else {
			
					if($feature_image) { 
			
						$img_style ='';
			
						if($icon_margin_top) $img_style .= 'margin-top:' . (int) $icon_margin_top . 'px;';
						if($icon_margin_bottom) $img_style .= 'margin-bottom:' . (int) $icon_margin_bottom . 'px;';
						if($icon_margin_right) $img_style .= 'margin-right:' . (int) $icon_margin_right . 'px;';
						if($icon_margin_left) $style .= 'margin-left:' . (int) $icon_margin_left . 'px;';
						$media  .= '<span style="display:inline-block;' . $img_style . ';">';
						$media  .= '<img class="sppb-img-responsive" src="' . $feature_image . '" alt="">';
						$media  .= '</span>';
					}
				}
		
		
		
		//Title
	$feature_title = '';
	if($title) {

		$title_style = '';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';
		if($heading_transform) $title_style .= 'text-transform:'.$heading_transform.';';

		$heading_class = '';

		if( ($icon_image_position=='left') || ($icon_image_position=='right') ) {
			$heading_class = ' sppb-media-heading';
		}

		if($title_url) $feature_title .= '<a href="'. $title_url .'">';

		$feature_title .= '<'.$heading_selector.' class="sppb-feature-box-title'. $heading_class .'" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';

		if($title_url) $feature_title .= '</a>';

	}

	//Feature Text
	$feature_text  = '<div class="sppb-addon-text">';
	$feature_text .= $text;
	$feature_text .= '</div>';

	//Output
	$output  = '<div class="sppb-addon sppb-addon-feature-boxed number_feature ' . $alignment . ' ' . $class . ' feature-boxed-'. $uniqueid .'">';
	$output .= '<div class="sppb-addon-content '. $right_arrow .' faa-parent animated-hover" style="'. $box_style .'">';

	if ($icon_image_position == 'before') {

		if($media) $output .= $media;
		
		if($title) $output .= $feature_title;

		$output .= $feature_text;

	} else if ($icon_image_position == 'after') {
		
		if($title) $output .= $feature_title;

		if($media) $output .= $media;

		$output .= $feature_text;

	} else {

		if($media) {
			$output .= '<div class="sppb-media">';
			$output .= '<div class="pull-'. $icon_image_position .'">';
			$output .= $media;
			$output .= '</div>';
			$output .= '<div class="sppb-media-body">';
			if($title) $output .= $feature_title;
			$output .= $feature_text;
			$output .= '</div>';
			$output .= '</div>';
		}

	}

	$output .= '</div>';

	$output .= '</div>';

	return $output;
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		} else  {
			
				if($feature_type == 'icon') {
					if($icon_name) {
						$style = 'text-align:center;';
						$font_size = '';
			
						if($icon_margin_top) $style .= 'margin-top:' . (int) $icon_margin_top . 'px;';
						if($icon_margin_bottom) $style .= 'margin-bottom:' . (int) $icon_margin_bottom . 'px;';
						if($icon_margin_right) $style .= 'margin-right:' . (int) $icon_margin_right . 'px;';
						if($icon_margin_left) $style .= 'margin-left:' . (int) $icon_margin_left . 'px;';
						if($icon_padding) $style .= 'padding:' . (int) $icon_padding  . 'px;';
						if($icon_color) $style .= 'color:' . $icon_color  . ';';
						if($icon_background) $style .= 'background-color:' . $icon_background  . ';';
						if($icon_border_color) $style .= 'border-style:solid;border-color:' . $icon_border_color  . ';';
						if($icon_border_width) $style .= 'border-width:' . (int) $icon_border_width  . 'px;';
						if($icon_border_radius) $style .= 'border-radius:' . (int) $icon_border_radius  . 'px;';
			
						if($icon_size) $font_size .= 'font-size:' . (int) $icon_size . 'px;width:' . (int) $icon_size . 'px;height:' . (int) $icon_size . 'px;line-height:' . (int) $icon_size . 'px;';
			
						$media  .= '<div class="sppb-icon">';
						$media  .= '<span style="display:inline-block;' . $style . ';">';
						$media  .= '<span style="' . $font_size . ';">'.$icon_name.'</span>';
						$media  .= '</span>';
						$media  .= '</div>';
					}
				} else {
			
					if($feature_image) { 
			
						$img_style ='';
			
						if($icon_margin_top) $img_style .= 'margin-top:' . (int) $icon_margin_top . 'px;';
						if($icon_margin_bottom) $img_style .= 'margin-bottom:' . (int) $icon_margin_bottom . 'px;';
						if($icon_margin_right) $img_style .= 'margin-right:' . (int) $icon_margin_right . 'px;';
						if($icon_margin_left) $style .= 'margin-left:' . (int) $icon_margin_left . 'px;';
						$media  .= '<span style="display:inline-block;' . $img_style . ';">';
						$media  .= '<img class="sppb-img-responsive" src="' . $feature_image . '" alt="">';
						$media  .= '</span>';
					}
				}
		
		
		
		
		
		//Title
	$feature_title = '';
	if($title) {

		$title_style = '';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';
		if($title_fontweight) $title_style .= 'font-weight:'.$title_fontweight.';';

		$heading_class = '';

		if( ($icon_image_position=='left') || ($icon_image_position=='right') ) {
			$heading_class = ' sppb-media-heading';
		}

		if($title_url) $feature_title .= '<a href="'. $title_url .'">';

		$feature_title .= '<'.$heading_selector.' class="sppb-feature-box-title'. $heading_class .'" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';

		if($title_url) $feature_title .= '</a>';

	}

	//Feature Text
	$feature_text  = '<div class="sppb-addon-text">';
	$feature_text .= $text;
	$feature_text .= '</div>';

	//Output
	$output  = '<div class="sppb-addon sppb-addon-feature-boxed number_feature ' . $alignment . ' ' . $class . ' feature-boxed-'. $uniqueid .'">';
	$output .= '<div class="sppb-addon-content '. $right_arrow .'" style="'. $box_style .'">';

	if ($icon_image_position == 'before') {

		if($media) $output .= $media;
		
		if($title) $output .= $feature_title;

		$output .= $feature_text;

	} else if ($icon_image_position == 'after') {
		
		if($title) $output .= $feature_title;

		if($media) $output .= $media;

		$output .= $feature_text;

	} else {

		if($media) {
			$output .= '<div class="sppb-media">';
			$output .= '<div class="pull-'. $icon_image_position .'">';
			$output .= $media;
			$output .= '</div>';
			$output .= '<div class="sppb-media-body">';
			if($title) $output .= $feature_title;
			$output .= $feature_text;
			$output .= '</div>';
			$output .= '</div>';
		}

	}

	$output .= '</div>';

	$output .= '</div>';

	return $output;
		
		
		
		
		}
		
	
	
	
	
	
	
	
	
	
	
}