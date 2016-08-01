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
	'NOTES'				=> 'Заметки',
	'NOTES_DESCRIPTION'	=> 'Заметки, которые Вы здесь видите, не могут видеть другие, в том числе администраторы и модераторы',
	'SAVE_NOTES'		=> 'Заметки сохранить',
	'NOTES_SAVED'		=> "Ваши заметки сохранены.<br /><br /> <a href=\"%s\">Назад к заметкам</a>",
));
