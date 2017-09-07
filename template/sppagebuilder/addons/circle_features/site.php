<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_circle_features','sp_circle_features_addon');
AddonParser::addAddon('sp_circle_features_item','sp_circle_features_item_addon');

function sp_circle_features_addon($atts, $content){

	extract(spAddonAtts(array(
		'center_icon'=>'',
		'center_icon_size'=>'',
		'center_icon_color'=>'',
		'center_icon_hover_color'=>'',
		'center_icon_bg_color'=>'',
		'center_icon_bg_hover_color'=>'',
		'center_icon_border_color'=>'',
		'center_icon_border_hover_color'=>'',
		'center_icon_border_width'=>'',
		'center_icon_animation'=>'',
		'center_icon_padding'=>'',
		'circle_color'=>'',
		'circle_hover_color'=>'',
		'circle_thikness'=>'',
		'circle_style'=>'',
		'circle_padding'=>'',
		
		
		"class"=>'',
		), $atts));
		
		$uniqueid = uniqid();
		
		
		$doc = JFactory::getDocument();
		
		$circle_hover = '.circle-feature'.$uniqueid.' .sppb-circle-feature-inner:hover {';
		$circle_hover	.= 'border-color:'. $circle_hover_color .' !important;';
		$circle_hover	.= '}';
	
		$main_icon_hover = '.circle-feature'.$uniqueid.' .sppb-circle-feature-inner .center_icon:hover {';
		$main_icon_hover	.= 'color:'. $center_icon_hover_color .' !important;';
		$main_icon_hover	.= 'background:'. $center_icon_bg_hover_color .' !important;';
		$main_icon_hover	.= 'border-color:'. $center_icon_border_hover_color .' !important;';
		$main_icon_hover	.= '}';
	
	
		$doc->addStyleDeclaration($circle_hover);
		$doc->addStyleDeclaration($main_icon_hover);
		
		
		$icon_width_main = ($center_icon_padding * 2) + ($center_icon_border_width * 2) + $center_icon_size + 10;
		

	$output  = ' <div style="" class="sppb-circle-feature ' . $class . ' circle-feature'.$uniqueid.'" >';
	$output .= '<div class="sppb-circle-feature-inner " style="border-color:'.$circle_color.'; border-width:'.$circle_thikness.'px;border-style:'.$circle_style.';padding:'.$circle_padding.'px;">';
	$output .= AddonParser::spDoAddon($content);
	$output	.= '<span class="center_icon faa-parent animated-hover " style="font-size:'.$center_icon_size.'px; color:'.$center_icon_color.'; background:'.$center_icon_bg_color.'; border-color:'.$center_icon_border_color.'; border-width:'.$center_icon_border_width.'px; padding:'. $center_icon_padding .'px; width:'.$icon_width_main.'px; height:'.$icon_width_main.'px;line-height:'.$center_icon_size.'px;" ><i class="fa ' . $center_icon . ' faa-'. $center_icon_animation .'"></i></span></div>';
	
	$output	.= '</div>';



	return $output;

}

function sp_circle_features_item_addon( $atts ){

	extract(spAddonAtts(array(
		"title"=>'',
		"icon"=>'',
		'icon_size'=>'',
		"icon_color"=>'',
		"icon_bg_color" => '',
		"icon_border_color"=>'',
		"icon_border_width"=>'',
		"icon_position"=>'',
		"icon_padding"=>'',
		"icon_animation"=>'',
		
		), $atts));

	
	
	$icon_circle_style = '';
		if($icon_color) $icon_circle_style .= 'color:' . $icon_color  . ';';
		if($icon_size) $icon_circle_style .= 'font-size:'.$icon_size.'px;line-height:'.$icon_size.'px;';
		if($icon_bg_color) $icon_circle_style .= 'background:'.$icon_bg_color.';';
		if($icon_border_color) $icon_circle_style .= 'border-color:'.$icon_border_color.';';
		if($icon_padding) $icon_circle_style .= 'padding:'.$icon_padding.'px;';
		
		
	$icon_item_width = ($icon_padding * 2) + ($icon_border_width * 2 ) + $icon_size ;
	
	
	
	
		if($icon_position == 'top') {
			$icon_pospix = ($icon_item_width/2);
			$icon_pos = 'top:-'. $icon_pospix .'px; left:50%; margin-left:-'. $icon_pospix .'px;';
		}
		
		if($icon_position == 'right') {
			$icon_pospix = ($icon_item_width/2);
			$icon_pos = 'right:-'. $icon_pospix .'px; top:50%; margin-top:-'. $icon_pospix .'px;';
		}
		
		if($icon_position == 'bottom') {
			$icon_pospix = ($icon_item_width/2);
			$icon_pos = 'bottom:-'. $icon_pospix .'px; left:50%; margin-left:-'. $icon_pospix .'px;';
		}
		
		if($icon_position == 'left') {
			$icon_pospix = ($icon_item_width/2);
			$icon_pos = 'left:-'. $icon_pospix .'px; top:50%; margin-top:-'. $icon_pospix .'px;';
		}
		
		if($icon_position == 'topright') {
			$icon_pospix = ($icon_item_width/2);
			$icon_pos = 'top:15%; right:15%; margin-right:-'. $icon_pospix .'px; margin-top:-'. $icon_pospix .'px;';
		}
		
		if($icon_position == 'rightbottom') {
			$icon_pospix = ($icon_item_width/2);
			$icon_pos = 'right:15%; bottom:15%; margin-right:-'. $icon_pospix .'px; margin-bottom:-'. $icon_pospix .'px;';
		}
		
		if($icon_position == 'bottomleft') {
			$icon_pospix = ($icon_item_width/2);
			$icon_pos = 'left:15%; bottom:15%; margin-left:-'. $icon_pospix .'px; margin-bottom:-'. $icon_pospix .'px;';
		}
		
		if($icon_position == 'lefttop') {
			$icon_pospix = ($icon_item_width/2);
			$icon_pos = 'left:15%; top:15%; margin-left:-'. $icon_pospix .'px; margin-top:-'. $icon_pospix .'px;';
		}
	
	$output   = '<div class="sppb-circle-feature-item" style="'. $icon_pos .'">';
	if($title) {
	$output  .= '<span class="icon_circle-title">'.$title.'</span>';
	}
	$output  .= '<span class="icon-circle-item " style="'. $icon_circle_style .' width:'.$icon_item_width.'px;height:'.$icon_item_width.'px; border-width:'.$icon_border_width.'px"><i class="fa ' . $icon . ' faa-'. $icon_animation .' animated-hover"></i></span>';		
	$output  .= '</div>';

	return $output;

}