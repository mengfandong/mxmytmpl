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
		'addon_name'=>'sp_cover_boxes',
		'category'=>'Slider',
		'title'=>JText::_('Cover Boxes'),
		'desc'=>JText::_('Add Cover Boxes'),
		'attr'=>array(
			'admin_label'=>array(
					'type'=>'text', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				),
			
			
			
			'autoplay'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_AUTOPLAY'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_AUTOPLAY_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			
			'arrows'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_SHOW_ARROWS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_SHOW_ARROWS_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
		
			
			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=> ''
				),
			'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_cover_boxes_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Set title'),
						'desc'=>JText::_(''),
						'std'=> 'Set1'
						),

					'image1'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image1'),
						'desc'=>JText::_('Add Image1 Image'),
						),
					
					'image1_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image1 Title'),
						'desc'=>JText::_('Add Image1 title'),
						'placeholder'=>'Title here',
						),
					'image1_subtitle'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image1 Sub Title'),
						'desc'=>JText::_('Add Image1 Sub title'),
						'placeholder'=>'Subtitle here',
						),
					
					'image1_text'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image1 Text'),
						'desc'=>JText::_('Add Image1 Text'),
						'placeholder'=>'Subtitle here',
						),

					'image1_button_text'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image1 Button Text'),
						'desc'=>JText::_('Add Image1 Button Text'),
						'placeholder'=>'Read More',
						),
					
					'image1_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image1 URL'),
						'desc'=>JText::_('Add Image1 url'),
						'placeholder'=>'http://www.yourdomain.com',
						),
					'image1_link_target'=>array(
						'type'=>'select', 
						'title'=>JText::_('Image1 Url Target'),
						'desc'=>JText::_('Image1 Url Target'),
						'values'=>array(
							''=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
							'_blank'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
							),
						),
					
					
					
					
					
					
					
					'image2'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image2'),
						'desc'=>JText::_('Add Image2 Image'),
						),
					
					'image2_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image2 Title'),
						'desc'=>JText::_('Add Image2 title'),
						'placeholder'=>'Title here',
						),
					'image2_subtitle'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image2 Sub Title'),
						'desc'=>JText::_('Add Image2 Sub title'),
						'placeholder'=>'Subtitle here',
						),
					
					'image2_text'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image2 Text'),
						'desc'=>JText::_('Add Image2 Text'),
						'placeholder'=>'Subtitle here',
						),
					
					'image2_button_text'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image2 Button Text'),
						'desc'=>JText::_('Add Image2 Button Text'),
						'placeholder'=>'Read More',
						),
					
					'image2_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image2 URL'),
						'desc'=>JText::_('Add Image2 url'),
						'placeholder'=>'http://www.yourdomain.com',
						),
					'image2_link_target'=>array(
						'type'=>'select', 
						'title'=>JText::_('Image2 Url Target'),
						'desc'=>JText::_('Image2 Url Target'),
						'values'=>array(
							''=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
							'_blank'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
							),
						),
						
						
						
						
					
					
					'image3'=>array(
						'type'=>'media', 
						'title'=>JText::_('Image3'),
						'desc'=>JText::_('Add Image3 Image'),
						),
					
					'image3_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image3 Title'),
						'desc'=>JText::_('Add Image3 title'),
						'placeholder'=>'Title here',
						),
					'image3_subtitle'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image3 Sub Title'),
						'desc'=>JText::_('Add Image3 Sub title'),
						'placeholder'=>'Subtitle here',
						),
					
					'image3_text'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image3 Text'),
						'desc'=>JText::_('Add Image3 Text'),
						'placeholder'=>'Subtitle here',
						),
					
					'image3_button_text'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image3 Button Text'),
						'desc'=>JText::_('Add Image3 Button Text'),
						'placeholder'=>'Read More',
						),
					
					'image3_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Image3 URL'),
						'desc'=>JText::_('Add Image3 url'),
						'placeholder'=>'http://www.yourdomain.com',
						),
					'image3_link_target'=>array(
						'type'=>'select', 
						'title'=>JText::_('Image3 Url Target'),
						'desc'=>JText::_('Image3 Url Target'),
						'values'=>array(
							''=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
							'_blank'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
							),
						),
					
						
					
					)
				),

			)

	)
);

