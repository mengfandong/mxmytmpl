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
		'addon_name'=>'sp_clients_slider',
		'category'=>'Slider',
		'title'=>JText::_('Client Slider'),
		'desc'=>JText::_('Add Awesome Client Slider'),
		'attr'=>array(
			'admin_label'=>array(
					'type'=>'text', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				),
			'heading'=>array(
					'type'=>'text', 
					'title'=>JText::_('Heading'),
					'desc'=>JText::_('Add Heading'),
					'std'=> ''
				),	
			
			'heading_color'=>array(
					'type'=>'color', 
					'title'=>JText::_('Heading Color'),
					'desc'=>JText::_('Add Heading Color'),
					'std'=> ''
				),
			
			'text_content'=>array(
					'type'=>'editor', 
					'title'=>JText::_('Content'),
					'desc'=>JText::_('Add Content'),
					'std'=> ''
				),
			
			'text_content_color'=>array(
					'type'=>'color', 
					'title'=>JText::_('Content Color'),
					'desc'=>JText::_('Add Content Color'),
					'std'=> ''
				),
			
			'background_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Background Color'),
				'desc'=>JText::_('Select Background Color'),
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
				'addon_name' =>'sp_clients_slider_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Set title'),
						'desc'=>JText::_(''),
						),

					'image1'=>array(
						'type'=>'media', 
						'title'=>JText::_('Logo 1'),
						'desc'=>JText::_('Add Logo 1 Image'),
						),
					
					'logo1_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Logo 1 Title'),
						'desc'=>JText::_('Add logo one title'),
						'placeholder'=>'Title here',
						),
					'logo1_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Logo 1 URL'),
						'desc'=>JText::_('Add logo 1 url'),
						'placeholder'=>'http://www.yourdomain.com',
						),	
					'image2'=>array(
						'type'=>'media', 
						'title'=>JText::_('Logo 2'),
						'desc'=>JText::_('Add Logo 2 Image'),
						),
					
					'logo2_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Logo 2 Title'),
						'desc'=>JText::_('Add logo 2 title'),
						'placeholder'=>'Title here',
						),
					'logo2_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Logo 2 URL'),
						'desc'=>JText::_('Add logo 2 url'),
						'placeholder'=>'http://www.yourdomain.com',
						),
					
					'image3'=>array(
						'type'=>'media', 
						'title'=>JText::_('Logo 3'),
						'desc'=>JText::_('Add Logo 3 Image'),
						),
					
					'logo3_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Logo 3 Title'),
						'desc'=>JText::_('Add logo 3 title'),
						'placeholder'=>'Title here',
						),
					'logo3_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Logo 3 URL'),
						'desc'=>JText::_('Add logo 3 url'),
						'placeholder'=>'http://www.yourdomain.com',
						),	
					'image4'=>array(
						'type'=>'media', 
						'title'=>JText::_('Logo 4'),
						'desc'=>JText::_('Add Logo 4 Image'),
						),
					
					'logo4_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Logo 4 Title'),
						'desc'=>JText::_('Add logo 4 title'),
						'placeholder'=>'Title here',
						),
					'logo4_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Logo 4 URL'),
						'desc'=>JText::_('Add logo 4 url'),
						'placeholder'=>'http://www.yourdomain.com',
						),	
						
					
					)
				),

			)

	)
);

