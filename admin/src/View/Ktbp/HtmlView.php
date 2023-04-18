<?php

namespace KatanTechnologies\Component\KTBlankPage\Administrator\View\Ktbp;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_ktblankpage
 *
 * @copyright   Copyright (C) 2023 Kathryn Anderson. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * Main "KT Blank Page" Admin View
 */
class HtmlView extends BaseHtmlView {
    
    /**
     * Display the main "KT Blank Page" view
     *
     * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
     * @return  void
     */
    function display($tpl = null) {
        parent::display($tpl);
    }

}

