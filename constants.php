<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/

defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

define("base_currency", "GBP"); 
define("upaywise_currency", "GBP"); 
define("AUTH_TOKEN_UPDATE_ON_LOGIN", "ON"); 

/*Crypto Server*/
define("crypto_url", "https://emtest.trinsic.dev:443"); 
define("crypto_reporting", "https://emtest.trinsic.dev:444"); 

/*Transaction Server*/
define("banks_url", "https://emtest.trinsic.dev:445/");
define("banks_url_checkssl", "false");

/*Trulioo Endpoint*/
define("kyc_url", "https://api.globaldatacompany.com");

/*Sandbox Trulioo Kyc authorization token*/
define("ekyc_auth", "TE1fU2FuZGJveF9BUEk6azJId3NIYVllMyM=");
define("dockyc_auth", "TE1fRG9jVlNhbmRib3hfQVBJOnJlX3NUcmlzdDk4NCM=");

/*LIVE trulioo Kyc authorization token*/
//define("ekyc_auth", "TG96aWtfQVBJOmVUbnUxdHlrYXIh");
//define("dockyc_auth", "TE1fRG9jVl9BUEk6ZFRudTF0eWthciE=");


/*Upaywise TEST*/
define("upaywise_url", "https://test.upaywise.com/paymentgateway/payments/performXmlTransaction");
define("upaywise_terminalid", "tendenmoney");
define("upaywise_terminalpwd", "tendenmoney12!");
define("upaywise_min_trans_amount", "20"); 

/*Upaywise LIVE*/
/* define("upaywise_url", "https://upaywise.com/paymentgateway/payments/performXmlTransaction");
define("upaywise_terminalid", "EdenCharge");
define("upaywise_terminalpwd", "EdenCharge#89!");
define("upaywise_min_trans_amount", "1");
 */
 
/*Sinch Phone number sms API*/
define("send_sms_url", "https://messagingapi.sinch.com/v1/sms/");
define("send_sms_auth", "ZWNkNWYyZTQtOTExYi00YjJkLWFlZTAtZmZmMTE5ZGU3YzYwOkx6SkVGcG0xekU2Y2RoQVZLN2ViWnc9PQ==");

/*Oanda test api key */
//define("oanda_api_key", "88GMlQaTruUtSdBkSXXnRMPn");

/*Oanda LIVE api key */
define("oanda_api_key", "1FZxtosy5nOGN0SKwMrwQURB");

/*exchangerates api key */
define("rates_api_key", "b4b283ef8218846f91de937f877f0a48");

define("emailSupport","support@edenmoney.com");
define("emailAdmin","admin@edenmoney.com");
define("emailHello","hello@edenmoney.com");
define("emailErroradmin","webserver-errors@edenmoney.com");
define("emailError","error@edenmoney.com");
define("emailNoreply","no-reply@edenmoney.com");
define("emailPrefix","TestAccount");
define("captchaKey","6Ld1ycUUAAAAAGYO_rLpdxDXgaXsLWEpBwdcPGpY");
define("captchasecretKey","6Ld1ycUUAAAAAF19QtJuS5IJ1PtGLZrWq9J-0eXi");

/*SMTP details for email*/
define("smtp_host","smtp.office365.com");
define("smtp_port","587");
define("smtp_user","admin@edenmoney.com");
define("smtp_pass",'#TidalRhcnRg@187');


/*RabbitMQ details used for AMQP(Advanced message queue protocol) */
//define("CLOUDAMQP_HOST", "hawk.rmq.cloudamqp.com");
//define("CLOUDAMQP_PORT", 5672);
//define("CLOUDAMQP_USER", "fobjrkpr");
//define("CLOUDAMQP_PASS", "RG0532Rveq_Jm6FIhaZoNIzagB08zXBN");
//define("CLOUDAMQP_VHOST","amqp://fobjrkpr:rg0532rveq_jm6fihazonizagb08zxbn@hawk.rmq.cloudamqp.com/fobjrkpr");


/*define cipher */
define('AES_256_CBC', 'aes-256-cbc');
/* testmagic api username and password */
define('testmagic_api_username','azmalkhan');
define('testmagic_api_password','M8aP0beRt6');
/* jwt access token and refresh token encode and decode key */
define('jwtkey','edenmoney@123!@#');
define('jwt_token_refresh_key','edenmoney@456$%^');
/* twillo account credentials below **/
define('mode','sandbox');
define('account_sid','ACae0f4aa86d28d49145f57184bb945332');
define('auth_token','7bd61603abcd6d0b16010d8717d5b6bf');
define('api_version','2010-04-01');
define('number','+14018294841');
define('api_logging', 'ON');
?>
