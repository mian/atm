<?php

namespace AppCode\NoteBox;

use MianMuhammad\Atm\Entities\HundredNote;
use MianMuhammad\AtmBox\AbstractAtmBox;

/**
 * Class HundredNoteAtmBox
 *
 * @package AppCode\NoteBox
 */
class HundredNoteAtmBox extends AbstractAtmBox
{
    /**
     *
     * @return \MianMuhammad\Atm\Entities\HundredNote
     *
     */
    public function GetNote(): HundredNote
    {
        return new HundredNote();
    }
}