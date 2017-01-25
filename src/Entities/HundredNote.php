<?php

namespace MianMuhammad\Atm\Entities;

use MianMuhammad\Atm\Contracts\Note;

/**
 * Class HundredNote
 *
 * @package MianMuhammad\Atm\Entities
 */
class HundredNote implements Note
{
    /**
     * get the note value of hundred
     *
     * @return int
     *
     */
    public function GetNoteValue(): int
    {
        return 100;
    }
}