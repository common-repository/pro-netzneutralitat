<?php
/*
Plugin Name: Pro Netzneutralität
Plugin URI: http://pro-netzneutralitaet.de
Description: Mit diesem Plugin unterstützt Du die Kampagne 'Pro Netzneutralität'. YouTube- und Vimeo-Videos werden mit einem Banner überblendet, welches auf die Aktion hinweist.
Version: 1.3.2
Author: Stefan Strigler
Author URI: http://blog.jwchat.org
License: GPL2
*/
/*  Copyright 2010  Stefan Strigler <stefan@strigler.de>

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function proNN_script() {
	echo '<script type="text/javascript" src="' . plugins_url( plugin_basename( dirname(__FILE__) ) ) . '/'.'premium.js"></script>';
}

add_action('wp_head', 'proNN_script');

?>
