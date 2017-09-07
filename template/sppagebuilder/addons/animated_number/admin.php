<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content', 
		'addon_name'=>'sp_animated_number',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_DESC'),
		'attr'=>array(
			'admin_label'=>array(
					'type'=>'text', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				),
			'number'=>array(
				'type'=>'number', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER_DESC'),
				'placeholder'=>'1000',
				'std'=>'1000',
				),
				
			'pre_symbol'=>array(
				'type'=>'text', 
				'title'=>JText::_('Before Counter Symbol'),
				'desc'=>JText::_('Add Symbol to Before Counter'),
				'placeholder'=>'$',
				),	
				
			'post_symbol'=>array(
				'type'=>'text', 
				'title'=>JText::_('After Counter Symbol'),
				'desc'=>JText::_('Add Symbol to After Counter'),
				'placeholder'=>'K',
				),	
			
			'duration'=>array(
				'type'=>'number', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_DURATION'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_DURATION_DESC'),
				'placeholder'=>'1000',
				'std'=>'1000',
				),
			'counter_title'=>array(
				'type'=>'text',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_TITLE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_TITLE_DESC'),
				'std'=>'Animated Number',
				),
			'alignment'=>array(
				'type'=>'select',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT_DESC'),
				'values'=>array(
					'sppb-text-left'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_LEFT'),
					'sppb-text-center'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CENTER'),
					'sppb-text-right'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_RIGHT'),
					),
				'std'=>'sppb-text-center',
				),
			'separator'=>array(
				'type'=>'separator',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_STYLING'),
				),
			'font_size'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER_FONT_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER_FONT_SIZE_DESC'),
				'placeholder'=>36,
				'std'=>36,
				),
				
			'font_weight'=>array(
				'type'=>'text',
				'title'=>JText::_('Font Weight'),
				'desc'=>JText::_('Add Font Weight'),
				'placeholder'=>400,

				),
					
			'color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER_COLOR_DESC'),
				),
			
			'color_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Number Hover Color'),
				'desc'=>JText::_('Select Number Hover Color'),
				),
				
			'title_font_size'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_TITLE_FONT_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_TITLE_FONT_SIZE_DESC'),
				'placeholder'=>18,
				'std'=>18,
				),
			'title_top_margin'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title Top Margin'),
				'desc'=>JText::_('Add Title Top Margin'),
				'std'=>''
				),
			'title_bottom_margin'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title Bottom Margin'),
				'desc'=>JText::_('Add Title Bottom Margin'),
				'std'=>''
				),
				
			'title_fontweight'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_WEIGHT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_WEIGHT_DESC'),
				'std'=>''
				),
			'heading_transform'=>array(
				'type'=>'select', 
				'title'=>JText::_('Text Transfrom'),
				'desc'=>JText::_('Select Text Transform'),
				'values'=>array(
					'none'=>JText::_('None'),
					'uppercase'=>JText::_('Uppercase'),
					'lowercase'=>JText::_('Lowercase'),
					),
			),
			'counter_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_TITLE_FONT_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_TITLE_FONT_COLOR_DESC'),
				),
			'counter_hover_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Title Hover color'),
				'desc'=>JText::_('Select Title hover color'),
				),
			'background'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BACKGROUND'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BACKGROUND_DESC'),
				),
			'background_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Background Hover Color'),
				'desc'=>JText::_('Select Background Hover Color'),
				),
			'border_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_COLOR_DESC'),
				),
			'border_hover_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Border hover Color'),
				'desc'=>JText::_('Border Hover Color'),
				),	
				
			'border_width'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_WIDTH_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_WIDTH_SIZE_DESC'),
				'placeholder'=>'3',
				),
			'border_radius'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_RADIUS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_RADIUS_DESC'),
				'placeholder'=>'5',
				),
			
			'display_inline'=>array(
				'type'=>'select',
				'title'=>JText::_('Display Width'),
				'desc'=>JText::_('Select Display Width Inline or Full'),
				'values'=>array(
					'inline-block'=>JText::_('Inline'),
					'block'=>JText::_('Full'),
					),
				),
			
			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=> ''
				),
			)
)
);