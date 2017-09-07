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
		'type'=>'repeatable', 
		'addon_name'=>'sp_circle_features',
		'category'=>'Feature',
		'title'=>JText::_('Circle Features'),
		'desc'=>JText::_('Awesome Circle Features with Icons'),
		'attr'=>array(
			'admin_label'=>array(
					'type'=>'text', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				),
			'center_icon'=>array(
				'type'=>'icon', 
				'title'=>JText::_('Center Main Icon'),
				'desc'=>JText::_('Select Circle main centered icon'),
				),
			'center_icon_size'=>array(
				'type'=>'number', 
				'title'=>JText::_('Icon Size'),
				'desc'=>JText::_('Add Icon Size in px'),
				'placeholder'=>'10',
				),
			'center_icon_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Center Icon Color'),
				'desc'=>JText::_('Select Center Icon Color'),
				),
			'center_icon_hover_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Center Icon Hover Color'),
				'desc'=>JText::_('Select Center Icon Hover Color'),
				),
				
			'center_icon_bg_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Center Icon Background Color'),
				'desc'=>JText::_('Select Icon Background color'),
				),
				
			'center_icon_bg_hover_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Center Icon Background Hover Color'),
				'desc'=>JText::_('Select Icon Background Hover color'),
				),
				
			'center_icon_border_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Center Icon Border Color'),
				'desc'=>JText::_('Select Icon Border color'),
				),
				
			'center_icon_border_hover_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Center Icon Border Hover Color'),
				'desc'=>JText::_('Select Icon Border Hover color'),
				),
				
			'center_icon_border_width'=>array(
				'type'=>'number', 
				'title'=>JText::_('Center Icon Border width'),
				'desc'=>JText::_('Select Icon Border width'),
				),
				
			'center_icon_padding'=>array(
				'type'=>'number', 
				'title'=>JText::_('Center Icon padding'),
				'desc'=>JText::_('Select Icon padding'),
				),
				
				
			'center_icon_animation'=>array(
				'type'=>'select',
				'title'=>JText::_('Center Icon Animation Style'),
				'desc'=>JText::_('Select Center Icon Animation Style'),
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
				
			),
			
			'circle_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Circle Color'),
				'desc'=>JText::_('Select Circle color'),
				),
			
			'circle_hover_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Circle Hover Color'),
				'desc'=>JText::_('Select Circle Hover color'),
				),
			
			
			'circle_thikness'=>array(
				'type'=>'Number', 
				'title'=>JText::_('Circle Thikness'),
				'desc'=>JText::_('Add Circle Thikness'),
				),
			
			
			'circle_style'=>array(
				'type'=>'select',
				'title'=>JText::_('Circle Style'),
				'desc'=>JText::_('Select Circle Style'),
				'values'=> array(
					'solid'=>JText::_('Solid'),
					'dotted'=>JText::_('Dotted'),
					'dashed'=>JText::_('Dashed'),
					'double'=>JText::_('Double'),
					'groove'=>JText::_('Groove'),
					'ridge'=>JText::_('Ridge'),
					'inset'=>JText::_('Inset'),
					'outset'=>JText::_('Outset'),
					'none'=>JText::_('None'),					
					),
				
			),
			
			'circle_padding'=>array(
				'type'=>'number', 
				'title'=>JText::_('Gap Between Icon and Circle'),
				'desc'=>JText::_('Add Gap Between Icon and Circle'),
				),
				
				
			
			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=> ''
				),
			'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_circle_features_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Item Title'),
						'desc'=>JText::_('Add Icon Title here'),
						
						),
					'icon'=>array(
						'type'=>'icon', 
						'title'=>JText::_('Icon'),
						'desc'=>JText::_('Select Icon'),
						),
					'icon_size'=>array(
						'type'=>'number', 
						'title'=>JText::_('Icon Size'),
						'desc'=>JText::_('Add Icon size'),
						),
					'icon_color'=>array(
						'type'=>'color', 
						'title'=>JText::_('Icon color'),
						'desc'=>JText::_('Select Icon Color'),
						),
					
					'icon_bg_color'=>array(
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
						'title'=>JText::_('Icon Border Width'),
						'desc'=>JText::_('Select Icon Border Width'),
						),
					
					'icon_position'=>array(
							'type'=>'select',
							'title'=>JText::_('Icon Position'),
							'desc'=>JText::_('Select Icon Position'),
							'values'=> array(
								'top'=>JText::_('Top'),
								'right'=>JText::_('Right'),
								'bottom'=>JText::_('Bottom'),
								'left'=>JText::_('Left'),
								'topright'=>JText::_('Top Right Corner'),
								'rightbottom'=>JText::_('Right Bottom Corner'),
								'bottomleft'=>JText::_('Bottom Left Corner'),
								'lefttop'=>JText::_('Left Top Corner'),
								),
							
						),
					
					'icon_padding'=>array(
						'type'=>'number', 
						'title'=>JText::_('Icon Padding'),
						'desc'=>JText::_('Add icon padding'),
						),
						
					'icon_animation'=>array(
						'type'=>'select',
						'title'=>JText::_('Icon Animation Style'),
						'desc'=>JText::_('Select Icon Animation Style'),
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
					
						),
						
						
					)
				),

			)

	)
);

