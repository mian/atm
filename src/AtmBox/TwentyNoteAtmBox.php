<?php

namespace MianMuhammad\Atm\AtmBox;

use MianMuhammad\Atm\Entities\TwentyNote;

/**
 * Class TwentyNoteAtmBox
 *
 * @package AppCode\NoteBox
 */
class TwentyNoteAtmBox extends AbstractAtmBox
{
    /**
     *
     * @return \MianMuhammad\Atm\Entities\TwentyNote
     *
     */
    public function GetNote(): TwentyNote
    {
        return new TwentyNote();
    }
}