<?php

namespace MianMuhammad\Atm\Contracts;

use MianMuhammad\Atm\Response\AtmMachineResponse;
use MianMuhammad\AtmBox\AbstractAtmBox;

/**
 * Interface AtmBox
 *
 * @package MianMuhammad\Atm\Contracts
 * @author  Mian Muahmmad <se.mianasif@gmail.com>
 *
 */
interface AtmBox
{
    /**
     * @return mixed
     */
    public function HandleRequest(AtmMachineResponse &$request);

    /**
     * @return mixed
     */
    public function SetNextNoteBox(AbstractAtmBox $atmBox);
}