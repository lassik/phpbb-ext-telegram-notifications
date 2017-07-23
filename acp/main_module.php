<?php
/**
*
* @package phpBB extension - Telegram notifications
* @copyright (c) 2017 Lassi Kortela
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace lassik\telegramnotifications\acp;

class main_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang('acp/common');
		$this->tpl_name = 'demo_body';
		$this->page_title = $user->lang('ACP_DEMO_TITLE');
		add_form_key('lassik/telegram_notifications');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('lassik/telegram_notifications'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('acme_demo_goodbye', $request->variable('acme_demo_goodbye', 0));

			trigger_error($user->lang('ACP_DEMO_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'ACME_DEMO_GOODBYE'		=> $config['acme_demo_goodbye'],
		));
	}
}
