<?php
/**
*
* Notes extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Senky <https://github.com/Senky>
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'NOTES'				=> 'Notizen',
	'NOTES_DESCRIPTION'	=> 'Notizen, die du hier sehen kannst, können nicht von anderen gesehen werden, einschließlich Administratoren und Moderatoren',
	'SAVE_NOTES'		=> 'Notizen speichern',
	'NOTES_SAVED'		=> "Deine Notizen wurden gespeichert.<br /><br /> <a href=\"%s\">Zurück zu den Notizen</a>",
));
