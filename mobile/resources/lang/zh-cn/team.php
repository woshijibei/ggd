<?php

/**
 * ECTouch Open Source Project

 * Copyright (c) 2015-2016 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：team.php
 * ----------------------------------------------------------------------------
 * 功能描述：拼团语言
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

$_LANG['ranking_list'] = 'Ranking List';
$_LANG['team_user_list'] = 'Group buying member';
$_LANG['waiting_team'] = 'Waiting for member join';
$_LANG['team_succes'] = 'Group buying successfully';
$_LANG['team_failure'] = 'Group buying failed';
$_LANG['team_goods_info'] = 'Product detail';
$_LANG['team_goods_comment'] = 'Product comment';
$_LANG['my_team_order'] = 'Group buying order';
$_LANG['team_keywords_result'] = 'Search result';
$_LANG['invalid_number'] = 'Sorry, invalid product quantity no.';

/* 订单状态 */
$_LANG['os'][OS_UNCONFIRMED] = 'Not confirmed';
$_LANG['os'][OS_CONFIRMED] = 'Confirmed';
$_LANG['os'][OS_SPLITED] = 'Confirmed';
$_LANG['os'][OS_SPLITING_PART] = 'Confirmed';
$_LANG['os'][OS_CANCELED] = 'Cancelled';
$_LANG['os'][OS_INVALID] = 'Invalid';
$_LANG['os'][OS_RETURNED] = 'Returned';

$_LANG['ss'][SS_UNSHIPPED] = 'Not shipped';
$_LANG['ss'][SS_PREPARING] = 'Preparing';
$_LANG['ss'][SS_SHIPPED] = 'Shipped';
$_LANG['ss'][SS_RECEIVED] = 'Received';
$_LANG['ss'][SS_SHIPPED_PART] = 'Shipped (Partial item)';
$_LANG['ss'][SS_SHIPPED_ING] = 'Preparing'; // Already separate order

$_LANG['ps'][PS_UNPAYED] = 'Waiting for payment';
$_LANG['ps'][PS_PAYING] = 'Payment is processing';
$_LANG['ps'][PS_PAYED] = 'Already paid';
$_LANG['ps'][PS_PAYED_PART] = 'Partial payment (Deposit)';

return $_LANG;