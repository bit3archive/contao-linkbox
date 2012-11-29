<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Linkbox
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Bit3',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// DataContainer
	'Bit3\Linkbox\DataContainer\Content' => 'system/modules/Linkbox/DataContainer/Content.php',

	// Content
	'Bit3\Linkbox\Content\Linkbox'       => 'system/modules/Linkbox/Content/Linkbox.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_linkbox' => 'system/modules/Linkbox/templates',
));
