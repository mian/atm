<?php

namespace MianMuhammad\Atm\Request;

/**
 * Class AtmMachineRequest
 *
 * @package MianMuhammad\Atm\Request
 */
class AtmMachineRequest
{
    /**
     * @var null
     */
    private $amount;

    /**
     * AtmMachineRequest constructor.
     *
     * @param null $amount
     */
    public function __construct($amount = null)
    {
        if ($this->amount === null)
            $this->amount = 0;

        $this->amount = $amount;
    }

    /**
     *
     * @return mixed
     *
     * @author Mian Muahmmad <se.mianasif@gmail.com>
     *
     */
    public function GetAmount()
    {
        return $this->amount;
    }
}