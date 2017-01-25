<?php

namespace MianMuhammad\Atm\Contracts;

use MianMuhammad\Atm\Response\AtmMachineResponse;
use MianMuhammad\Atm\AtmBox\AbstractAtmBox;

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
     * @param \MianMuhammad\Atm\AtmBox\AbstractAtmBox $atmBox
     *
     * @return mixed
     */
    public function SetNextNoteBox(AbstractAtmBox $atmBox);
}