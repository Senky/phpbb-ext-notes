<?php
/**
*
* Notes extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Senky <https://github.com/Senky>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'NOTES'				=> 'الملاحظات',
	'NOTES_DESCRIPTION'	=> 'أنت الوحيد الذي يستطيع مُشاهدة الملاحظات التي تدونها هنا. حتى المدراء والمشرفين لا يستطيعون مشاهدتها.',
	'SAVE_NOTES'		=> 'حفظ الملاحظات',
	'NOTES_SAVED'		=> "تم حفظ ملاحظاتك بنجاح.<br /><br /> <a href=\"%s\">العودة إلى الملاحظات</a>",
));
