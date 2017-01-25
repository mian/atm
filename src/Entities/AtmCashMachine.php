<?php

namespace MianMuhammad\Atm\Entities;

use MianMuhammad\Atm\AtmBox\FiftyNoteAtmBox;
use MianMuhammad\Atm\AtmBox\HundredNoteAtmBox;
use MianMuhammad\Atm\AtmBox\TenNoteAtmBox;
use MianMuhammad\Atm\AtmBox\TwentyNoteAtmBox;
use MianMuhammad\Atm\Exceptions\NotAvailableException;
use MianMuhammad\Atm\Request\AtmMachineRequest;
use MianMuhammad\Atm\Response\AtmMachineResponse;

class AtmCashMachine
{
    /**
     * @var \MianMuhammad\Atm\AtmBox\HundredNoteAtmBox
     *
     */
    private $noteDeductionChain;

    /**
     * AtmCashMachine constructor.
     */
    public function __construct()
    {
        $hundredNoteBox = new HundredNoteAtmBox();
        $fiftyNoteBox   = new FiftyNoteAtmBox();
        $twentyNoteBox  = new TwentyNoteAtmBox();
        $tenNoteBox     = new TenNoteAtmBox();

        $twentyNoteBox->SetNextNoteBox($tenNoteBox);
        $fiftyNoteBox->SetNextNoteBox($twentyNoteBox);
        $hundredNoteBox->SetNextNoteBox($fiftyNoteBox);

        $this->noteDeductionChain = $hundredNoteBox;
    }

    /**
     * DESC
     *
     * @param \MianMuhammad\Atm\Request\AtmMachineRequest $request
     *
     * @return array
     * @throws \MianMuhammad\Atm\Exceptions\NotAvailableException
     *
     */
    public function WithdrawCash(AtmMachineRequest $request)
    {
        $typedAmount = intval($request->GetAmount());

        if ($typedAmount <= 0) {
            throw new \InvalidArgumentException("Amount must be greater than zero");
        } else {
            $response = new AtmMachineResponse($typedAmount);

            $this->noteDeductionChain->HandleRequest($response);

            if ($response->isAmountConsumed()) {
                return $response->GetNotes();
            } else {
                throw new NotAvailableException("The notes required for the amount to be consumed is not available");
            }
        }
    }
}