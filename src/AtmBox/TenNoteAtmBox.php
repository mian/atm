<?php

namespace AppCode\NoteBox;

use MianMuhammad\Atm\Entities\TenNote;
use MianMuhammad\AtmBox\AbstractAtmBox;

/**
 * Class TenNoteAtmBox
 *
 * @package AppCode\NoteBox
 */
class TenNoteAtmBox extends AbstractAtmBox
{
    /**
     *
     * @return \MianMuhammad\Atm\Entities\TenNote
     *
     */
    public function GetNote(): TenNote
    {
        return new TenNote();
    }
}