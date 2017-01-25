<?php

namespace MianMuhammad\Atm\AtmBox;

use MianMuhammad\Atm\Entities\TenNote;

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