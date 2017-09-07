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
		'addon_name'=>'sp_process_bar',
		'title'=>JText::_('Process Bar'),
		'desc'=>JText::_('Create Process Bar'),
		'attr'=>array(

			'admin_label'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
				'std'=> ''
				),
			
			
			'title_position'=>array(
				'type'=>'select',
				'title'=>JText::_('Icon Position'),
				'desc'=>JText::_('Select Icon Position'),
				'values'=>array(
					'up'=>JText::_('Up'),
					'down'=>JText::_('Down'),
					),
				'std'=>'up'
				),

			
			
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
				'std'=>  'Feature Box'
				),
				
			'eidt_title_style'=>array(
				'type'=>'select', 
				'title'=>JText::_('Edit Title Style'),
				'desc'=>JText::_('Select Yes If You want to Edit Title Style'),
				'values'=>array(
					'yes'=>JText::_('Yes'),
					'no'=>JText::_('No'),
					
					),
				'std'=>'no',
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
				'depends'=>array('eidt_title_style'=>'yes'),
			),

			'title_fontsize'=>array(
				'type'=>'number', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE_DESC'),
				'std'=>'',
				'depends'=>array('eidt_title_style'=>'yes'),
				),
			
			'title_top_margin'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title Top Margin'),
				'desc'=>JText::_('Add Title Top Margin'),
				'std'=>'',
				'depends'=>array('eidt_title_style'=>'yes'),
				),
			'title_bottom_margin'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title Bottom Margin'),
				'desc'=>JText::_('Add Title Bottom Margin'),
				'std'=>'',
				'depends'=>array('eidt_title_style'=>'yes'),
				),
				
			'title_fontweight'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_WEIGHT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_WEIGHT_DESC'),
				'std'=>'',
				'depends'=>array('eidt_title_style'=>'yes'),
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
				'depends'=>array('eidt_title_style'=>'yes'),
			),

			'title_text_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR_DESC'),
				'depends'=>array('eidt_title_style'=>'yes'),
				),
			'title_text_hover_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Title Hover Color'),
				'desc'=>JText::_('Title Hover Color'),
				'depends'=>array('eidt_title_style'=>'yes'),
				),
				
			'title_url'=>array(
				'type'=>'text',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TITLE_URL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TITLE_URL_DESC'),
				'placeholder'=>'http://',
				'std'=>'',
				'depends'=>array('eidt_title_style'=>'yes'),
				),

			
			'feature_type'=>array(
				'type'=>'select',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_LAYOUT_TYPE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_LAYOUT_TYPE_DESC'),
				'values'=> array(
					'icon'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_LAYOUT_TYPE_ICON'),
					'image'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_LAYOUT_TYPE_IMAGE'),
					),
				'std' => 'icon'
				),

			'feature_image'=>array(
				'type' => 'media',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_IMAGE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_IMAGE_DESC'),
				'std' => '',
				'depends'=>array('feature_type'=>'image')
				),

			'icon_name'=>array(
				'type'=>'icon', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME_DESC'),
				'std'=> '',
				'depends'=>array('feature_type'=>'icon')
				),
			
			'eidt_icon_style'=>array(
				'type'=>'select', 
				'title'=>JText::_('Edit Icon Style'),
				'desc'=>JText::_('Select Yes If You want to Edit Icon Style'),
				'values'=>array(
					'yes'=>JText::_('Yes'),
					'no'=>JText::_('No'),
					
					),
				'std'=>'no',
				'depends'=>array('feature_type'=>'icon')
			),

			'icon_size'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_DESC'),
				'placeholder'=>36,
				'std'=>36,
				'depends'=>array('eidt_icon_style'=>'yes')
				),

			'icon_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_COLOR_DESC'),
				'depends'=>array('eidt_icon_style'=>'yes')
				),
			
			'icon_color_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Icon Hover Color'),
				'desc'=>JText::_('Select Icon Hover Color'),
				'depends'=>array('eidt_icon_style'=>'yes')
				),

			'icon_background'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BACKGROUND'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BACKGROUND_DESC'),
				'depends'=>array('eidt_icon_style'=>'yes')
				),
				
			'icon_background_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Icon Hover Background Color'),
				'desc'=>JText::_('Select Icon Hover Background Color'),
				'depends'=>array('eidt_icon_style'=>'yes')
				),

			'icon_border_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_COLOR_DESC'),
				'depends'=>array('eidt_icon_style'=>'yes')
				),
			
			'icon_border_color_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Icon Hover Border Color'),
				'desc'=>JText::_('Select Icon Hover Border Color'),
				'depends'=>array('eidt_icon_style'=>'yes')
				),
			
			'icon_border_width'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_WIDTH_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_WIDTH_SIZE_DESC'),
				'depends'=>array('eidt_icon_style'=>'yes'),
				'placeholder'=>'3',
				),

			'icon_border_radius'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_RADIUS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_RADIUS_DESC'),
				'depends'=>array('eidt_icon_style'=>'yes'),
				'placeholder'=>'5',
				),
				
				
			'icon_animation_style'=>array(
				'type'=>'select',
				'title'=>JText::_('Icon Animation Style'),
				'desc'=>JText::_('Icon Animation Style'),
				'values'=> array(
					'none'=>JText::_('None'),
					'animated'=>JText::_('Animated'),
					'onhover'=>JText::_('On Icon Hover'),
					'onparenthover'=>JText::_('On Parent Hover'),
					),
				'std' => 'icon',
				'depends'=>array('eidt_icon_style'=>'yes'),
			),
				
			'icon_animated'=>array(
				'type'=>'select',
				'title'=>JText::_('Icon Animation Style'),
				'desc'=>JText::_('Icon Animation Style'),
				'values'=> array(
					'wrench'=>JText::_('Wrench'),
					'ring'=>JText::_('Ring'),
					'horizontal'=>JText::_('Horizontal'),
					'vertical'=>JText::_('Vertical'),
					'flash'=>JText::_('Flash'),
					'bounce'=>JText::_('Bounce'),
					'spin'=>JText::_('Spin'),
					'float'=>JText::_('Float'),
					'pulse'=>JText::_('Pulse'),
					'shake'=>JText::_('Shake'),
					'tada'=>JText::_('Tada'),
					'passing'=>JText::_('Passing'),
					'passing-reverse'=>JText::_('Passing Reverse'),
					'burst'=>JText::_('Burst'),
					
					),
				'depends'=>array('icon_animation_style'=>'animated'),
				
			),
			
			'icon_onhover'=>array(
				'type'=>'select',
				'title'=>JText::_('Icon Animation Style'),
				'desc'=>JText::_('Icon Animation Style'),
				'values'=> array(
					'wrench'=>JText::_('Wrench'),
					'ring'=>JText::_('Ring'),
					'horizontal'=>JText::_('Horizontal'),
					'vertical'=>JText::_('Vertical'),
					'flash'=>JText::_('Flash'),
					'bounce'=>JText::_('Bounce'),
					'spin'=>JText::_('Spin'),
					'float'=>JText::_('Float'),
					'pulse'=>JText::_('Pulse'),
					'shake'=>JText::_('Shake'),
					'tada'=>JText::_('Tada'),
					'passing'=>JText::_('Passing'),
					'passing-reverse'=>JText::_('Passing Reverse'),
					'burst'=>JText::_('Burst'),
					
					),
				'depends'=>array('icon_animation_style'=>'onhover'),
				
			),
			
			
			'icon_onparenthover'=>array(
				'type'=>'select',
				'title'=>JText::_('Icon Animation Style'),
				'desc'=>JText::_('Icon Animation Style'),
				'values'=> array(
					'wrench'=>JText::_('Wrench'),
					'ring'=>JText::_('Ring'),
					'horizontal'=>JText::_('Horizontal'),
					'vertical'=>JText::_('Vertical'),
					'flash'=>JText::_('Flash'),
					'bounce'=>JText::_('Bounce'),
					'spin'=>JText::_('Spin'),
					'float'=>JText::_('Float'),
					'pulse'=>JText::_('Pulse'),
					'shake'=>JText::_('Shake'),
					'tada'=>JText::_('Tada'),
					'passing'=>JText::_('Passing'),
					'passing-reverse'=>JText::_('Passing Reverse'),
					'burst'=>JText::_('Burst'),
					
					),
				'depends'=>array('icon_animation_style'=>'onparenthover'),
				
			),
				

			'icon_margin_top'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_MARGIN_TOP'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_MARGIN_TOP_DESC'),
				'placeholder'=>'10',
				'depends'=>array('eidt_icon_style'=>'yes'),
				),
			'icon_margin_right'=>array(
				'type'=>'number',
				'title'=>JText::_('Margin Right'),
				'desc'=>JText::_('Add Margin Right to icon'),
				'placeholder'=>'10',
				'depends'=>array('eidt_icon_style'=>'yes'),
				),
			'icon_margin_bottom'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_MARGIN_BOTTOM'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_MARGIN_BOTTOM_DESC'),
				'placeholder'=>'10',
				'depends'=>array('eidt_icon_style'=>'yes'),
				),				
				
			'icon_margin_left'=>array(
				'type'=>'number',
				'title'=>JText::_('Margin Left'),
				'desc'=>JText::_('Add Margin left to icon'),
				'placeholder'=>'10',
				'depends'=>array('eidt_icon_style'=>'yes'),
				),

			'icon_padding'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_PADDING'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_PADDING_DESC'),
				'placeholder'=>'20',
				'depends'=>array('eidt_icon_style'=>'yes'),
				),
			'eidt_bar_style'=>array(
				'type'=>'select', 
				'title'=>JText::_('Edit Process Bar Style'),
				'desc'=>JText::_('Select Yes If You want to Edit Process Bar Style'),
				'values'=>array(
					'yes'=>JText::_('Yes'),
					'no'=>JText::_('No'),
					
					),
				'std'=>'no',
			),
			
			'process_bar_height'=>array(
				'type'=>'number',
				'title'=>JText::_('Process Bar Height'),
				'desc'=>JText::_('Add Process Bar Height'),
				'placeholder'=>'20',
				'depends'=>array('eidt_bar_style'=>'yes'),
			),
			
			
			
			'process_bar_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Process Bar Color'),
				'desc'=>JText::_('Select Process Bar Color'),
				'depends'=>array('eidt_bar_style'=>'yes'),
			),
			
			'process_bar_hover_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Process Bar Hover Color'),
				'desc'=>JText::_('Select Process Bar Hover Color'),
				'depends'=>array('eidt_bar_style'=>'yes'),
			),
			
			
			'process_bar_fl'=>array(
				'type'=>'select', 
				'title'=>JText::_('Bar Stage'),
				'desc'=>JText::_('Choose this bar First, Middle or Last'),
				'values'=>array(
					'first'=>JText::_('First'),
					'middle'=>JText::_('Middle'),
					'last'=>JText::_('Last'),
					),
				'std'=>'middle',
				'depends'=>array('eidt_bar_style'=>'yes'),
				),
				
				
			'eidt_box_style'=>array(
				'type'=>'select', 
				'title'=>JText::_('Edit Box Style'),
				'desc'=>JText::_('Select Yes If You want to Edit Box Style'),
				'values'=>array(
					'yes'=>JText::_('Yes'),
					'no'=>JText::_('No'),
					
					),
				'std'=>'no',
			),
			
			'box_bg_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Box Background Color'),
				'desc'=>JText::_('Select Box Background Color'),
				'depends'=>array('eidt_box_style'=>'yes'),
				),
			
			'box_bg_color_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Box Background Hover Color'),
				'desc'=>JText::_('Select Box Background Hover Color'),
				'depends'=>array('eidt_box_style'=>'yes'),
				),
			
			'box_border_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Box border Color'),
				'desc'=>JText::_('Select Box Background Color'),
				'depends'=>array('eidt_box_style'=>'yes'),
				),
			
			'box_border_color_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Box border Hover Color'),
				'desc'=>JText::_('Select Box Background Hover Color'),
				'depends'=>array('eidt_box_style'=>'yes'),
				),
			
			'box_border_width'=>array(
				'type'=>'text',
				'title'=>JText::_('Box Border Width'),
				'desc'=>JText::_('Add Box Border Width'),
				'placeholder'=>'1px 1px 2px 1px',
				'depends'=>array('eidt_box_style'=>'yes'),
				),
			'box_border_radius'=>array(
				'type'=>'text',
				'title'=>JText::_('Box Border Radius'),
				'desc'=>JText::_('Add Box Border Radius'),
				'placeholder'=>'2',
				'depends'=>array('eidt_box_style'=>'yes'),
				),
			
			'box_padding'=>array(
				'type'=>'text',
				'title'=>JText::_('Box Padding'),
				'desc'=>JText::_('Add padding between border and content in px. like 20px 20px 20px 20px'),
				'placeholder'=>'10px 10px 10px 10px',
				'depends'=>array('eidt_box_style'=>'yes'),
				),
			
			
			
			
		
			
			'text_color'=>array(
				'type'=>'color',
				'title'=>JText::_('Text Color'),
				'desc'=>JText::_('Select Text Color'),
				'depends'=>array('eidt_box_style'=>'yes'),
				),
			'text_color_hover'=>array(
				'type'=>'color',
				'title'=>JText::_('Text Hover Color'),
				'desc'=>JText::_('Select Text Hover Color'),
				'depends'=>array('eidt_box_style'=>'yes'),
				),
			
			'text'=>array(
				'type'=>'editor', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT_DESC'),
				'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum.'
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
				
			
			//Button
			'button_text'=>array(
				'type'=>'text', 
				'title'=>JText::_('Button Text'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_TEXT_DESC'),
				'placeholder'=>'Button Text',
				),
			'button_url'=>array(
				'type'=>'text', 
				'title'=>JText::_('Button URL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_URL_DESC'),
				'placeholder'=>'http://'
				),
			'button_type'=>array(
				'type'=>'select', 
				'title'=>JText::_('Button Type'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_TYPE_DESC'),
				'values'=>array(
					'default'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_DEFAULT'),
					'white'=>JText::_('White'),
					'dark'=>JText::_('Dark'),
					'primary'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_PRIMARY'),
					'success'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_SUCCESS'),
					'info'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_INFO'),
					'warning'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_WARNING'),
					'danger'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_DANGER'),
					'link'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
					),
				'std'=>'default',
				),
			'button_icon'=>array(
				'type'=>'icon', 
				'title'=>JText::_('Button Icon'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_ICON_DESC'),
				),
				
			'button_target'=>array(
				'type'=>'select', 
				'title'=>JText::_('Button Target'),
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