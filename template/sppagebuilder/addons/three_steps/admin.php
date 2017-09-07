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
		'addon_name'=>'sp_three_steps',
		'title'=>JText::_('3 Steps'),
		'desc'=>JText::_('Add Simple Three Steps'),
		'attr'=>array(

			'admin_label'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
				'std'=> ''
				),
				
			'separator1'=>array(
				'type'=>'separator', 
				'title'=>JText::_('Intro Box Details')
				),
			
			
			
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
				'std'=>  'Feature Box'
				),
			
			'subtitle'=>array(
				'type'=>'text', 
				'title'=>JText::_('Sub Titile'),
				'desc'=>JText::_('Add Sub Title'),
				),
				
			'main_content'=>array(
				'type'=>'text', 
				'title'=>JText::_('Content'),
				'desc'=>JText::_('Add Content'),
				),
			
			'button_text'=>array(
				'type'=>'text', 
				'title'=>JText::_('Button Text'),
				'desc'=>JText::_('Add Button Text'),
				),
			'button_url'=>array(
				'type'=>'text', 
				'title'=>JText::_('Button Url'),
				'desc'=>JText::_('Add Button Url'),
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



			
			
			
			
			
			
			'separator1'=>array(
				'type'=>'separator', 
				'title'=>JText::_('Step One')
				),

			'step_one_title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Step One Title'),
				'desc'=>JText::_('Add Step One Title'),
				'std'=> '',
				),

			'icon1_name'=>array(
				'type'=>'icon', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME_DESC'),
				'std'=> '',
				),

			'icon1_size'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_DESC'),
				'placeholder'=>36,
				'std'=>36,
				),
				
			'icon1_animation_style'=>array(
				'type'=>'select',
				'title'=>JText::_('Icon Animation Style'),
				'desc'=>JText::_('Icon Animation Style'),
				'values'=> array(
					'none'=>JText::_('None'),
					'animated1'=>JText::_('Animated'),
					'onparenthover1'=>JText::_('On Hover'),
					),
				'std' => 'icon'
			),
				
			'icon1_animated'=>array(
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
				'depends'=>array('icon1_animation_style'=>'animated1'),
				
			),
			
			'icon1_onparenthover'=>array(
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
				'depends'=>array('icon1_animation_style'=>'onparenthover1'),
				
			),

			'text1'=>array(
				'type'=>'editor', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT_DESC'),
				'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum.'
				),

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			'separator2'=>array(
				'type'=>'separator', 
				'title'=>JText::_('Step Two')
				),

			'step_two_title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Step Two Title'),
				'desc'=>JText::_('Add Step Two Title'),
				'std'=> '',
				),

			'icon2_name'=>array(
				'type'=>'icon', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME_DESC'),
				'std'=> '',
				),

			'icon2_size'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_DESC'),
				'placeholder'=>36,
				'std'=>36,
				),
				
			'icon2_animation_style'=>array(
				'type'=>'select',
				'title'=>JText::_('Icon Animation Style'),
				'desc'=>JText::_('Icon Animation Style'),
				'values'=> array(
					'none'=>JText::_('None'),
					'animated2'=>JText::_('Animated'),
					'onparenthover2'=>JText::_('On Hover'),
					),
				'std' => 'icon'
			),
				
			'icon2_animated'=>array(
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
				'depends'=>array('icon2_animation_style'=>'animated2'),
				
			),
			
			'icon2_onparenthover'=>array(
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
				'depends'=>array('icon2_animation_style'=>'onparenthover2'),
				
			),

			'text2'=>array(
				'type'=>'editor', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT_DESC'),
				'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum.'
				),
			
			
			
			
			
			
			
			
			
			
			
			
			
			'separator3'=>array(
				'type'=>'separator', 
				'title'=>JText::_('Step Three')
				),

			'step_three_title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Step Three Title'),
				'desc'=>JText::_('Add Step Three Title'),
				'std'=> '',
				),

			'icon3_name'=>array(
				'type'=>'icon', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME_DESC'),
				'std'=> '',
				),

			'icon3_size'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_DESC'),
				'placeholder'=>36,
				'std'=>36,
				),
				
			'icon3_animation_style'=>array(
				'type'=>'select',
				'title'=>JText::_('Icon Animation Style'),
				'desc'=>JText::_('Icon Animation Style'),
				'values'=> array(
					'none'=>JText::_('None'),
					'animated3'=>JText::_('Animated'),
					'onparenthover3'=>JText::_('On Hover'),
					),
				'std' => 'icon'
			),
				
			'icon3_animated'=>array(
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
				'depends'=>array('icon3_animation_style'=>'animated3'),
				
			),
			
			'icon3_onparenthover'=>array(
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
				'depends'=>array('icon3_animation_style'=>'onparenthover3'),
				
			),

			'text3'=>array(
				'type'=>'editor', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT_DESC'),
				'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum.'
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