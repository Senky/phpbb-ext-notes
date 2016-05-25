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
	'NOTES'				=> 'Notes',
	'NOTES_DESCRIPTION'	=> 'Notes you see here cannot be seen by anyone else, including administrators and moderators.',
	'SAVE_NOTES'		=> 'Save notes',
	'NOTES_SAVED'		=> 'Your notes have been saved.<br /><br /> <a href="%s">Back to notes</a>',
));
