<?php

/* ====================
 * [BEGIN_COT_EXT]
 * Code=sbr
 * Name=Sbr
 * Category=Payments
 * Description=Сделки
 * Version=1.0.3
 * Date=
 * Author=Renat Suleymanov fork from CMSWorks Team
 * Copyright=Copyright (c) CMSWorks Team, Suleymanov Renat (fork)
 * Notes=
 * Auth_guests=R
 * Lock_guests=12345A
 * Auth_members=RW
 * Lock_members=12345A
 * Requires_modules=payments
 * [END_COT_EXT]
 *
 * [BEGIN_COT_EXT_CONFIG]
 * tax=01:string::5:Комиссия за оформление сделки c Заказчика
 * mintax=01:string::1000:Минимальная комиссия сервиса
 * mincost=02:string::0:Минимальный бюджет
 * maxcost=03:string::0:Максимальный бюджет
 * maxdays=04:string::0:Максимальный срок исполнения этапа сделки
 * maxrowsperpage=05:string::30:Число сделок на страницу
 * filepath=06:string::datas/sbr:Директория для файлов
 * extensions=07:string::jpg,jpeg,png,gif,bmp,txt,doc,docx,xls,pdf,rar,zip:Допустимые расширения файлов
 * [END_COT_EXT_CONFIG]
 */

/**
 * sbr plugin
 *
 * @package sbr
 * @version 1.0.2
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru
 * @license BSD
 */
?>