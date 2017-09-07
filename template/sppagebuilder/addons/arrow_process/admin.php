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
		'addon_name'=>'sp_arrow_process',
		'title'=>JText::_('Arrow Process/Stages Bar'),
		'desc'=>JText::_('Amazing Arrow Process or Stages Bar'),
		'attr'=>array(

			'admin_label'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
				'std'=> ''
				),

			

			'icon_name'=>array(
				'type'=>'icon', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME_DESC'),
				'std'=> ''
				),

			'icon_size'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_DESC'),
				'placeholder'=>36,
				'std'=>36,
				),

			'icon_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_COLOR_DESC'),
				),


			'icon_margin'=>array(
				'type'=>'text',
				'title'=>JText::_('Icon Margin'),
				'desc'=>JText::_('Add Icon Margin'),
				'placeholder'=>'10px 10px 10px 10px',
				),
			
			
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title'),
				'desc'=>JText::_('Add Title of Element'),
				'std'=> 'Title Gose Here'
				),
			'title_margin'=>array(
				'type'=>'text', 
				'title'=>JText::_('Title Margin'),
				'desc'=>JText::_('Add Title Margin'),
				'placeholder'=>'10px 10px 10px 10px'
				),
			
			'title_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Title Color'),
				'desc'=>JText::_('Select Title color'),
				),
				
			'title_hover_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Title Hover Color'),
				'desc'=>JText::_('Select Title Hover color'),
				),
			
			'arrow_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Arrow Color'),
				'desc'=>JText::_('Select Arrow color'),
				),
			
			'arrow_hover_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Arrow Hover Color'),
				'desc'=>JText::_('Select Arrow Hover color'),
				),
			
			'text'=>array(
				'type'=>'editor', 
				'title'=>JText::_('Text'),
				'desc'=>JText::_('Select Text'),
				),
				
			'text_color'=>array(
				'type'=>'color', 
				'title'=>JText::_('Text Color'),
				'desc'=>JText::_('Select Text color'),
				),
			
			
			
			'alignment'=>array(
				'type'=>'select',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ICON_ALIGNMENT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ICON_ALIGNMENT_DESC'),
				'values'=>array(
					'left'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_LEFT'),
					'center'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CENTER'),
					'right'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_RIGHT'),
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