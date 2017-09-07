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
		'addon_name'=>'sp_staff',
		'category'=>'Slider',
		'title'=>JText::_('Staff Slider'),
		'desc'=>JText::_('Add Staff Carsoule to page'),
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
			'background'=>array(
				'type'=>'color', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_BACKGROUND_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_BACKGROUND_COLOR_DESC'),
				),
			'color'=>array(
				'type'=>'color', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_FONT_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_FONT_COLOR_DESC'),
				),
			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=> ''
				),
			'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_staff_item',
				'title'=> 'Repetable', 
				'attr'=>  array(
					'title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Staff Member First Name'),
						'desc'=>JText::_('Add Staff Member First Name'),
						'std'=>'John',
						),
					'title_color'=>array(
						'type'=>'color', 
						'title'=>JText::_('Name Color'),
						'desc'=>JText::_('Select Name Color'),
						'std'=>'',
						),
					
					
					'last_name'=>array(
						'type'=>'text', 
						'title'=>JText::_('Staff Member Last Name'),
						'desc'=>JText::_('Add Staff Member Last Name'),
						'std'=>'Doe',
						),
					'last_name_color'=>array(
						'type'=>'color', 
						'title'=>JText::_('Last Name Color'),
						'desc'=>JText::_('Select Last Name Color'),
						'std'=>'',
						),
					
					'designation'=>array(
						'type'=>'text', 
						'title'=>JText::_('Designation'),
						'desc'=>JText::_('Add Staff Member Designation'),
						'std'=>'CEO/Founder',
						),
					
					'website'=>array(
						'type'=>'text', 
						'title'=>JText::_('Related Website'),
						'desc'=>JText::_('Add Staff Member Related Website'),
						'std'=>'',
						),
					
					'image'=>array(
						'type'=>'media', 
						'title'=>JText::_('Avatar Image'),
						'desc'=>JText::_('Add Staff Member Avatar'),
						),
					
					'content_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Content Title'),
						'desc'=>JText::_('Add Content Title'),
						'std'=>'Few Words About Me:',
						),
					
					'content_title_color'=>array(
						'type'=>'color', 
						'title'=>JText::_('Content Title Color'),
						'desc'=>JText::_('Select Content Title Color'),
						'std'=>'',
						),
					'content'=>array(
						'type'=>'editor', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEM_CONTENT'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEM_CONTENT_DESC'),
						'std'=> 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.'
						),
					
					
					'skill_bar_color'=>array(
						'type'=>'color', 
						'title'=>JText::_('Skill Active Bar Color'),
						'desc'=>JText::_('Add Skill Active bar color'),
						'std'=>'',
						),
					
					'skill_bar_inactive_color'=>array(
						'type'=>'color', 
						'title'=>JText::_('Skill Inctive Bar Color'),
						'desc'=>JText::_('Add Skill Inactive bar color'),
						'std'=>'',
						),
					
					'skill_text_color'=>array(
						'type'=>'color', 
						'title'=>JText::_('Skill Bar Text Color'),
						'desc'=>JText::_('Add Skill bar text color'),
						'std'=>'',
						),
					
					'skill_bar_height'=>array(
						'type'=>'number', 
						'title'=>JText::_('Skill Bar Height'),
						'desc'=>JText::_('Add Skill bar height'),
						'std'=>'',
						),
					
					'skill1_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Skill 1 Title'),
						'desc'=>JText::_('Add Skill 1 Title Title'),
						'std'=>'',
						),
					'skill1_percent'=>array(
						'type'=>'number', 
						'title'=>JText::_('Skill 1 Percentage'),
						'desc'=>JText::_('Add Skill 1 Percentage Title'),
						'std'=>'',
						),
					'skill2_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Skill 2 Title'),
						'desc'=>JText::_('Add Skill 2 Title Title'),
						'std'=>'',
						),
					'skill2_percent'=>array(
						'type'=>'number', 
						'title'=>JText::_('Skill 2 Percentage'),
						'desc'=>JText::_('Add Skill 2 Percentage Title'),
						'std'=>'',
						),
					
					'skill3_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Skill 3 Title'),
						'desc'=>JText::_('Add Skill 3 Title Title'),
						'std'=>'',
						),
					'skill3_percent'=>array(
						'type'=>'number', 
						'title'=>JText::_('Skill 3 Percentage'),
						'desc'=>JText::_('Add Skill 3 Percentage Title'),
						'std'=>'',
						),
					
					'skill4_title'=>array(
						'type'=>'text', 
						'title'=>JText::_('Skill 4 Title'),
						'desc'=>JText::_('Add Skill 4 Title Title'),
						'std'=>'',
						),
					'skill4_percent'=>array(
						'type'=>'number', 
						'title'=>JText::_('Skill 4 Percentage'),
						'desc'=>JText::_('Add Skill 4 Percentage Title'),
						'std'=>'',
						),

					
					'icon1'=>array(
						'type'=>'icon', 
						'title'=>JText::_('Social 1 Icon'),
						'desc'=>JText::_('Select Social Icon 1'),
						'std'=>'',
						),
					
					'icon1_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Social Icon 1 URL'),
						'desc'=>JText::_('Select Social Icon 1 URL'),
						'std'=>'',
						),
					
					'icon2'=>array(
						'type'=>'icon', 
						'title'=>JText::_('Social 2 Icon'),
						'desc'=>JText::_('Select Social Icon 2'),
						'std'=>'',
						),
					
					'icon2_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Social Icon 2 URL'),
						'desc'=>JText::_('Select Social Icon 2 URL'),
						'std'=>'',
						),
						
					'icon3'=>array(
						'type'=>'icon', 
						'title'=>JText::_('Social 3 Icon'),
						'desc'=>JText::_('Select Social Icon 3'),
						'std'=>'',
						),
					
					'icon3_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Social Icon 3 URL'),
						'desc'=>JText::_('Select Social Icon 3 URL'),
						'std'=>'',
						),
						
					'icon4'=>array(
						'type'=>'icon', 
						'title'=>JText::_('Social 4 Icon'),
						'desc'=>JText::_('Select Social Icon 4'),
						'std'=>'',
						),
					
					'icon4_url'=>array(
						'type'=>'text', 
						'title'=>JText::_('Social Icon 4 URL'),
						'desc'=>JText::_('Select Social Icon 4 URL'),
						'std'=>'',
						),
					
					
					
					)
				),

			)

	)
);

