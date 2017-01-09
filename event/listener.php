<?php
/**
*
* Notes extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Senky <https://github.com/Senky>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace senky\notes\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/** @var \phpbb\config\config */
	protected $config;

	/**
	* Constructor
	*
	* @param \phpbb\template\template	$template			Template object
	* @param \phpbb\controller\helper	$helper				Helper object
	* @param \phpbb\config\config		$config				Config object
	* @access public
	*/
	public function __construct(\phpbb\template\template $template, \phpbb\controller\helper $helper, \phpbb\config\config $config)
	{
		$this->template = $template;
		$this->helper = $helper;
		$this->config = $config;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core
	 *
	 * @return array
	 * @static
	 * @access public
	 */
	public static function getSubscribedEvents()
	{
		return array(
			'core.user_setup'			=> 'load_language_on_setup',
			'core.page_header_after'	=> 'assign_common_template_variables',
		);
	}

	/**
	 * Load common language files during user setup
	 *
	 * @param object $event The event object
	 * @return null
	 * @access public
	 */
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'senky/notes',
			'lang_set' => 'notes',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	 * Assign common template variables
	 *
	 * @param object $event The event object
	 * @return null
	 * @access public
	 */
	public function assign_common_template_variables($event)
	{
		$this->template->assign_vars(array(
			'U_SENKY_NOTES'	=> $this->helper->route('senky_notes_notes'),
			'S_IS_31'		=> version_compare($this->config['version'], '3.2.0', '<'),
		));
	}
}
