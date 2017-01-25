<?php

namespace MianMuhammad\Atm\Entities;

use MianMuhammad\Atm\Contracts\Note;

/**
 * Class TenNote
 *
 * @package MianMuhammad\Atm\Entities
 */
class TenNote implements Note
{
    /**
     * get the note value of ten
     *
     * @return int
     *
     */
    public function GetNoteValue(): int
    {
        return 10;
    }
}