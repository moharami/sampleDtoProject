<?php

namespace App\DataTransferObjects;


use Moharami\LaravelDataTransferObject\Attributes\map;
use Moharami\LaravelDataTransferObject\DataTransferObject;

class BankDTO extends DataTransferObject
{
    public int $id;
    #[map('accountNumber')]
    public string $account_number;
    #[map('BankName')]
    public string $bank_name;
    public string $routing_number;
    public string $swift_bic;
}
