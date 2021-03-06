<?php
/**
 * Adminer Module based on Ghost Module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright           The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package          Adminer Module
 * @since               2.3.0
 * @author              Kris <http://www.xoofoo.org>
 * @version             $Id $
**/
$module_dirname = basename( dirname( __FILE__ ) ) ;
$modversion['name'] = _MI_ADMINER_NAME;
$modversion['version'] = 3.0;
$modversion['description'] = _MI_ADMINER_DESC;
$modversion['credits'] = "Adminer.org and Alexey Ozerov ";
$modversion['author'] = "Kris - http://www.xoofoo.org";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion["image"] = "images/" . $module_dirname . "_slogo.png";
$modversion["dirname"] = $module_dirname;

// Menu
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Templates
$modversion["templates"][1]["file"] = $module_dirname . "_index.html";
$modversion['templates'][1]['description'] = '';
?>