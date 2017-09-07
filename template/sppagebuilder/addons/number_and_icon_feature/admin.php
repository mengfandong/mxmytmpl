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
		'addon_name'=>'sp_number_and_icon_feature',
		'title'=>JText::_('Number With Icon Feature'),
		'desc'=>JText::_('Create Number With Icon Feature'),
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
				'std'=>  'Feature Box'
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
			
			'title_url'=>array(
				'type'=>'text',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TITLE_URL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TITLE_URL_DESC'),
				'placeholder'=>'http://',
				'std'=>''
				),

			

		
		

			'icon_name'=>array(
				'type'=>'text', 
				'title'=>JText::_('Number'),
				'desc'=>JText::_('Add Number'),
				'std'=> '',
				'placeholder'=>'10, 20$, 12%',
				),
				
			'icon_image_position'=>array(
				'type'=>'select',
				'title'=>JText::_('Number Position'),
				'desc'=>JText::_('Number Position'),
				'values'=>array(
					'left'=>JText::_('Left'),
					'right'=>JText::_('Right'),
					),
				'std'=>'sppb-text-center',
				),

				

			'icon_size'=>array(
				'type'=>'number',
				'title'=>JText::_('Number Size'),
				'desc'=>JText::_('Add Number Size'),
				'placeholder'=>36,
				'std'=>36,
				),

			'icon_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Number Color'),
				'desc'=>JText::_('Select Number Color'),
				),
			
			'icon_color_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Number Hover Color'),
				'desc'=>JText::_('Select Number Hover Color'),
				),

			'icon_background'=>array(
				'type'=>'color',
				'title'=>JText::_('Number Background Color'),
				'desc'=>JText::_('Select Number Background Color'),
				),
				
			'icon_background_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Number Hover Background Color'),
				'desc'=>JText::_('Select Number Hover Background Color'),
				),

			'icon_border_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Number Border Color'),
				'desc'=>JText::_('Select Number Border Color'),
				),
			
			'icon_border_color_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Number Hover Border Color'),
				'desc'=>JText::_('Select Number Hover Border Color'),
				),
			
			'icon_border_width'=>array(
				'type'=>'number',
				'title'=>JText::_('Number Border Width'),
				'desc'=>JText::_('Number border width'),
				'placeholder'=>'3',
				),

			'icon_border_radius'=>array(
				'type'=>'number',
				'title'=>JText::_('Border Radius'),
				'desc'=>JText::_('Border Radius'),
				'placeholder'=>'5',
				),

			'icon_margin'=>array(
				'type'=>'text',
				'title'=>JText::_('Number Margin'),
				'desc'=>JText::_('Number Margin'),
				'placeholder'=>'10px, 10px, 10px, 10px',
				),
			

			'icon_padding'=>array(
				'type'=>'text',
				'title'=>JText::_('Number Padding'),
				'desc'=>JText::_('Number Padding'),
				'placeholder'=>'10px, 10px, 10px, 10px',
				),
				
			
			'icon1_name'=>array(
				'type'=>'icon',
				'title'=>JText::_('Icon'),
				'desc'=>JText::_('Slect Icon'),
				),
				
			'icon1_size'=>array(
				'type'=>'number',
				'title'=>JText::_('Icon Size'),
				'desc'=>JText::_('Icon Size'),
				'placeholder'=>'36',
				),
			
			'icon1_margin'=>array(
				'type'=>'text',
				'title'=>JText::_('Icon Margin'),
				'desc'=>JText::_('Icon Margin'),
				'placeholder'=>'10px, 10px, 10px, 10px',
				),
			
			
			
			'box_bg_color'=>array(
				'type'=>'color',
				'title'=>JText::_('?Box Background Color'),
				'desc'=>JText::_('Select Box Background Color'),
				),
			
			'box_bg_color_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Box Background Hover Color'),
				'desc'=>JText::_('Select Box Background Hover Color'),
				),
			
			'box_border_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Box border Color'),
				'desc'=>JText::_('Select Box Background Color'),
				),
			
			'box_border_color_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Box border Hover Color'),
				'desc'=>JText::_('Select Box Background Hover Color'),
				),
			
			'box_border_width'=>array(
				'type'=>'number',
				'title'=>JText::_('Box Border Width'),
				'desc'=>JText::_('Add Box Border Width'),
				'placeholder'=>'2',
				),
			

			'box_left_margin'=>array(
				'type'=>'number',
				'title'=>JText::_('Box Left Margin'),
				'desc'=>JText::_('Add Box Left Margin'),
				'placeholder'=>'10',
				),
			
			'box_right_margin'=>array(
				'type'=>'number',
				'title'=>JText::_('Box Right Margin'),
				'desc'=>JText::_('Add Box Right Margin'),
				'placeholder'=>'10',
				),
			
			'text_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Text Color'),
				'desc'=>JText::_('Select Text Color'),
				),
			'text_color_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Text Hover Color'),
				'desc'=>JText::_('Select Text Hover Color'),
				),
			
			'text'=>array(
				'type'=>'editor', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT_DESC'),
				'std'=>'Pellentesque malesuada elit gravida tortor iaculis tempus. Aliquam id aliquam nulla, convallis tincidunt elit. Mauris sit amet.'
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

			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=> ''
				),
			)

		)
	);