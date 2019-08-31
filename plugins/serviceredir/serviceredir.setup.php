<?php
/* ====================
[BEGIN_SED_EXTPLUGIN]
Code=serviceredir
Name=Service Page Redirect
Description=Redirects user to service page on login
Version=0.1
Date=2009-nov-21
Author=Trustmaster
Copyright=
Notes=
SQL=
Auth_guests=R
Lock_guests=W12345A
Auth_members=RW
Lock_members=12345A
[END_SED_EXTPLUGIN]

[BEGIN_SED_EXTPLUGIN_CONFIG]
url=01:string::page.php?id=1:Relative URL to redirect
id=02:string::1:Message ID. Change it every time you change your service page. Or set to 0 for constant redirect
[END_SED_EXTPLUGIN_CONFIG]
==================== */

defined('SED_CODE') or die('Wrong URL');
?>
