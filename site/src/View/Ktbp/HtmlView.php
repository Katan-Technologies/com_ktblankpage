<?php

namespace KatanTechnologies\Component\KTBlankPage\Site\View\Ktbp;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

/**
 * @package     Joomla.Site
 * @subpackage  com_ktblankpage
 *
 * @copyright   Copyright (C) 2023 Kathryn Anderson. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * View for the user identity validation form
 */
class HtmlView extends BaseHtmlView {
    

    /**
     * Display the view
     *
     * @param   string  $template  The name of the layout file to parse.
     * @return  void
     */
    public function display($template = null) {
        // Call the parent display to display the layout file
        parent::display($template);
    }

}
