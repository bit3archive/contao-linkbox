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


namespace Bit3\Linkbox\Content;

use ContentText;

class Linkbox extends ContentText
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_linkbox';

    /**
     * Compile the content element
     */
    protected function compile()
    {
		global $objPage;

        parent::compile();

        // adapted from ContentHyperlink::compile from the original Contao source
        // respective copyright Leo Feyer <http://contao.org>
		if (substr($this->url, 0, 7) == 'mailto:')
		{
			$this->url = \String::encodeEmail($this->url);
		}
		else
		{
			$this->url = ampersand($this->url);
		}

		if (strncmp($this->rel, 'lightbox', 8) !== 0 || $objPage->outputFormat == 'xhtml')
		{
			$this->Template->attribute = ' rel="'. $this->rel .'"';
		}
		else
		{
			$this->Template->attribute = ' data-lightbox="'. substr($this->rel, 9, -1) .'"';
		}

		$this->Template->rel = $this->rel; // Backwards compatibility
		$this->Template->href = $this->url;
		$this->Template->linkTitle = specialchars($this->titleText);
		$this->Template->target = '';

		// Override the link target
		if ($this->target)
		{
			$this->Template->target = ($objPage->outputFormat == 'xhtml') ? ' onclick="return !window.open(this.href)"' : ' target="_blank"';
		}
    }
}
