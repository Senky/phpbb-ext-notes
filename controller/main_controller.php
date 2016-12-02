<?php
/**
*
* Notes extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Senky <https://github.com/Senky>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace senky\notes\controller;

class main_controller
{
	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var string */
	protected $root_path;

	/** @var string */
	protected $php_ext;

	/**
	* Constructor
	*
	* @param \phpbb\db\driver\driver_interface	$template		Database object
	* @param \phpbb\template\template			$template		Template object
	* @param \phpbb\user						$user			User object
	* @param \phpbb\controller\helper			$helper			Controller helper object
	* @param string								$root_path		phpBB root path
	* @param string								$php_ext		php ext
	* @access public
	*/
	public function __construct(\phpbb\db\driver\driver_interface $db, \phpbb\template\template $template, \phpbb\user $user, \phpbb\controller\helper $helper, \phpbb\request\request $request, $root_path, $php_ext)
	{
		$this->db = $db;
		$this->template = $template;
		$this->user = $user;
		$this->helper = $helper;
		$this->request = $request;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;
	}

	/**
	* Handle notes
	*
	* @return null
	* @access public
	*/
	public function handle_notes()
	{
		if (!$this->user->data['is_registered'])
		{
			login_box($this->helper->route('senky_notes_notes'));
		}
		if ($this->user->data['is_bot'])
		{
			redirect(append_sid("{$this->root_path}index.{$this->php_ext}"));
		}

		if ($this->request->is_set_post('note') && check_form_key('notes'))
		{
			$note = $this->request->variable('note', '', true);
			$sql = 'UPDATE ' . USERS_TABLE . '
					SET user_note = "' . $this->db->sql_escape($note) . '"
					WHERE user_id = ' . (int) $this->user->data['user_id'];
			$this->db->sql_query($sql);

			return $this->helper->message('NOTES_SAVED', array($this->helper->route('senky_notes_notes')));
		}

		add_form_key('notes');
		$this->template->assign_vars(array(
			'NOTE'	=> $this->user->data['user_note'],
		));

		return $this->helper->render('notes.html', $this->user->lang('NOTES'));
	}
}
