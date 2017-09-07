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
		'addon_name'=>'sp_text_box',
		'title'=>JText::_('Text Box'),
		'desc'=>JText::_('Add Text box with hover effect'),
		'attr'=>array(

			'admin_label'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
				'std'=> ''
				),

			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
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
			
			'title_border'=>array(
				'type'=>'select',
				'title'=>JText::_('Title Border'),
				'desc'=>JText::_('Select for Title Left and Right Border'),
				'values'=>array(
					'title_border_yes'=>JText::_('Yes'),
					'title_border_no'=>JText::_('No'),
					),
				'std'=>'title_border_no',
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

			'text'=>array(
				'type'=>'editor', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TEXT_CONTENT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TEXT_CONTENT_DESC'),
				'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. Nec sapien convallis vulputate rhoncus vel dui.'
				),
			
			
			'text_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Content Text Color'),
				'desc'=>JText::_('Add content Text Color'),
				),	
			'text_hover_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Content Text Hover Color'),
				'desc'=>JText::_('Add content Text Hover Color'),
				),
			
			'text_size'=>array(
				'type'=>'number', 
				'title'=>JText::_('Content Font Size'),
				'desc'=>JText::_('Add content Font Size'),
				'placeholder'=>'18'
				),	
			
			'text_fontweight'=>array(
				'type'=>'text', 
				'title'=>JText::_('Font Weight'),
				'desc'=>JText::_('Add content Font weight'),
				'placeholder'=>'400'
				),
			
			'text_lineheight'=>array(
				'type'=>'number', 
				'title'=>JText::_('Content Line Height'),
				'desc'=>JText::_('Add content text line height'),
				'placeholder'=>'20'
				),	
			
			'text_style'=>array(
				'type'=>'select',
				'title'=>JText::_('Font Style'),
				'desc'=>JText::_('Select Font Style'),
				'values'=>array(
					'normal'=>JText::_('Normal'),
					'italic'=>JText::_('Italic'),
					),
				'std'=>'',
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
				'std'=>'',
				),
			
			'text_box_padding'=>array(
				'type'=>'text', 
				'title'=>JText::_('Content Text Box Padding'),
				'desc'=>JText::_('Add content Text Box Padding'),
				),
			
			'text_box_margin'=>array(
				'type'=>'text', 
				'title'=>JText::_('Content Text Box Margin'),
				'desc'=>JText::_('Add content Text Box Margin'),
				),
				
			'text_box_bg_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Content Text Box BG Color'),
				'desc'=>JText::_('Add content Text Box BG Color'),
				),
				
			'text_box_hover_bg_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Content Text Box Hover BG Color'),
				'desc'=>JText::_('Add content Text Box Hover BG Color'),
				),
			
			'text_box_border_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Content Text Box Border Color'),
				'desc'=>JText::_('Add content Text Box Border Color'),
				),
				
			'text_box_hover_border_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Content Text Box Hover Border Color'),
				'desc'=>JText::_('Add content Text Box Hover Border Color'),
				),
			
			
			'text_box_border_width'=>array(
				'type'=>'Number', 
				'title'=>JText::_('Content Text Box Border width'),
				'desc'=>JText::_('Add content Text Box Border width'),
				),
			'text_box_border_style'=>array(
				'type'=>'select',
				'title'=>JText::_('Box Border Style'),
				'desc'=>JText::_('Select Box Border Style'),
				'values'=>array(
					'none'=>JText::_('none '),
					'solid'=>JText::_('solid '),
					'dashed'=>JText::_('dashed '),
					'dotted'=>JText::_('dotted '),
					'double'=>JText::_('double '),
					'groove'=>JText::_('groove '),
					'hidden'=>JText::_('hidden '),
					'inset'=>JText::_('inset '),
					'outset'=>JText::_('outset '),
					'ridge'=>JText::_('ridge '),
					
					),
				'std'=>'',
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