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

use ParagonIE\Halite\Cookie as CookieController;
use ParagonIE\Halite\Symmetric\EncryptionKey;
use ParagonIE\Halite\HiddenString;

/**
 * Cookie.
 *
 * @codeCoverageIgnore
 */
class Cookie implements CookieInterface
{
    
    /**
     * @var object $cookieController The cookie controller.
     */
    private $cookieController;
    
    /**
     * Set the cookie encryption key.
     *
     * @return void.
     */
    function __construct()
    {
        $this->cookieController = new CookieController(
            new EncryptionKey(
            new HiddenString(
                \CONFIG['application']['secret']
            )
        ));
    }
    
    /**
     * Store a new cookie.
     *
     * @param string $name   The name of the cookie.
     * @param mixed  $value  The cookie value.
     * @param int    $expire The cookie expiration time.
     *
     * @return void.
     */
    public function store($name, $value, $expire): void
    {
        $this->cookieController->store(
            $name,
            $value,
            $expire,
            \CONFIG['cookie']['path'],
            \CONFIG['cookie']['domain'],
            \CONFIG['cookie']['secure']
        );
    }
    
    /**
     * Fetch a cookie by name.
     *
     * @param string $name The name of the cookie.
     *
     * @return mixed The cookie value.
     */
    public function fetch($name)
    {
        return $this->cookieController->fetch($name);
    }
    
    /**
     * Delete a cookie by name.
     *
     * @param string $name The name of the cookie.
     *
     * @return void.
     */
    public function fetch($name): void
    {
        if (isset($_COOKIE[$name]))
        {
            unset($_COOKIE[$name]);
            \setcookie(
                $name,
                '',
                \time() - 42000,
                \CONFIG['cookie']['path'],
                \CONFIG['cookie']['domain'],
                \CONFIG['cookie']['secure'],
                \true
            );
        }
    }
    
}
