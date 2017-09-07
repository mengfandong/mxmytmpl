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
		'addon_name'=>'sp_feature',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_DESC'),
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
			'title_top_margin'=>array(
				'type'=>'number',
				'title'=>JText::_('Title Top Margin'),
				'desc'=>JText::_('Add Title Top Margin'),
				'placeholder'=>'10',
				'std'=>''
				),
			'title_bottom_margin'=>array(
				'type'=>'number',
				'title'=>JText::_('Title Bottom Margin'),
				'desc'=>JText::_('Add Title Bottom Margin'),
				'placeholder'=>'10',
				'std'=>''
				),

			'title_position'=>array(
				'type'=>'select',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_ICON_IMAGE_POSITION'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_ICON_IMAGE_POSITION_DESC'),
				'values'=>array(
					'after'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TITLE_POSITION_BEFORE_TITLE'),
					'before'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TITLE_POSITION_AFTER_TITLE'),
					'left'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TITLE_POSITION_LEFT'),
					'right'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TITLE_POSITION_RIGHT'),
					),
				'std'=>'before'
				),
			
			
			'icon_position'=>array(
				'type'=>'select',
				'title'=>JText::_('Icon With Title'),
				'desc'=>JText::_('If Yes Icon will show with title'),
				'values'=>array(
					'iconwithtitle_no'=>JText::_('No'),
					'iconwithtitle_yes'=>JText::_('yes'),
					
					),
				'std'=>'iconwithtitle_no',
				'depends'=>array('title_position'=>'after')
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

			'icon_background'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BACKGROUND'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BACKGROUND_DESC'),
				'depends'=>array('feature_type'=>'icon')
				),

			'icon_border_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_COLOR_DESC'),
				'depends'=>array('feature_type'=>'icon')
				),
			
			'icon_border_width'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_WIDTH_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_WIDTH_SIZE_DESC'),
				'depends'=>array('feature_type'=>'icon'),
				'placeholder'=>'3',
				),

			'icon_border_radius'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_RADIUS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_BORDER_RADIUS_DESC'),
				'depends'=>array('feature_type'=>'icon'),
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
				'std' => 'icon'
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
				
			'icon_margin_left'=>array(
				'type'=>'number',
				'title'=>JText::_('Margin Left'),
				'desc'=>JText::_('Margin Left'),
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

			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=> ''
				),
			)

		)
	);