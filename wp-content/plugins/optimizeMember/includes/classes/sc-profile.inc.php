<?php
/**
* Shortcode for `[optimizeMember-Profile /]`.
*
* Copyright: © 2009-2011
* {@link http://www.optimizepress.com/ optimizePress, Inc.}
* ( coded in the USA )
*
* Released under the terms of the GNU General Public License.
* You should have received a copy of the GNU General Public License,
* along with this software. In the main directory, see: /licensing/
* If not, see: {@link http://www.gnu.org/licenses/}.
*
* @package optimizeMember\Profiles
* @since 3.5
*/
if (realpath (__FILE__) === realpath ($_SERVER["SCRIPT_FILENAME"]))
	exit ("Do not access this file directly.");
/**/
if (!class_exists ("c_ws_plugin__optimizemember_sc_profile"))
	{
		/**
		* Shortcode for `[optimizeMember-Profile /]`.
		*
		* @package optimizeMember\Profiles
		* @since 3.5
		*/
		class c_ws_plugin__optimizemember_sc_profile
			{
				/**
				* Handles the Shortcode for: `[optimizeMember-Profile /]`.
				*
				* @package optimizeMember\Profiles
				* @since 3.5
				*
				* @attaches-to ``add_shortcode("optimizeMember-Profile");``
				*
				* @param array $attr An array of Attributes.
				* @param str $content Content inside the Shortcode.
				* @param str $shortcode The actual Shortcode name itself.
				* @return inner Return-value of inner routine.
				*/
				public static function sc_profile ($attr = FALSE, $content = FALSE, $shortcode = FALSE)
					{
						return c_ws_plugin__optimizemember_sc_profile_in::sc_profile ($attr, $content, $shortcode);
					}
			}
	}
?>