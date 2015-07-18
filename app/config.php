<?php 
ini_set('error_log', '/tmp/ems.log'); 
  
define('CLIENT_NAME', 'app'); 
define('APP_BASE_PATH', '/home1/cloudspi/public_html/ems/'); 
define('CLIENT_BASE_PATH', '/home1/cloudspi/public_html/ems/app/'); 
define('BASE_URL','http://ems.cloudspier.com/'); 
define('CLIENT_BASE_URL','http://ems.cloudspier.com/app/'); 
  
define('APP_DB', 'cloudspi_ems'); 
define('APP_USERNAME', 'cloudspi_ems'); 
define('APP_PASSWORD', 'BHADRA5007'); 
define('APP_HOST', 'localhost'); 
define('APP_CON_STR', 'mysql://'.APP_USERNAME.':'.APP_PASSWORD.'@'.APP_HOST.'/'.APP_DB); 
  
//file upload 
define('FILE_TYPES', 'jpg,png,jpeg'); 
define('MAX_FILE_SIZE_KB', 10 * 1024);   