<?php

namespace KatanTechnologies\Component\KTBlankPage\Site\Model;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Model\ItemModel;
use Joomla\CMS\Language\Text;

/**
 * @package     Joomla.Site
 * @subpackage  com_ktblankpage
 *
 * @copyright   Copyright (C) 2023 Kathryn Anderson. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * KT Blank Page Message Model
 * @since 0.0.5
 */
class MessageModel extends ItemModel {

    /**
     * Returns a message for display
     * @param integer $pk Primary key of the "message item", currently unused
     * @return object Message object
     */
    public function getItem($pk= null): object {
        $item = new \stdClass();
        $item->message = Text::_('COM_KTBP_MSG_GREETING');
        return $item;
    }
        
}
