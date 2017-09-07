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
		'addon_name'=>'sp_two_steps',
		'title'=>JText::_('Counter Steps'),
		'desc'=>JText::_('Counter Steps with Counter and Image'),
		'attr'=>array(

			'admin_label'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
				'std'=> ''
				),

			

			'image'=>array(
				'type'=>'media', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_CONTENT_IMAGE'),
				),
			
			'step_number'=>array(
				'type'=>'number', 
				'title'=>JText::_('Step Number'),
				'desc'=>JText::_('Add Step Number'),
				'std'=>''
				),
				
			'step_number_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Step Number Color'),
				'desc'=>JText::_('Add Step Number Color'),
				),	
			
			'step_number_bg'=>array(
				'type'=>'color',
				'title'=>JText::_('Step Number Background'),
				'desc'=>JText::_('Add Step Number Background Color'),
				),
			'step_number_border_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Step Number Border Color'),
				'desc'=>JText::_('Add Step Number Border Color'),
				),
			
			'step_number_border_size'=>array(
				'type'=>'number', 
				'title'=>JText::_('Step Number Border Size'),
				'desc'=>JText::_('Add Step Number Border Size'),
				'std'=>''
				),
			
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_CONTENT_TITLE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_CONTENT_TITLE_DESC'),
				),

			'heading_selector'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
				'values'=>array(
					'h1'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H1'),
					'h2'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H2'),
					'h3'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H3'),
					'h4'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H4'),
					'h5'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H5'),
					'h6'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H6'),
					),
				'std'=>'h3',
			),

			'title_fontsize'=>array(
				'type'=>'number', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE_DESC'),
				'std'=>''
				),

			'title_fontweight'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_WEIGHT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_WEIGHT_DESC'),
				'std'=>''
				),

			'title_text_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR_DESC'),
				),

			'title_margin_top'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP_DESC'),
				'placeholder'=>'10',
				),

			'title_margin_bottom'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM_DESC'),
				'placeholder'=>'10',
				),								
			
			
			'number'=>array(
				'type'=>'number', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_NUMBER_DESC'),
				'placeholder'=>'1000',
				'std'=>'1000',
				),
			'duration'=>array(
				'type'=>'number', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_DURATION'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ANIMATED_NUMBER_DURATION_DESC'),
				'placeholder'=>'1000',
				'std'=>'1000',
				),
			'counter_symbol'=>array(
				'type'=>'text', 
				'title'=>JText::_('Counter Symbol'),
				'desc'=>JText::_('Add Counter Symbol like $/%/k'),
				'std'=>''
				),
				
			'counter_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Counter Color'),
				'desc'=>JText::_('Add Counter Color'),
				),
			'counter_size'=>array(
				'type'=>'number', 
				'title'=>JText::_('Counter Size'),
				'desc'=>JText::_('Add Counter size'),
				'placeholder'=>'10',
				),
			'icon_name'=>array(
				'type'=>'icon', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME_DESC'),
				'std'=> '',
				'depends'=>array('feature_type'=>'icon')
				),

			'icon_size'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_DESC'),
				'placeholder'=>36,
				'std'=>36,
				'depends'=>array('feature_type'=>'icon')
				),

			'icon_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_COLOR_DESC'),
				'depends'=>array('feature_type'=>'icon')
				),

		

			
				
				
			
				

			'icon_margin_top'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_MARGIN_TOP'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_MARGIN_TOP_DESC'),
				'placeholder'=>'10',
				'depends'=>array('feature_type'=>'icon')
				),
			'icon_margin_right'=>array(
				'type'=>'number',
				'title'=>JText::_('Margin Right'),
				'desc'=>JText::_('Add Margin Right to icon'),
				'placeholder'=>'10',
				'depends'=>array('feature_type'=>'icon')
				),
			'icon_margin_bottom'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_MARGIN_BOTTOM'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_MARGIN_BOTTOM_DESC'),
				'placeholder'=>'10',
				'depends'=>array('feature_type'=>'icon')
				),				

			'icon_padding'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_PADDING'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_PADDING_DESC'),
				'placeholder'=>'20',
				'depends'=>array('feature_type'=>'icon')
				),
			
			
			'background_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Background Color'),
				'desc'=>JText::_('Add Element Background Color'),
				),
			
			'text'=>array(
				'type'=>'editor', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_CONTENT_CONTENT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_CONTENT_CONTENT_DESC'),
				),
			'text_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Text Color'),
				'desc'=>JText::_('Add Text Color'),
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