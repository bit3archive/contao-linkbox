<?php

/**
 * Linkbox Extension
 * for Contao Open Source CMS
 *
 * @package Linkbox
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @link    http://bit3.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Table tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('Linkbox\DataContainer\Content', 'updateMandatories');
$GLOBALS['TL_DCA']['tl_content']['palettes']['linkbox'] = '{type_legend},type,headline;{link_legend},url,target,titleText,rel;{text_legend},text;{image_legend},addImage;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
