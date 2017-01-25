<?php

namespace MianMuhammad\Atm\AtmBox;

use MianMuhammad\Atm\Contracts\AtmBox;
use MianMuhammad\Atm\Response\AtmMachineResponse;

abstract class AbstractAtmBox implements AtmBox
{
    /** @var null */
    protected $nextNoteBox;

    /**
     * AbstractAtmBox constructor.
     */
    public function __construct()
    {
        $this->nextNoteBox = null;
    }

    /**
     *
     * @return mixed
     *
     */
    abstract public function GetNote();

    /**
     *
     * @param AtmMachineResponse $response
     *
     * @author Mian Muahmmad <se.mianasif@gmail.com>
     *
     * @return mixed|void
     */
    public function HandleRequest(AtmMachineResponse &$response)
    {
        if ($response->isAmountConsumed())
            return;

        while ($response->GetAmount() >= $this->GetNote()->GetNoteValue()) {
            $response->AddNote($this->GetNote());
        }

        if ($this->nextNoteBox !== null) {
            $this->nextNoteBox->HandleRequest($response);
        }
    }

    /**
     *
     * @param \MianMuhammad\Atm\AtmBox\AbstractAtmBox $noteBox
     *
     * @return mixed|void
     */
    public function SetNextNoteBox(AbstractAtmBox $noteBox)
    {
        $this->nextNoteBox = $noteBox;
    }
}