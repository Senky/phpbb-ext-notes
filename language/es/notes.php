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
	'NOTES'				=> 'Notas',
	'NOTES_DESCRIPTION'	=> 'Las notas que se ven aquí no pueden ser vistas por cualquier persona, incluyendo Administradores y Moderadores.',
	'SAVE_NOTES'		=> 'Guardar notas',
	'NOTES_SAVED'		=> "Sus notas han sido guardadas.<br /><br /> <a href=\"%s\">Volver a notas</a>",
));
