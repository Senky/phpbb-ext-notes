<?php
/**
*
* Notes extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Senky <https://github.com/Senky>
* @license GNU General Public License, version 2 (GPL-2.0)
* Estonian translation by phpBBeesti.net <http://www.phpbbeesti.net>; <et.translations@phpbbeesti.net>
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'NOTES'				=> 'Märkmed',
	'NOTES_DESCRIPTION'	=> 'Märkmed, mis on siia salvestatud ei ole nähtavad kellegile teisele kui Sinule.',
	'SAVE_NOTES'		=> 'Salvesta',
	'NOTES_SAVED'		=> 'Sinu märkmed on salvestatud.<br /><br /> <a href="%s">Tagasi märkmete juurde</a>',
));
