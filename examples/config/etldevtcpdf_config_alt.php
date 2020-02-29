<?php
//============================================================+
// File name   : etldevtcpdf_config.php
// Begin       : 2004-06-11
// Last Update : 2013-05-16
//
// Description : Example of alternative configuration file for ETLDEVTCPDF.
// Author      : Nicola Asuni - asvvizit.com LTD - www.asvvizit.com - info@asvvizit.com
// License     : GNU-LGPL v3 (http://www.gnu.org/copyleft/lesser.html)
// -------------------------------------------------------------------
// Copyright (C) 2004-2013  Nicola Asuni - asvvizit.com LTD
//
// This file is part of ETLDEVTCPDF software library.
//
// ETLDEVTCPDF is free software: you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// ETLDEVTCPDF is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with ETLDEVTCPDF.  If not, see <http://www.gnu.org/licenses/>.
//
// See LICENSE.TXT file for more information.
//============================================================+

/**
 * Example of alternative configuration file for ETLDEVTCPDF.
 * @author Nicola Asuni
 * @package com.asvvizit.etldevtcpdf
 * @version 4.9.005
 * @since 2004-10-27
 */

/**
 * Define the following constant to ignore the default configuration file.
 */
define ('K_ETLDEVETLDEVTCPDF_EXTERNAL_CONFIG', true);

/**
 * Installation path (/var/www/etldevtcpdf/).
 * By default it is automatically calculated but you can also set it as a fixed string to improve performances.
 */
//define ('K_PATH_MAIN', '');

/**
 * URL path to etldevtcpdf installation folder (http://localhost/etldevtcpdf/).
 * By default it is automatically set but you can also set it as a fixed string to improve performances.
 */
//define ('K_PATH_URL', '');

/**
 * Path for PDF fonts.
 * By default it is automatically set but you can also set it as a fixed string to improve performances.
 */
//define ('K_PATH_FONTS', K_PATH_MAIN.'fonts/');

/**
 * Default images directory.
 * By default it is automatically set but you can also set it as a fixed string to improve performances.
 */
define ('K_PATH_IMAGES', dirname(__FILE__).'/../images/');

/**
 * Deafult image logo used be the default Header() method.
 * Please set here your own logo or an empty string to disable it.
 */
define ('PDF_HEADER_LOGO', 'etldevtcpdf_logo.jpg');

/**
 * Header logo image width in user units.
 */
define ('PDF_HEADER_LOGO_WIDTH', 30);

/**
 * Cache directory for temporary files (full path).
 */
define ('K_PATH_CACHE', sys_get_temp_dir().'/');

/**
 * Generic name for a blank image.
 */
define ('K_BLANK_IMAGE', '_blank.png');

/**
 * Page format.
 */
define ('PDF_PAGE_FORMAT', 'A4');

/**
 * Page orientation (P=portrait, L=landscape).
 */
define ('PDF_PAGE_ORIENTATION', 'P');

/**
 * Document creator.
 */
define ('PDF_CREATOR', 'ETLDEVTCPDF');

/**
 * Document author.
 */
define ('PDF_AUTHOR', 'ETLDEVTCPDF');

/**
 * Header title.
 */
define ('PDF_HEADER_TITLE', 'ETLDEVTCPDF Example');

/**
 * Header description string.
 */
define ('PDF_HEADER_STRING', "by Nicola Asuni - asvvizit.com\nwww.etldevtcpdf.org");

/**
 * Document unit of measure [pt=point, mm=millimeter, cm=centimeter, in=inch].
 */
define ('PDF_UNIT', 'mm');

/**
 * Header margin.
 */
define ('PDF_MARGIN_HEADER', 5);

/**
 * Footer margin.
 */
define ('PDF_MARGIN_FOOTER', 10);

/**
 * Top margin.
 */
define ('PDF_MARGIN_TOP', 27);

/**
 * Bottom margin.
 */
define ('PDF_MARGIN_BOTTOM', 25);

/**
 * Left margin.
 */
define ('PDF_MARGIN_LEFT', 15);

/**
 * Right margin.
 */
define ('PDF_MARGIN_RIGHT', 15);

/**
 * Default main font name.
 */
define ('PDF_FONT_NAME_MAIN', 'arial');

/**
 * Default main font size.
 */
define ('PDF_FONT_SIZE_MAIN', 10);

/**
 * Default data font name.
 */
define ('PDF_FONT_NAME_DATA', 'arial');

/**
 * Default data font size.
 */
define ('PDF_FONT_SIZE_DATA', 8);

/**
 * Default monospaced font name.
 */
define ('PDF_FONT_MONOSPACED', 'arial');

/**
 * Ratio used to adjust the conversion of pixels to user units.
 */
define ('PDF_IMAGE_SCALE_RATIO', 1.25);

/**
 * Magnification factor for titles.
 */
define('HEAD_MAGNIFICATION', 1.1);

/**
 * Height of cell respect font height.
 */
define('K_CELL_HEIGHT_RATIO', 1.25);

/**
 * Title magnification respect main font size.
 */
define('K_TITLE_MAGNIFICATION', 1.3);

/**
 * Reduction factor for small font.
 */
define('K_SMALL_RATIO', 2/3);

/**
 * Set to true to enable the special procedure used to avoid the overlappind of symbols on Thai language.
 */
define('K_THAI_TOPCHARS', true);

/**
 * If true allows to call ETLDEVTCPDF methods using HTML syntax
 * IMPORTANT: For security reason, disable this feature if you are printing user HTML content.
 */
define('K_ETLDEVETLDEVTCPDF_CALLS_IN_HTML', true);

/**
 * If true and PHP version is greater than 5, then the Error() method throw new exception instead of terminating the execution.
 */
define('K_ETLDEVETLDEVTCPDF_THROW_EXCEPTION_ERROR', false);

//============================================================+
// END OF FILE
//============================================================+