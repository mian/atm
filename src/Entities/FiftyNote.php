<?php

namespace MianMuhammad\Atm\Entities;

use MianMuhammad\Atm\Contracts\Note;

/**
 * Class FiftyNote
 *
 * @package MianMuhammad\Atm\Entities
 */
class FiftyNote implements Note
{
    /**
     * get the note value of fifty
     *
     * @return int
     *
     */
    public function GetNoteValue(): int
    {
        return 50;
    }
}