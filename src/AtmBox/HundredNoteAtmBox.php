<?php

namespace MianMuhammad\Atm\AtmBox;

use MianMuhammad\Atm\Entities\HundredNote;

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