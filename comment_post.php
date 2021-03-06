<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright    {@link https://xoops.org/ XOOPS Project}
 * @license      {@link https://www.gnu.org/licenses/gpl-2.0.html GNU GPL 2 or later}
 * @package
 * @since
 * @author       XOOPS Development Team
 */

use XoopsModules\Lexikon;

require dirname(dirname(__DIR__)) . '/mainfile.php';


$helper = Helper::getInstance();

//--- verify that the user can post comments
global $xoopsModuleConfig, $xoopsUser;
if (!isset($xoopsModuleConfig)) {
    exit();
}
if (0 == $helper->getConfig('com_rule')) {
    exit();
}    // Comments deactivated
if (0 == $helper->getConfig('com_anonpost') && !is_object($xoopsUser)) {
    exit();
} // Anonymous users can't post

require XOOPS_ROOT_PATH . '/include/comment_post.php';
