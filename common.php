<?php

require 'check_setup.php';
require 'vendor/password.php';
require 'vendor/PicoTools/Dependency_Injection.php';
require 'vendor/PicoTools/Translator.php';
require 'vendor/PicoDb/Database.php';
require 'vendor/PicoDb/Table.php';
require 'schema.php';
require 'model.php';

if (file_exists('config.php')) require 'config.php';

defined('APP_VERSION') or define('APP_VERSION', '1.0.10');
defined('HTTP_TIMEOUT') or define('HTTP_TIMEOUT', 10);
defined('DB_FILENAME') or define('DB_FILENAME', 'data/db.sqlite');
defined('DEBUG') or define('DEBUG', false);
defined('DEBUG_DIRECTORY') or define('DEBUG_DIRECTORY', '/tmp');
defined('THEME_DIRECTORY') or define('THEME_DIRECTORY', 'themes');

PicoTools\container('db', function() {

    $db = new PicoDb\Database(array(
        'driver' => 'sqlite',
        'filename' => DB_FILENAME
    ));

    if ($db->schema()->check(Model\DB_VERSION)) {

        return $db;
    }
    else {

        die('Unable to migrate database schema.');
    }
});
