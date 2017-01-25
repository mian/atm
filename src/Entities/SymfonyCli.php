<?php
namespace MianMuhammad\Atm\Entities;

use MianMuhammad\Explorer\Contracts\ConsoleInterface;
use Symfony\Component\Console\Formatter\OutputFormatter;
use Symfony\Component\Console\Output\ConsoleOutput;

/**
 * Class SymfonyCli
 *
 * @package MianMuhammad\Atm\Entities
 */
class SymfonyCli implements ConsoleInterface
{
    /**
     * @param  string $message
     *
     * @param string  $type
     */
    public function print($message, $type = '')
    {
        $output = new ConsoleOutput();
        $output->setFormatter(new OutputFormatter(true));

        if (empty($type)) {
            $output->writeln($message);
        } else {

            $output->writeln(" <$type>$message</$type>");
        }

    }

    /**
     * @param string $message
     *
     * @return void
     */
    public function heading($message)
    {
        $output = new ConsoleOutput();
        $output->setFormatter(new OutputFormatter(true));

        $output->writeln(" <info>$message</info>");
    }

    /**
     * @param $question
     *
     * @return mixed
     */
    public function getInput($question)
    {
        echo $question . ' ';

        return fgets(STDIN);
    }

    /**
     *
     * @return void
     *
     */
    public function clear()
    {
        echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J'; // ^[H^[J
    }

    /**
     * @return void
     */
    public function exitCommand()
    {
        exit();
    }
}