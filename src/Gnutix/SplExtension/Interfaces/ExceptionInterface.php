<?php

namespace Gnutix\SplExtension\Interfaces;

/**
 * Interface for SPL Exception classes.
 *
 * @link http://php.net/manual/en/spl.exceptions.php
 */
interface ExceptionInterface
{
    /**
     * Gets the Exception message.
     *
     * @return string The message as a string.
     * @link http://php.net/manual/en/Exception.getmessage.php
     */
    public function getMessage();

    /**
     * Gets the Exception code.
     *
     * @return mixed|int The code as an integer (or another type in its descendants, like string in PDOException).
     * @link http://php.net/manual/en/exception.getcode.php
     */
    public function getCode();

    /**
     * Gets the file in which the Exception occurred.
     *
     * @return string The filename in which the Exception was created.
     * @link http://php.net/manual/en/exception.getfile.php
     */
    public function getFile();

    /**
     * Gets the line in which the Exception occurred.
     *
     * @return int The line number where the Exception was created.
     * @link http://php.net/manual/en/exception.getline.php
     */
    public function getLine();

    /**
     * Gets the stack trace.
     *
     * @return array The Exception stack trace as an array.
     * @link http://php.net/manual/en/exception.gettrace.php
     */
    public function getTrace();

    /**
     * Gets the stack trace as a string.
     *
     * @return string The Exception stack trace as a string.
     * @link http://php.net/manual/en/exception.gettraceasstring.php
     */
    public function getTraceAsString();

    /**
     * Returns previous Exception.
     *
     * @return \Exception|null The previous Exception if available or null otherwise.
     * @link http://php.net/manual/en/exception.getprevious.php
     * @since PHP 5.3.0
     */
    public function getPrevious();

    /**
     * String representation of the Exception.
     *
     * @return string The string representation of the Exception.
     * @link http://php.net/manual/en/exception.tostring.php
     */
    public function __toString();
}

