<?php

namespace AppCode\NoteBox;

use MianMuhammad\Atm\Entities\TwentyNote;
use MianMuhammad\AtmBox\AbstractAtmBox;

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