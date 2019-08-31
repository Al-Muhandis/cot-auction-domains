<?php
/* ====================
[BEGIN_SED_EXTPLUGIN]
Code=serviceredir
Part=login
File=serviceredir.login
Hooks=users.auth.check.done
Tags=
Order=10
[END_SED_EXTPLUGIN]
==================== */

defined('SED_CODE') or die('Wrong URL');

if ($_COOKIE['serviceredir'] != $cfg['plugin']['serviceredir']['id'] || $cfg['plugin']['serviceredir']['id'] == 0)
{
	$redirect = base64_encode(trim($cfg['plugin']['serviceredir']['url'], "\r\n\t "));
	sed_setcookie('serviceredir', $cfg['plugin']['serviceredir']['id'], time() + $cfg['cookielifetime'],
		$cfg['cookiepath'], $cfg['cookiedomain'], $sys['secure'], true);
}

?>
