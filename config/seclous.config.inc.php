<?php

/* Seclous default config file edit it and rename it to config.inc.php*/

$config['db_dsnw'] = 'mysql://username:password@localhost/roundcubemail?verify_server_cert=false';

$config['default_host'] = '127.0.0.1';  //

$config['skin_logo'] = './logo.svg';

$config['des_key'] = 'this sould be 24 chars';

$config['username_domain'] = '';

$config['product_name'] = 'Default Conf';

//This needs more configuration on the apache
$config['force_https'] = true;
$config['use_secure_urls'] = true;



//
//Below should be the same config for all our servers
//

$config['htmleditor'] = 1;

$config['plugins'] = array('emoticons', 'password', 'userinfo');

//$config['language'] = 'de_DE';

$config['support_url'] = 'https://www/help/';

$config['disabled_actions'] = ['addressbook', 'settings','about', 'mail.move', 'mail.savedraft', 'mail.insert-sig', 'mail.compose-encrypted', 'mail.responses', 'mail.save-response', 'mail.compose-encrypted-signed', 'mail.composeoptions', 'mail.search', 'mail.copy', 'mail.sidebar-menu', 'mail.markmenulink', 'mail.messagemenulink'];

$config['dont_override'] = ['mdn_default', 'dsn_default'];

$config['list_cols'] = array('subject', 'status', 'fromto', 'date', 'size', 'attachment');

$config['send_format_flowed'] = false;

$config['no_save_sent_messages'] = true;

$config['drafts_mbox'] = '';

$config['sent_mbox'] = 'Sent';

$config['trash_mbox'] = 'Trash';

$config['mail_pagesize'] = 20;

$config['compose_save_localstorage'] = false;

$config['syslog_facility'] = LOG_MAIL;

$config['debug_level'] = 0;
$config['sql_debug'] = false;
$config['imap_debug'] = false;
$config['ldap_debug'] = false;
$config['smtp_debug'] = false;

$config['default_port'] = 10200;

$config['smtp_port'] = 10100;

$config['smtp_server'] = $config['default_host'];


