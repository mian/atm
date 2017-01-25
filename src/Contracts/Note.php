<?php

namespace MianMuhammad\Atm\Contracts;

/**
 * Interface Note
 *
 * @package MianMuhammad\Atm\Entities
 * @author  Mian Muahmmad <se.mianasif@gmail.com>
 *
 */
interface Note
{
    /**
     * @return int
     */
    public function GetNoteValue();
}