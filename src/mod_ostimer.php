<?php
/**
 * @package   OSTimer
 * @contact   www.alledia.com, support@alledia.com
 * @copyright 2015 Alledia.com, All rights reserved
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

defined('_JEXEC') or die();

use Alledia\OSTimer\Free\Joomla\Module;

require_once 'include.php';

$modOSTimer = Module::getInstance(null, $module);
$modOSTimer->init();
