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
		'addon_name'=>'sp_testimonial_slider',
		'category'=>'Slider',
		'title'=>JText::_('Testimonial Slider'),
		'desc'=>JText::_('Amazing Testimonial Slider'),
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
				'addon_name' =>'sp_testimonial_slider_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					
					
					
					'author1_name'=>array(
						'type'=>'text', 
						'title'=>JText::_('First Author Name'),
						'desc'=>JText::_('Add First Author Name'),
						'placeholder'=>'John Doe',
						),

					'testi1_img'=>array(
						'type'=>'media', 
						'title'=>JText::_('First Testimonial Author Image'),
						'desc'=>JText::_('Add First Testimonial Author Image'),
						),
					
					'author1_designation'=>array(
						'type'=>'text', 
						'title'=>JText::_('First Author Designation'),
						'desc'=>JText::_('Add First Author Designation'),
						'placeholder'=>'Director',
						),
					
					'author1_website'=>array(
						'type'=>'text', 
						'title'=>JText::_('First Author Website'),
						'desc'=>JText::_('Add First Author Website'),
						'placeholder'=>'www.yourdomain.com',
						),
					
					'testi1_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Url'),
						'desc'=>JText::_('Add url'),
						'placeholder'=>'http://www.yourdomain.com',
						),
					'testi1_link_target'=>array(
						'type'=>'select', 
						'title'=>JText::_('Url Target'),
						'desc'=>JText::_('Add Url Target'),
						'values'=>array(
							''=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
							'_blank'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
							),
						),
					
					
					'testi1_text'=>array(
						'type'=>'editor', 
						'title'=>JText::_('First Author Testimonial'),
						'desc'=>JText::_(''),
						'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. Nec sapien convallis vulputate rhoncus vel dui.'
						),

					
					
					
					
					
					
					
					
					'author2_name'=>array(
						'type'=>'text', 
						'title'=>JText::_('Second Author Name'),
						'desc'=>JText::_('Add Second Author Name'),
						'placeholder'=>'John Doe',
						),

					'testi2_img'=>array(
						'type'=>'media', 
						'title'=>JText::_('Second Testimonial Author Image'),
						'desc'=>JText::_('Add Second Testimonial Author Image'),
						),
					
					'author2_designation'=>array(
						'type'=>'text', 
						'title'=>JText::_('Second Author Designation'),
						'desc'=>JText::_('Add Second Author Designation'),
						'placeholder'=>'Director',
						),
					
					'author2_website'=>array(
						'type'=>'text', 
						'title'=>JText::_('Second Author Website'),
						'desc'=>JText::_('Add Second Author Website'),
						'placeholder'=>'www.yourdomain.com',
						),
					
					'testi1_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Url'),
						'desc'=>JText::_('Add url'),
						'placeholder'=>'http://www.yourdomain.com',
						),
					'testi2_link_target'=>array(
						'type'=>'select', 
						'title'=>JText::_('Url Target'),
						'desc'=>JText::_('Add Url Target'),
						'values'=>array(
							''=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
							'_blank'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
							),
						),
					
					
					'testi2_text'=>array(
						'type'=>'editor', 
						'title'=>JText::_('Second Author Testimonial'),
						'desc'=>JText::_(''),
						'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. Nec sapien convallis vulputate rhoncus vel dui.'
						),
						
						
						
						
						
						
						
					'author3_name'=>array(
						'type'=>'text', 
						'title'=>JText::_('Third Author Name'),
						'desc'=>JText::_('Add Third Author Name'),
						'placeholder'=>'John Doe',
						),

					'testi3_img'=>array(
						'type'=>'media', 
						'title'=>JText::_('Third Testimonial Author Image'),
						'desc'=>JText::_('Add Third Testimonial Author Image'),
						),
					
					'author3_designation'=>array(
						'type'=>'text', 
						'title'=>JText::_('Third Author Designation'),
						'desc'=>JText::_('Add Third Author Designation'),
						'placeholder'=>'Director',
						),
					
					'author3_website'=>array(
						'type'=>'text', 
						'title'=>JText::_('Third Author Website'),
						'desc'=>JText::_('Add Third Author Website'),
						'placeholder'=>'www.yourdomain.com',
						),
					
					'testi3_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Url'),
						'desc'=>JText::_('Add url'),
						'placeholder'=>'http://www.yourdomain.com',
						),
					'testi3_link_target'=>array(
						'type'=>'select', 
						'title'=>JText::_('Url Target'),
						'desc'=>JText::_('Add Url Target'),
						'values'=>array(
							''=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
							'_blank'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
							),
						),
					
					
					'testi3_text'=>array(
						'type'=>'editor', 
						'title'=>JText::_('Third Author Testimonial'),
						'desc'=>JText::_(''),
						'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. Nec sapien convallis vulputate rhoncus vel dui.'
						),
					
					
					
						
					
					)
				),

			)

	)
);

