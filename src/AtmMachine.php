<?php

namespace MianMuhammad\Atm;

use MianMuhammad\Atm\Entities\AtmCashMachine;
use MianMuhammad\Atm\Entities\SymfonyCli;
use MianMuhammad\Atm\Request\AtmMachineRequest;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class AtmMachine
 *
 * @package MianMuhammad\Atm
 */
class AtmMachine extends command
{

    /**
     * Configures the command
     *
     * @author Mian Muahmmad <mian.muahmmad@tajawal.com>
     */
    protected function configure()
    {
        $this->setName('atm');
    }

    /**
     * DESC
     *
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @author Mian Muahmmad <se.mianasif@gmail.com>
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $console = new SymfonyCli();

        $console->clear();

        $console->heading('Welcome to wonder world to withdraw the cash');
        $console->print('======================', 'comment');

        $name = $console->getInput('What is your name?');

        $amount = $console->getInput('How Much money you want to withdraw ' . trim($name) . '?');

        // @todo need to add the validation

        $atmMachine = new AtmCashMachine();

        $atmMachineRequest = new AtmMachineRequest($amount);

        $notes = $atmMachine->WithdrawCash($atmMachineRequest);

        $console->print('======================', 'comment');
        $console->heading('Congrats you have successfully withdraw the money ');
        foreach ($notes as $note) {
            $console->print('$ ' . $note);
        }

    }
}