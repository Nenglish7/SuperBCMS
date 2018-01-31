<?php
declare(strict_types=1);
/**
 * This file is a part of SuperBCMS.
 *
 * @author Nicholas English (Owner/Developer) <nenglish0820@outlook.com>.
 *
 * @link    <https://github.com/Nenglish7/SuperBCMS> Github repository.
 * @license <https://github.com/Nenglish7/SuperBCMS/blob/master/LICENSE> MIT license.
 */
 
namespace Nenglish7\Engine;

/**
 * CookieInterface.
 */
interface CookieInterface
{
    
    /**
     * Set the cookie encryption key.
     *
     * @return void.
     */
    function __construct();
    
    /**
     * Store a new cookie.
     *
     * @param string $name   The name of the cookie.
     * @param mixed  $value  The cookie value.
     * @param int    $expire The cookie expiration time.
     *
     * @return void.
     */
    public function store(string $name, $value, int $expire): void;
    
    /**
     * Fetch a cookie by name.
     *
     * @param string $name The name of the cookie.
     *
     * @return mixed The cookie value.
     */
    public function fetch(string $name);
    
    /**
     * Delete a cookie by name.
     *
     * @param string $name The name of the cookie.
     *
     * @return void.
     */
    public function fetch(string $name): void;
    
}
