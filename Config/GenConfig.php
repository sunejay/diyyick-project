<?php 
// General settings here

define('BASEPATH', 'http://localhost/diyyick');

define('SITENAME', '');

//Database setup configurations
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DBNAME', 'test2');
define('DBTYPE', 'mysql');

//Session and cookies names
define('AUTH_USER_SESSION_NAME', 'authentication_id_session');
define('LOGIN_TOKEN', 'login_token_session');
define('TOKEN', 'token');
define('ID', 'id');
define('REMEMBER_ME_COOKIE_NAME', 'remember_me');
define('REMEMBER_ME_COOKIE_EXPIRY', 2592000);

//Remember me cookie login entity fields
define('SESSION', 'session');
define('USER_AGENT', 'user_agent');
define('USER_ID', 'user_id');

//Login route
define('LOGIN', '/users/login');
// Debug mode
define('DEBUG', true);