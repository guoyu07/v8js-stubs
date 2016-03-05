<?php

class V8Js
{
    /* Constants */
    const V8_VERSION = '';

    const FLAG_NONE = 1;
    const FLAG_FORCE_ARRAY = 2;
    const FLAG_PROPAGATE_PHP_EXCEPTIONS = 4;

    const DEBUG_AUTO_BREAK_NEVER = 1;
    const DEBUG_AUTO_BREAK_ONCE = 2;
    const DEBUG_AUTO_BREAK_ALWAYS = 3;

    /* Methods */

    /**
     * Initializes and starts V8 engine and Returns new V8Js object with it's own V8 context.
     *
     * @param string $object_name
     * @param array  $variables
     * @param array  $extensions
     * @param bool   $report_uncaught_exceptions
     */
    public function __construct($object_name = 'PHP', array $variables = null, array $extensions = null, $report_uncaught_exceptions = true)
    {}

    /**
     * Provide a function or method to be used to load required modules.
     * This can be any valid PHP callable.
     * The loader function will receive the normalised module path and should return Javascript code to be executed.
     *
     * @param callable $loader
     */
    public function setModuleLoader(callable $loader)
    {}

    /**
     * Compiles and executes script in object's context with optional identifier string.
     * A time limit (milliseconds) and/or memory limit (bytes) can be provided to restrict execution. These options will throw a V8JsTimeLimitException or V8JsMemoryLimitException.
     *
     * @param string $script
     * @param string $identifier
     * @param int    $flags
     * @param int    $time_limit    in milliseconds
     * @param int    $memory_limit  in bytes
     *
     * @return mixed
     */
    public function executeString($script, $identifier = '', $flags = self::FLAG_NONE, $time_limit = 0, $memory_limit = 0)
    {}

    /**
     * Compiles a script in object's context with optional identifier string.
     *
     * @param string $script
     * @param string $identifier
     *
     * @return resource
     */
    public function compileString($script, $identifier = '')
    {}

    /**
     * Executes a precompiled script in object's context.
     * A time limit (milliseconds) and/or memory limit (bytes) can be provided to restrict execution. These options will throw a V8JsTimeLimitException or V8JsMemoryLimitException.
     *
     * @param resource $script
     * @param int      $flags
     * @param int      $time_limit
     * @param int      $memory_limit
     */
    public function executeScript($script, $flags = self::FLAG_NONE, $time_limit = 0, $memory_limit = 0)
    {}

    /**
     * Set the time limit (in milliseconds) for this V8Js object
     * works similar to the set_time_limit php
     *
     * @param int $limit
     */
    public function setTimeLimit($limit)
    {}

    /**
     * Set the memory limit (in bytes) for this V8Js object
     *
     * @param int $limit
     */
    public function setMemoryLimit($limit)
    {}

    /**
     * Returns uncaught pending exception or null if there is no pending exception.
     *
     * @return V8JsScriptException|null
     */
    public function getPendingException()
    {}

    /**
     * Clears the uncaught pending exception
     */
    public function clearPendingException()
    {}

    /**
     * Starts V8 debug agent for use with Google Chrome Developer Tools (Eclipse Plugin)
     *
     * @param string $agent_name
     * @param int    $port
     * @param int    $auto_break
     *
     * @return bool
     */
    public function startDebugAgent($agent_name = 'V8Js', $port = 9222, $auto_break = self::DEBUG_AUTO_BREAK_NEVER)
    {}

    /** Static methods **/

    /**
     * Registers persistent context independent global Javascript extension.
     * NOTE! These extensions exist until PHP is shutdown and they need to be registered before V8 is initialized.
     * For best performance V8 is initialized only once per process thus this call has to be done before any V8Js objects are created!
     *
     * @param string $extension_name
     * @param string $code
     * @param array  $dependencies
     * @param bool   $auto_enable
     *
     * @return bool
     */
    public static function registerExtension($extension_name, $code, array $dependencies, $auto_enable = false)
    {}

    /**
     * Returns extensions successfully registered with V8Js::registerExtension().
     *
     * @return array|string[]
     */
    public static function getExtensions()
    {}
}
