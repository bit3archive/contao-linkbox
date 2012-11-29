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


namespace Bit3\Linkbox\DataContainer;

use ContentModel;

class Content
{
    public function updateMandatories($dc)
    {
        if ($dc->table == 'tl_content') {
            $content = ContentModel::findByPk($dc->id);

            if ($content && $content->type == 'linkbox') {
                $GLOBALS['TL_DCA']['tl_content']['subpalettes']['addImage'] = str_replace(
                    array(',imageUrl', ',fullsize'),
                    '',
                    $GLOBALS['TL_DCA']['tl_content']['subpalettes']['addImage']
                );
            }
        }
    }
}
