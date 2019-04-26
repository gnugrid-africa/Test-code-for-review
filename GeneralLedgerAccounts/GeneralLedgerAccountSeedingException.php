<?php   

namespace App\Exceptions\GeneralLedgerAccounts;

use Exception;

class GeneralLedgerAccountSeedingException extends Exception{

    public function __construct($message){
        parent::__construct($message);
    }
}