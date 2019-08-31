<?php

/**
 * sbr module
 *
 * @package sbr
 * @version 1.0.0
 * @author CMSWorks Team, Suleymanov Rent
 * @copyright Copyright (c) CMSWorks, Suleymanov Rent
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['cfg_tax'] = array('Комиссия сервиса за оформление сделки (%)');
$L['cfg_mintax'] = array('Минимальная комиссия сервиса за оформление сделки');
$L['cfg_mincost'] = array('Минимальная цена домена (0 - не проверяется)');
$L['cfg_maxcost'] = array('Максимальная цена домена (0 - не проверяется)');
$L['cfg_maxdays'] = array('Максимальный срок передачи домена (0 - не проверяется)');
$L['cfg_maxrowsperpage'] = array('Число сделок на странице');
$L['cfg_filepath'] = array('Путь к директории хранения прикрепленных файлов');
$L['cfg_extensions'] = array('Допустимые форматы файлов');

$L['sbr'] = 'Сделки';
$L['sbr_mydeals'] = 'Мои сделки';

$L['sbr_admin_home_all'] = 'Все сделки';
$L['sbr_admin_home_claims'] = 'Арбитраж';
$L['sbr_admin_home_done'] = 'Завершенные';

$L['sbr_createlink'] = 'Предложить сделку';
$L['sbr_addtitle'] = 'Оформление сделки';
$L['sbr_edittitle'] = 'Изменение условий сделки';

$L['sbr_nav_info'] = 'Информация о сделке<br/><b>Цена и домен</b>';
$L['sbr_nav_stagenum'] = 'Домен №';

$L['sbr_title'] = 'Название сделки';
$L['sbr_employer'] = 'Покупатель';
$L['sbr_performer'] = 'Продавец';
$L['sbr_employer_placeholder'] = 'Введите логин/email покупателя';
$L['sbr_performer_placeholder'] = 'Введите логин/email продавца';
$L['sbr_stagetitle'] = 'Наименование';
$L['sbr_stagetext'] = 'Требования/условия передачи';
$L['sbr_stagecost'] = 'Цена';
$L['sbr_stagedays'] = 'Сроки';
$L['sbr_stagefiles'] = 'Файлы';
$L['sbr_stagestart'] = 'Начало передачи домена';
$L['sbr_stagedone'] = 'Приемка домена';
$L['sbr_stageexpiredays'] = 'Осталось';
$L['sbr_stageexpired'] = 'Срок передачи уже более 6 дней!';
$L['sbr_stagemenu'] = 'Решение по передаче домена';
$L['sbr_mincost'] = 'минимальная цена';
$L['sbr_maxdays'] = 'отсчет времени начнется с момента резервирования денег, максимальное время передачи домена';

$L['sbr_sendtoconfirm'] = 'Отправить на согласование';

$L['sbr_info'] = 'Общая информация';
$L['sbr_stage'] = 'Домен';
$L['sbr_history'] = 'История сделки';
$L['sbr_calc_title'] = 'Расчет суммы сделки с учетом комиссии';
$L['sbr_calc_summ'] = 'Сумма сделки';
$L['sbr_calc_tax'] = 'Комиссия сервиса';
$L['sbr_calc_total'] = 'Итого к оплате';
$L['sbr_calc_performersumm'] = 'Итого к получению';

$L['sbr_addstagelink'] = 'Добавить домен';

$L['sbr_status_title'] = 'Статус сделки';

$L['sbr_deals_all'] = 'Все сделки';
$L['sbr_deals_cancel'] = 'Отмененные';
$L['sbr_deals_refuse'] = 'Не согласованные';
$L['sbr_deals_new'] = 'На согласовании';
$L['sbr_deals_confirm'] = 'Оплатить';
$L['sbr_deals_process'] = 'В процессе передачи';
$L['sbr_deals_done'] = 'Завершенные';
$L['sbr_deals_claim'] = 'Арбитраж';

$L['sbr_status_cancel'] = 'Отмененная сделка';
$L['sbr_status_refuse'] = 'Не согласованная';
$L['sbr_status_new'] = 'На согласовании';
$L['sbr_status_confirm'] = 'Ожидает оплаты';
$L['sbr_status_process'] = 'В процессе передачи';
$L['sbr_status_done'] = 'Завершенная сделка';
$L['sbr_status_claim'] = 'Арбитраж';

$L['sbr_error_rsbrperformer'] = 'Пользователь (Продавец) с указанным логином не найден';
$L['sbr_error_rsbrperformernotyou'] = 'Вы не можете быть одновременно и Продавцом';
$L['sbr_error_rsbremployer'] = 'Пользователь (Покупатель) с указанным логином не найден';
$L['sbr_error_rsbremployernotyou'] = 'Вы не можете быть одновременно и Покупателем';
$L['sbr_error_rsbrtitle'] = 'Не указано название сделки';
$L['sbr_error_rstagetitle'] = 'Не указано наименование';
$L['sbr_error_rstagetext'] = 'Не заполнены требования к передаче домена';
$L['sbr_error_rstagecost'] = 'Не указана цена';
$L['sbr_error_rstagecostmin'] = 'Цена слишком маленькая';
$L['sbr_error_rstagecostmax'] = 'Цена слишком большая';
$L['sbr_error_rstagedays'] = 'Не указаны сроки';
$L['sbr_error_rstagedaysmax'] = 'Сроки слишком большие';

$L['sbr_action_confirm'] = 'Согласиться';
$L['sbr_action_refuse'] = 'Отказаться';
$L['sbr_action_cancel'] = 'Отменить сделку';
$L['sbr_action_edit'] = 'Изменить';
$L['sbr_action_pay'] = 'Оплатить сделку';
$L['sbr_action_claim'] = 'Обратиться в арбитраж';
$L['sbr_action_stagedone'] = 'Принять передачу домена';

$L['sbr_paydesc'] = 'Оплата сделки "{$sbr_title}"';

$L['sbr_mail_toperformer_new_header'] = 'Согласование сделки "{$sbr_title}"';
$L['sbr_mail_toperformer_new_body'] = 'Здравствуйте, {$performer_name}. '."\n\n".'
	Покупатель {$employer_name}, предлагает вам заключить безопасную сделку "{$sbr_title}" с общей ценой {$sbr_cost}. 
	Более подробно ознакомиться с условиями сделки можноbr по ссылке: {$link}'; /* === Добавлено === */ 
$L['sbr_mail_toempoyer_new_body'] = 'Здравствуйте, {$employer_name}. '."\n\n".'
	Вы предложили Продавцу {$performer_name} заключить безопасную сделку "{$sbr_title}" с общей ценой {$sbr_cost}';   
$L['sbr_mail_tobroker_new_body'] = 'Здравствуйте, {$broker_name}. '."\n\n".'
	Покупателю {$employer_name} и продавцу {$performer_name} Вами была предложена безопасная сделка "{$sbr_title}" с общей ценой {$sbr_cost}'; /* ===== */   

$L['sbr_mail_toperformer_edited_header'] = 'Изменения в условиях сделки "{$sbr_title}"';
$L['sbr_mail_toperformer_edited_body'] = 'Здравствуйте, {$performer_name}. '."\n\n".'
	Покупатель {$employer_name}, изменил условия безопасной сделки "{$sbr_title}" и предлагает вам ознакомиться с ними. 
	Более подробно ознакомиться с условиями сделки можно по ссылке: {$link}';
$L['sbr_mail_tobroker_edited_body'] = 'Здравствуйте, {$broker_name}. '."\n\n".'
	Покупатель {$employer_name}, изменил условия безопасной сделки "{$sbr_title}" и предлагает Продавцу {$performer_name} ознакомиться с ними';   

$L['sbr_mail_posts_header'] = 'Новое сообщение по сделке № {$sbr_id} ({$sbr_title})';
$L['sbr_mail_posts_body'] = 'Здравствуйте, {$user_name}.<br/><br/>{$sender_name} отправил вам сообщение:<br/><br/>{$post_text}<br/><br/>Подробности смотрите по ссылке: {$link}';
	
$L['sbr_mail_notification_header'] = 'Уведомнение по сделке № {$sbr_id} ({$sbr_title})';
$L['sbr_mail_notification_body'] = 'Здравствуйте, {$user_name}.<br/><br/>{$post_text}<br/><br/>Подробности смотрите по ссылке: {$link}';

$L['sbr_posts_performer_new'] = 'Пожалуйста, ознакомьтесь с условиями сделки и подтвердите свое участие. После этого Покупатель произведет оплату сделки и вы сможете приступить к процессу передачи.';
$L['sbr_posts_employer_new'] = 'Сделка отправлена на согласование продавцу. Как только продавец подтвердит свое участие, вы получите уведомление и сможете произвести оплату.';
/* === Добавлено === */
$L['sbr_posts_broker_new'] = 'Сделка отправлена на согласование продавцу. Как только продавец подтвердит свое участие, покупатель получит уведомление и сможет произвести оплату.';
/* ===== */

$L['sbr_posts_performer_edited'] = 'Пожалуйста, ознакомьтесь с новыми условиями сделки и подтвердите свое участие. После этого Покупатель произведет оплату сделки и вы сможете приступить к процессу передачи.';
$L['sbr_posts_employer_edited'] = 'Сделка с изменеными условиями отправлена на согласование продавцу. Как только продавец подтвердит свое участие, вы получите уведомление и сможете произвести оплату.';
$L['sbr_posts_broker_edited'] = 'Сделка с изменеными условиями отправлена на согласование продавцу. Как только продавец подтвердит свое участие, Покупатель получит уведомление и сможет произвести оплату.';

$L['sbr_posts_performer_refuse'] = 'Вы отказались от сделки. Покупатель может пересмотреть условия сделки и повторить процедуру согласования.';
$L['sbr_posts_employer_refuse'] = 'Продавец отказался от сделки. Вы можете пересмотреть условия сделки и повторить процедуру согласования.';

$L['sbr_posts_performer_confirm'] = 'Ожидается оплата сделки Покупателем.';
$L['sbr_posts_employer_confirm'] = 'Продавец подтвердил свое согласие с условиями сделки. Теперь вы можете произвести оплату, чтобы Продавец смог приступить к передаче домена.';

$L['sbr_posts_performer_paid'] = 'Сделка оформлена. Можете приступать к процессу передачи. Сумма сделки зарезервирована на счету сервиса и будет выплачиваться вам по мере приемки Покупателем доменов.';
$L['sbr_posts_employer_paid'] = 'Сделка оформлена. Сумма сделки зарезервирована на счету сервиса и будет выплачиваться Продавцу по мере вашей приемки доменов.';

$L['sbr_posts_performer_stage_done'] = 'Покупатель принял домен №{$stage_num} ({$stage_title}). На ваш счет поступила оплата в размере: {$stage_cost} {$valuta}';
$L['sbr_posts_employer_stage_done'] = 'Вы приняли домен №{$stage_num} ({$stage_title}). На счет Продавца поступила оплата в размере: {$stage_cost} {$valuta}';

$L['sbr_posts_stage_claim'] = '<h4>Подана жалоба в арбитраж!</h4><br/><b>Текст жалобы:</b><br/>{$from_name}: {$claim_text}<br/><br/>Сделка будет рассмотрена арбитражной комиссией. Как только комиссия примет решение, вы получите уведомление по email.';

$L['sbr_posts_performer_stage_claim_decision_payment'] = '<h4>Решение арбитражной комиссии</h4><br/>По результатам рассмотрения жалобы по домену №{$stage_num} ({$stage_title}) арбитражной комиссией было принято следующее решение:<br/><br/>{$decision}<br/><br/>Оплата Продавцу: {$payperformer} {$valuta}<br/>Возврат Покупателю: {$payemployer} {$valuta}';
$L['sbr_posts_employer_stage_claim_decision_payment'] = '<h4>Решение арбитражной комиссии</h4><br/>По результатам рассмотрения жалобы по домену №{$stage_num} ({$stage_title}) арбитражной комиссией было принято следующее решение:<br/><br/>{$decision}<br/><br/>Оплата Продавцу: {$payperformer} {$valuta}<br/>Возврат Покупателю: {$payemployer} {$valuta}';

$L['sbr_posts_performer_cancel'] = 'Сделка отменена Покупателем.';
$L['sbr_posts_employer_cancel'] = 'Сделка отменена вами.';

$L['sbr_posts_performer_done'] = 'Сделка завершена.';
$L['sbr_posts_employer_done'] = 'Сделка завершена.';
$L['sbr_posts_broker_done'] = 'Сделка завершена.';

$L['sbr_posts_button'] = 'Отправить сообщение';

$L['sbr_posts_to'] = 'Кому';
$L['sbr_posts_to_all'] = 'Всем';
$L['sbr_posts_to_performer'] = 'Продавцу';
$L['sbr_posts_to_employer'] = 'Покупателю';

$L['sbr_posts_error_textempty'] = 'Сообщение не должно быть пустым';

$L['sbr_posts_from'] = 'Сообщение от';
$L['sbr_posts_for'] = 'Сообщение для';

$L['sbr_stage_done_payments_desc'] = 'Сделка: "{$sbr_title}": Оплата за домен №{$stage_num} ({$stage_title}).';
$L['sbr_broker_done_payments_desc'] = 'Сделка: "{$sbr_title}". Оплата комиссии брокеру';
$L['sbr_stage_done_title'] = 'Принять передачу домена';


$L['sbr_claim_msg'] = 'Подана жалоба в арбитраж!';
$L['sbr_claim_error_cost'] = 'Сумма выплат не соответствует общей стоимости доменов данной сделки';
$L['sbr_claim_add_title'] = 'Обращение в арбитраж';
$L['sbr_claim_add_error_text'] = 'Не указана причина обращения в арбитраж';

$L['sbr_claim_payments_performer_desc'] = 'СБР: "{$sbr_title}": Оплата за домен №{$stage_num} ({$stage_title}), согласно решению арбитражной комиссии.';
$L['sbr_claim_payments_employer_desc'] = 'СБР: "{$sbr_title}": Возврат за домен3 №{$stage_num} ({$stage_title}), согласно решению арбитражной комиссии.';

$L['sbr_claim_decision_button'] = 'Принять решение';
$L['sbr_claim_decision_title'] = 'Решение арбитражной комиссии';
$L['sbr_claim_decision_pay_performer'] = 'Оплатить Продавцу';
$L['sbr_claim_decision_pay_employer'] = 'Вернуть Продавцу';

$L['sbr_claim_decision_error_text'] = 'Не заполнено пояснение к решению арбитражной комиссии';
$L['sbr_claim_decision_error_pay'] = 'Сумма выплат не соответствует цене домена';