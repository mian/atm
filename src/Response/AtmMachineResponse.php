<?php

namespace MianMuhammad\Atm\Response;

use MianMuhammad\Atm\Contracts\Note;

/**
 * Class AtmMachineResponse
 *
 * @package MianMuhammad\Atm\Response
 */
class AtmMachineResponse
{
    /**
     * @var $amount
     */
    private $amount;

    /**
     * @var $noteItems array
     */
    private $noteItems;

    /**
     * AtmMachineResponse constructor.
     *
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount    = $amount;
        $this->noteItems = [];
    }

    /**
     *
     * @param $partialAmount
     *
     */
    private function DeductAmount($partialAmount)
    {
        if ($partialAmount <= $this->amount) {
            $this->amount -= $partialAmount;
        }
    }

    /**
     *
     * @return bool
     *
     */
    public function isAmountConsumed(): bool
    {
        return ($this->amount === 0);
    }

    /**
     *
     * @param \MianMuhammad\Atm\Contracts\Note $note
     *
     * @return void
     *
     */
    public function AddNote(Note $note)
    {
        $this->DeductAmount($note->GetNoteValue());
        $this->noteItems[] = $note->GetNoteValue();
    }

    /**
     *
     * @return mixed
     *
     */
    public function GetAmount()
    {
        return $this->amount;
    }

    /**
     *
     * @return array
     *
     */
    public function GetNotes(): array
    {
        return $this->noteItems;
    }
}