<?php

/**
 * ECTouch Open Source Project

 * Copyright (c) 2015-2016 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：drp.php
 * ----------------------------------------------------------------------------
 * 功能描述：更新程序语言文件
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

$_LANG['operation'] = 'Operation';
$_LANG['view'] = 'View';
$_LANG['access'] = 'Visit';
$_LANG['upgrade'] = 'Upgrade';
$_LANG['checkfile'] = 'Verify file';
$_LANG['updatetime'] = 'Updated on';
$_LANG['updatelist'] = 'Available updates list';
$_LANG['currentversion'] = 'Current version';
$_LANG['lastversion'] = 'Latest version';
$_LANG['unnowversion'] = 'Version is too old. Please upgrade';
$_LANG['covertemplate'] = 'Overwrite template？';

$_LANG['not_exists'] = 'No exists';
$_LANG['cannt_write'] = 'No writable';
$_LANG['can_write'] = 'Writable';

$_LANG['view_code'] = 'View Code';
$_LANG['modifyfile'] = 'Modified';
$_LANG['lastmodifytime'] = 'Last modified time';
$_LANG['modifyedfile'] = 'Modified file';
$_LANG['lostfile'] = 'Missing file';
$_LANG['unknowfile'] = 'Unknown file';
$_LANG['filesize'] = 'File size';
$_LANG['begin_checkfile'] = 'Verifying file, please wait.';
$_LANG['begin_upgrade'] = 'Start the upgrade';
$_LANG['upgradeing'] = 'Upgrading';
$_LANG['upgrade_success'] = 'Upgraded successfully!';
$_LANG['build_success'] = 'Hash value of file was updated successfully!';
$_LANG['lost'] = 'Lost';
$_LANG['file_address'] = 'File path';
$_LANG['please_check_filepri'] = 'Failed to copy file, please check write permissions.'; 
$_LANG['check_file_notice'] = 'Note: File verification is a comparable result between all files of the root directory, all files and subdirectories under phpcms, api, statics folder and MD5 value of same name in default program. If an exception occurs, please scan your files to detect the Trojan file';
$_LANG['upgrade_notice'] = 'Note: Upgrade program may overwrite template files, please backup your files before upgrade! It is essential to check the owner and group of file permissions in the Linux server. Make sure WEB SERVER user sets write permissions to files';
return $_LANG;