<?php

namespace AppCode\NoteBox;

use MianMuhammad\Atm\Entities\FiftyNote;
use MianMuhammad\AtmBox\AbstractAtmBox;

/**
 * Class FiftyNoteAtmBox
 *
 * @package AppCode\NoteBox
 */
class FiftyNoteAtmBox extends AbstractAtmBox
{
    /**
     *
     * @return \MianMuhammad\Atm\Entities\FiftyNote
     *
     */
    public function GetNote(): FiftyNote
    {
        return new FiftyNote();
    }
}