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
		'addon_name'=>'sp_flip_box',
		'title'=>JText::_('Flip Box'),
		'desc'=>JText::_('Amazing Flip Box'),
		'attr'=>array(

			'admin_label'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
				'std'=> ''
				),

			
			

			'separator1'=>array(
				'type'=>'separator', 
				'title'=>JText::_('Title')
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
			'title_transform'=>array(
				'type'=>'select', 
				'title'=>JText::_('Title Transform'),
				'desc'=>JText::_('Title Transform'),
				'values'=>array(
					'none'=>JText::_('None'),
					'uppercase'=>JText::_('Uppercase'),
					'lowercase'=>JText::_('Lowercase'),
					),
				'std'=>'none',
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
				
			
			'separator2'=>array(
				'type'=>'separator', 
				'title'=>JText::_('Icon Styling')
				),

			'icon'=>array(
				'type'=>'icon',
				'title'=>JText::_('Icon'),
				'desc'=>JText::_('Select Icon '),
				),	
			'icon_size'=>array(
				'type'=>'number',
				'title'=>JText::_('Icon Size'),
				'desc'=>JText::_('Select Icon Size'),
				),	
			'icon_padding'=>array(
				'type'=>'number',
				'title'=>JText::_('Icon Icon Padding'),
				'desc'=>JText::_('Select Icon Padding'),
				),
			'icon_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Icon Color'),
				'desc'=>JText::_('Select Icon Color'),
				),
			
			'icon_background'=>array(
				'type'=>'color',
				'title'=>JText::_('Icon Background Color'),
				'desc'=>JText::_('Select Icon Background Color'),
				),
			'icon_border_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Icon Border Color'),
				'desc'=>JText::_('Select Icon Border Color'),
				),
			
			'icon_border_width'=>array(
				'type'=>'number',
				'title'=>JText::_('Icon Border width'),
				'desc'=>JText::_('Select Icon Border width'),
				),
			
			'short_text'=>array(
				'type'=>'textarea', 
				'title'=>JText::_('Short Text'),
				'desc'=>JText::_('Add Short Text for Front'),
				),
			
			
						
			'text'=>array(
				'type'=>'textarea', 
				'title'=>JText::_('Full Text'),
				'desc'=>JText::_('Add Full Text for Back '),
				),
			
			'front_text_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Front Text Color'),
				'desc'=>JText::_('Select Front Text Color'),
				),
			
			'back_text_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Back Text Color'),
				'desc'=>JText::_('Select Back Text Color'),
				),
			
			'front_bg_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Front Background Color'),
				'desc'=>JText::_('Select Front Background Color'),
				),
			
			'back_bg_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Back Background Color'),
				'desc'=>JText::_('Select Back Background Color'),
				),
			
			'box_border_width'=>array(
				'type'=>'number',
				'title'=>JText::_('Box Border Width'),
				'desc'=>JText::_('Select Box Border Width'),
				),
			
			'box_border_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Box Border color'),
				'desc'=>JText::_('Select Box Border color'),
				),
			
			
			
			//Button
			'button_text'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_TEXT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_TEXT_DESC'),
				'std'=>'Button Text',
				),
			'button_url'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_URL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_URL_DESC'),
				'std'=>'http://'
				),
			
			'button_target'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_DESC'),
				'values'=>array(
					''=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
					'_blank'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
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