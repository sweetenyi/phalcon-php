<?php
/**
 * Adapter Interface
 *
 * @author Andres Gutierrez <andres@phalconphp.com>
 * @author Eduar Carvajal <eduar@phalconphp.com>
 * @version 1.2.6
 * @package Phalcon
*/
namespace Phalcon\Session;

/**
 * Phalcon\Session\AdapterInterface initializer
 *
 * @see https://github.com/phalcon/cphalcon/blob/1.2.6/ext/session/adapterinterface.c
 */
interface AdapterInterface
{
    /**
     * \Phalcon\Session construtor
     *
     * @param array $options
     */
    public function __construct($options = null);

    /**
     * Starts session, optionally using an adapter
     *
     * @param array $options
     */
    public function start();

    /**
     * Sets session options
     *
     * @param array $options
     */
    public function setOptions($options);

    /**
     * Get internal options
     *
     * @return array
     */
    public function getOptions();

    /**
     * Gets a session variable from an application context
     *
     * @param string $index
     * @param mixed $defaultValue
     * @return mixed
     */
    public function get($index, $defaultValue = null);

    /**
     * Sets a session variable in an application context
     *
     * @param string $index
     * @param string $value
     */
    public function set($index, $value);

    /**
     * Check whether a session variable is set in an application context
     *
     * @param string $index
     * @return boolean
     */
    public function has($index);

    /**
     * Removes a session variable from an application context
     *
     * @param string $index
     */
    public function remove($index);

    /**
     * Returns active session id
     *
     * @return string
     */
    public function getId();

    /**
     * Check whether the session has been started
     *
     * @return boolean
     */
    public function isStarted();

    /**
     * Destroys the active session
     *
     * @return boolean
     */
    public function destroy();
}
