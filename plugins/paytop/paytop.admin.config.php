<?php

/* ====================
[BEGIN_COT_EXT]
Hooks=admin.config.edit.loop
[END_COT_EXT]
==================== */

/**
 * paytop admin usability modification
 *
 * @package paytop
 * @version 1.0.2
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('paytop', 'plug');
$adminhelp = $L['paytop_help'];

if ($p == 'paytop' && $row['config_name'] == 'paytopareas' && $cfg['jquery'])
{
	$sskin = cot_tplfile('paytop.admin.config', 'plug', true);
	$tt = new XTemplate($sskin);
	
	$tpaset = str_replace("\r\n", "\n", $row['config_value']);
	$tpaset = explode("\n", $tpaset);

	$jj = 0;
	foreach ($tpaset as $lineset)
	{
		$lines = explode("|", $lineset);
		$lines[0] = trim($lines[0]);
		$lines[1] = trim($lines[1]);
		$lines[2] = (float)trim($lines[2]);
		
		if (!empty($lines[0]) && $lines[2] > 0)
		{
			$tt->assign(array(
				'ADDNUM' => $jj,
				'ADDAREA' => cot_inputbox('text', 'area', $lines[0], 'class="area_id"'),
				'ADDNAME' => cot_inputbox('text', 'name', $lines[1], 'class="area_name"'),
				'ADDCOST' => cot_inputbox('text', 'cost', $lines[2], 'class="area_cost"'),
			));
			$tt->parse('MAIN.ADDITIONAL');
			$jj++;
		}
	}

	$jj++;
	$tt->assign(array(
		'CATNUM' => $jj
	));
	$tt->parse('MAIN');

	$t->assign(array(
		'ADMIN_CONFIG_ROW_CONFIG_MORE' => $tt->text('MAIN') . '<div id="helptext">' . $config_more . '</div>'
	));
}

?>