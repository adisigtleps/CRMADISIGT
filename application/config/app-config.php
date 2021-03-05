<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
* --------------------------------------------------------------------------
* Base Site URL
* --------------------------------------------------------------------------
*
* URL to your CodeIgniter root. Typically this will be your base URL,
* WITH a trailing slash:
*
*   http://example.com/
*
* If this is not set then CodeIgniter will try guess the protocol, domain
* and path to your installation. However, you should always configure this
* explicitly and never rely on auto-guessing, especially in production
* environments.
*
*/
define('APP_BASE_URL', 'https://crm-adisigt.herokuapp.com/crm/');

/*
* --------------------------------------------------------------------------
* Encryption Key
* IMPORTANT: Do not change this ever!
* --------------------------------------------------------------------------
*
* If you use the Encryption class, you must set an encryption key.
* See the user guide for more info.
*
* http://codeigniter.com/user_guide/libraries/encryption.html
*
* Auto added on install
*/
define('APP_ENC_KEY', '68761b0c99b2b9a612a124db8f81d131');

/**
 * Database Credentials
*/
/* The hostname of your database server. */
define('APP_DB_HOSTNAME', 'mysql5039.site4now.net');
/* The username used to connect to the database */
define('APP_DB_USERNAME', 'a0cdb4_crm');
/* The password used to connect to the database */
define('APP_DB_PASSWORD', 'Nuevo2020');
/* The name of the database you want to connect to */
define('APP_DB_NAME', 'db_a0cdb4_crm');

/**
 *
 * Session handler driver
 * By default the database driver will be used.
 *
 * For files session use this config:
 * define('SESS_DRIVER', 'files');
 * define('SESS_SAVE_PATH', NULL);
 * In case you are having problem with the SESS_SAVE_PATH consult with your hosting provider to set "session.save_path" value to php.ini
 *
 */
define('SESS_DRIVER', 'database');
define('SESS_SAVE_PATH', 'tblsessions');

/**
 * Enables CSRF Protection
 */
define('APP_CSRF_PROTECTION', true);