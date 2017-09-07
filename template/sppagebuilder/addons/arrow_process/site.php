<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

AddonParser::addAddon('sp_arrow_process','sp_arrow_process_addon');

function sp_arrow_process_addon($atts) {
	extract(spAddonAtts(array(
		'icon_name' 		=> '',
		'icon_color' 		=> '',
		'icon_size' 		=> '',
		'icon_margin' 		=> '',
		'title' 			=> '',
		'title_margin' 		=> '',
		'title_color' 		=> '',
		'title_hover_color' => '',
		'arrow_color' 		=> '',
		'arrow_hover_color' => '',
		'text' 				=> '',
		'text_color' 		=> '',
		'alignment' 		=> '',
		'class' 			=> '',
		), $atts));
		
		
		$uniqueid = uniqid();
		
		$doc = JFactory::getDocument();
		
		if($arrow_color) {
			$arrow_style 	 = '.sppb-addon-ap-'. $uniqueid .' .sppb-addon-arrow {';
			$arrow_style	.= 'background-color:'. $arrow_color .';';
			$arrow_style	.= '}';
			$arrow_style 	.= '.sppb-addon-ap-'. $uniqueid .' .sppb-addon-arrow:before {';
			$arrow_style	.= 'border-color: transparent transparent '. $arrow_color .' transparent;';
			$arrow_style	.= '}';
			$arrow_style 	.= '.sppb-addon-ap-'. $uniqueid .' .sppb-addon-arrow:after {';
			$arrow_style	.= 'border-color: transparent '. $arrow_color .' transparent transparent;';
			$arrow_style	.= '}';
			$arrow_style 	.= '.sppb-addon-ap-'. $uniqueid .' .sppb-addon-arrow .sppb-addon-arrow-title:before {';
			$arrow_style	.= 'border-color: transparent transparent transparent '. $arrow_color .';';
			$arrow_style	.= '}';
			$arrow_style 	.= '.sppb-addon-ap-'. $uniqueid .' .sppb-addon-arrow .sppb-addon-arrow-title:after {';
			$arrow_style	.= 'border-color:'. $arrow_color .' transparent transparent transparent;';
			$arrow_style	.= '}';
			
		$doc->addStyleDeclaration($arrow_style);
		}
		
		if($arrow_hover_color) {
		
			$arrow_hover_style 	 = '.sppb-addon-ap-'. $uniqueid .':hover .sppb-addon-arrow {';
			$arrow_hover_style	.= 'background-color:'. $arrow_hover_color .' ;';
			$arrow_hover_style	.= '}';
			$arrow_hover_style 	.= '.sppb-addon-ap-'. $uniqueid .':hover .sppb-addon-arrow:before {';
			$arrow_hover_style	.= 'border-color: transparent transparent '. $arrow_hover_color .' transparent;';
			$arrow_hover_style	.= '}';
			$arrow_hover_style 	.= '.sppb-addon-ap-'. $uniqueid .':hover .sppb-addon-arrow:after {';
			$arrow_hover_style	.= 'border-color: transparent '. $arrow_hover_color .' transparent transparent;';
			$arrow_hover_style	.= '}';
			$arrow_hover_style 	.= '.sppb-addon-ap-'. $uniqueid .':hover .sppb-addon-arrow .sppb-addon-arrow-title:before {';
			$arrow_hover_style	.= 'border-color: transparent transparent transparent '. $arrow_hover_color .';';
			$arrow_hover_style	.= '}';
			$arrow_hover_style 	.= '.sppb-addon-ap-'. $uniqueid .':hover .sppb-addon-arrow .sppb-addon-arrow-title:after {';
			$arrow_hover_style	.= 'border-color:'. $arrow_hover_color .' transparent transparent transparent;';
			$arrow_hover_style	.= '}';

		$doc->addStyleDeclaration($arrow_hover_style);
		
		}
		
		if($title_hover_color) {
		
			$title_hover_style 	 = '.sppb-addon-ap-'. $uniqueid .':hover .sppb-addon-arrow .sppb-addon-arrow-title {';
			$title_hover_style	.= 'color:'. $arrow_hover_color .' ;';
			$title_hover_style	.= '}';

		$doc->addStyleDeclaration($title_hover_style);
		
		}
		
		
		
		
		
		$style = '';
		if($icon_color) $style .= 'color:' . $icon_color  . ';';
		if($icon_size) $style .= 'font-size:' . $icon_size . 'px;';
		if($icon_margin) $style .= 'margin:' . $icon_margin . ';';
		
		$title_style = '';
		if($title_color) $title_style .= 'color:' . $title_color  . ';';
		if($title_margin) $title_style .= 'margin:' . $title_margin . ';';
		
		
		$output   = '<div class="sppb-addon sppb-addon-arrow-process sppb-addon-ap-'. $uniqueid .' '. $class .'" style="text-align:'.$alignment.';">';
		$output  .= '<div class="sppb-icon ">';
		$output  .= '<span style="' . $style . ';" class="hvr-icon-bob">';
		$output  .= '<i class="fa ' . $icon_name . '"></i>';
		$output  .= '</span>';
		$output  .= '</div>';
		
		$output  .= '<div class="sppb-addon-arrow" style="'.$title_style.'">';
		$output  .= '<div class="sppb-addon-arrow-title">';
		$output  .= $title;
		$output  .= '</div>';
		$output  .= '</div>';
		
		$output  .= '<div class="sppb-addon-arrow-text" style="color:'.$text_color.';">';
		$output  .= $text;
		$output  .= '</div>';


		$output  .= '</div>';
		
		return $output;
	

}