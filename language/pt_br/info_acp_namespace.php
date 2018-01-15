<?php
/**
 *
 * @package phpBB extension - Telegram notifications
 * @copyright (c) 2017 Lassi Kortela
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 0.4.0] (https://github.com/phpBBTraducoes)
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
	'ACP_TELEGRAM_NOTIFICATIONS'  => 'Notificações do Telegram',
	'ACP_TELEGRAM_TELEGRAM_IDS'	  => 'IDs do Telegram',
	'ACP_TELEGRAM_FIND_CHAT_ID'	  => 'Procurar ID de chat',
	'ACP_TELEGRAM_FOUND_CHAT_ID'  => 'Encontrou o seguinte ID de chat',
	'ACP_TELEGRAM_USE_CHAT_ID'	  => 'Use essa ID de chat',
	'ACP_TELEGRAM_IDS_UPDATED'	  => 'As IDs do Telegram foram atualizadas',
	'ACP_TELEGRAM_BOT_AUTH_TOKEN' => 'Token de autenticação do Telegram bot',
	'ACP_TELEGRAM_CHAT_ID'		  => 'ID do chat do Telegrama',
	'ACP_TELEGRAM_LAST_ERROR'	  => 'Último erro',
	'ACP_TELEGRAM_ERROR'		  => 'Mensagem de erro',
));
