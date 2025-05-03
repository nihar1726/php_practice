<?php

class bank_account{
    public $account_number;
    public $balance;

    function __construct($account_number)
    {
        $this->account_number = $account_number;
        $this->balance = 0;
    }

    public function deposit($deposit){
        if($deposit > 0){
            $this->balance += $deposit;
            return "Deposit successful. New balance: " . $this->balance;
        } else {
            return "Deposit amount must be positive.";
        }
    }

    public function withdraw($withdraw){
        if($withdraw > 0 && $withdraw <= $this->balance){
            $this->balance -= $withdraw;
            return "Withdrawal successful. New balance: " . $this->balance;
        } else {
            return "Withdrawal amount must be positive and less than or equal to the balance.";
        }
    }
    
    public function get_balance(){
        return $this->balance;
    }

}