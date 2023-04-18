<?php

namespace KatanTechnologies\Component\KTBlankPage\Administrator\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_ktblankpage
 *
 * @copyright   Copyright (C) 2023 Kathryn Anderson. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * Default Controller of KT Blank Page component
 *
 * @package     Joomla.Administrator
 * @subpackage  com_ktblankpage
 */
class DisplayController extends BaseController {
    /**
     * The default view for the display method.
     *
     * @var string
     */
    protected $default_view = 'ktbp';
    
    public function display($cachable = false, $urlparams = array()) {
        return parent::display($cachable, $urlparams);
    }
    
}

