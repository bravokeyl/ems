<?php
if(!defined('SIGN_IN_ELEMENT_MAPPING_FIELD_NAME')){define('SIGN_IN_ELEMENT_MAPPING_FIELD_NAME','employee');}

if(!defined('APP_NAME')){define('APP_NAME','Smarttrak');}
if(!defined('FB_URL')){define('FB_URL', 'https://www.facebook.com/');};
if(!defined('TWITTER_URL')){define('TWITTER_URL', 'https://twitter.com/');};

define('HOME_LINK_ADMIN', CLIENT_BASE_URL."?g=admin&n=dashboard&m=admin_Admin");
define('HOME_LINK_OTHERS', CLIENT_BASE_URL."?g=modules&n=dashboard&m=module_Personal_Information");

//Version
define('VERSION', '10.1');
define('VERSION_DATE', '25/03/2015');

if(!defined('CONTACT_EMAIL')){define('CONTACT_EMAIL','smart@smarttrak.in');}
if(!defined('KEY_PREFIX')){define('KEY_PREFIX','IceHrm');}