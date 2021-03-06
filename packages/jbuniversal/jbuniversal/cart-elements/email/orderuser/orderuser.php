<?php
/**
 * JBZoo App is universal Joomla CCK, application for YooTheme Zoo component
 * @package     jbzoo
 * @version     2.x Pro
 * @author      JBZoo App http://jbzoo.com
 * @copyright   Copyright (C) JBZoo.com,  All rights reserved.
 * @license     http://jbzoo.com/license-pro.php JBZoo Licence
 * @coder       Alexander Oganov <t_tapak@yahoo.com>
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

App::getInstance('zoo')->loader->register('JBCartElementEmailUser', 'cart-elements:email/user/user.php');

/**
 * Class JBCartElementEmailOrderUser
 */
class JBCartElementEmailOrderUser extends JBCartElementEmailUser
{
    /**
     * @return JUser
     */
    protected function _getUser()
    {
        $createdBy = $this->getOrder()->created_by;
        return JFactory::getUser($createdBy);
    }
}
