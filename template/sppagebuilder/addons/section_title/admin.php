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
		'addon_name'=>'sp_section_title',
		'title'=>JText::_('Title of Section'),
		'desc'=>JText::_('Add Awesome Title to Section'),
		'attr'=>array(

			'admin_label'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
				'std'=> ''
				),

			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Add Section Title'),
				'std'=>  ''
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
			
			'title_fontfamily'=>array(
				'type'=>'text', 
				'title'=>JText::_('Font Family'),
				'desc'=>JText::_('Add Font Family'),
				'std'=>'',
				'placeholder'=>'Open Sans, sans-serif',
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
				
				
			'title_divider'=>array(
				'type'=>'select',
				'title'=>JText::_('Title Divider'),
				'desc'=>JText::_('Select for Title and Subtext Divider'),
				'values'=>array(
					'yes'=>JText::_('Yes'),
					'no'=>JText::_('No'),
					),
				'std'=>'yes',
				),
						
			'divider_left_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Divider Left Part color'),
				'desc'=>JText::_('Select Divider Left Part Color'),
				'depends'=>array('title_divider'=>'yes')
				),
			
			'divider_right_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Divider Right Part color'),
				'desc'=>JText::_('Select Divider Right Part Color'),
				'depends'=>array('title_divider'=>'yes')
				),
			
			'divider_height'=>array(
				'type'=>'number',
				'title'=>JText::_('Divider Height'),
				'desc'=>JText::_('Add Divider Height'),
				'placeholder'=>'2',
				'depends'=>array('title_divider'=>'yes')
				),
			
			'divider_width'=>array(
				'type'=>'text',
				'title'=>JText::_('Divider Width'),
				'desc'=>JText::_('Add Divider Width can be in px or in %'),
				'placeholder'=>'100px',
				'depends'=>array('title_divider'=>'yes')
				),
			'divider_bottom_margin'=>array(
				'type'=>'number',
				'title'=>JText::_('Divider Bottom Margin'),
				'desc'=>JText::_('Add Divider Bottom Margin'),
				'placeholder'=>'10',
				'depends'=>array('title_divider'=>'yes')
				),									

			'text'=>array(
				'type'=>'editor', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TEXT_CONTENT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TEXT_CONTENT_DESC'),
				'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. Nec sapien convallis vulputate rhoncus vel dui.'
				),
				
			'content_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Content color'),
				'desc'=>JText::_('Select Content Color'),
				),
				
			'text_lineheight'=>array(
				'type'=>'number', 
				'title'=>JText::_('Content Line Height'),
				'desc'=>JText::_('Add content text line height'),
				'placeholder'=>'20'
				),	
			
			
			'alignment'=>array(
				'type'=>'select',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT_DESC'),
				'values'=>array(
					'left'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_LEFT'),
					'center'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CENTER'),
					'right'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_RIGHT'),
					),
				'std'=>'',
				),
				
			'content_margin_bottom'=>array(
				'type'=>'number', 
				'title'=>JText::_('Margin Bottom to Content'),
				'desc'=>JText::_('Add Margin Bottom to Content'),
				'placeholder'=>'20'
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