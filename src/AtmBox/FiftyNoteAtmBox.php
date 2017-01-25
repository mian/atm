<?php

namespace MianMuhammad\Atm\AtmBox;

use MianMuhammad\Atm\Entities\FiftyNote;

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