<?php

namespace MianMuhammad\Atm\Entities;

use MianMuhammad\Atm\Contracts\Note;

/**
 * Class TwentyNote
 *
 * @package MianMuhammad\Atm\Entities
 */
class TwentyNote implements Note
{
    /**
     * get the note value of twenty
     *
     * @return int
     *
     */
    public function GetNoteValue(): int
    {
        return 20;
    }
}