<?php
/**
 * This file is a part of SuperBCMS.
 *
 * @author Nicholas English (Owner/Developer) <nenglish0820@outlook.com>.
 *
 * @link    <https://github.com/Nenglish7/SuperBCMS> Github repository.
 * @license <https://github.com/Nenglish7/SuperBCMS/blob/master/LICENSE> MIT license.
 */

// Define the system root.
define('SYSTEM_ROOT', __DIR__);

// Check to see if composer was ran.
if (file_exists(SYSTEM_ROOT . '/vendor/autoload.php'))
{
    throw new RuntimeException(
        'You need to run composer install or else the system will not run.'
    );
}

// Require composer and config autoload.
require SYSTEM_ROOT . '/vendor/autoload.php';
require SYSTEM_ROOT . '/config/autoload.php';

// Lazy load the config details.
Config\Autoloader::Register();


