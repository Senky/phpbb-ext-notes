<?php
/**
*
* Notes extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Senky <https://github.com/Senky>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace senky\notes\migrations;

class release_1_0_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\senky\notes\migrations\release_1_0_0');
	}

	public function update_schema()
	{
		return array(
			'change_columns'	=> array(
				$this->table_prefix . 'users'	=> array(
					'user_note'	=> array('MTEXT_UNI', null),
				),
			),
		);
	}

	public function revert_schema()
	{
		// do NOT return to previous buggy value
		// mysql throws error when trying to set default value other than NULL
		return array();
	}
}
