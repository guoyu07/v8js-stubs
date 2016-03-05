<?php

use Exception;

final class V8JsScriptException extends Exception
{
    /**
     *
     * @return string
     */
    final public function getJsFileName()
    {}

    /**
     *
     * @return int
     */
    final public function getJsLineNumber()
    {}

    /**
     *
     * @return int
     */
    final public function getJsStartColumn()
    {}

    /**
     *
     * @return int
     */
    final public function getJsEndColumn()
    {}

    /**
     *
     * @return string
     */
    final public function getJsSourceLine()
    {}

    /**
     *
     * @return string
     */
    final public function getJsTrace()
    {}
}
