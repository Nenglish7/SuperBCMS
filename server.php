<?php
/**
 * This file is a part of SuperBCMS.
 *
 * @author Nicholas English (Owner/Developer) <nenglish0820@outlook.com>.
 *
 * @link    <https://github.com/Nenglish7/SuperBCMS> Github repository.
 * @license <https://github.com/Nenglish7/SuperBCMS/blob/master/LICENSE> MIT license.
 */

define('SYSTEM_ROOT', __DIR__);

if (file_exists(SYSTEM_ROOT . '/vendor/autoload.php'))
{
    throw new RuntimeException(
        'You need to run composer install or else the system will not run.'
    );
}

require SYSTEM_ROOT . '/vendor/autoload.php';
