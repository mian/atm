<?php
namespace MianMuhammad\Atm\Contracts;

/**
 * Interface ConsoleInterface
 *
 * @package MianMuhammad\atm\Contracts
 * @author  Mian Muahmmad <mian.muahmmad@tajawal.com>
 *
 */
interface ConsoleInterface
{
    /**
     * @param string $message
     * @param string $type
     *
     * @return void
     */
    public function print($message, $type = '');

    /**
     * @param $message
     *
     * @return void
     */
    public function heading($message);

    /**
     * @param $question
     *
     * @return mixed
     */
    public function getInput($question);

    /**
     * @return void
     */
    public function clear();

    /**
     * @return void
     */
    public function exitCommand();
}