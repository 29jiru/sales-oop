<?php
class BankAccount
{
    // property
    private $accountName;
    private $accountNumber;
    private $accountBalance;

    public function __construct($accountName, $accountNumber)
    {
        #INSTANTIATE
        $this->accountName = $accountName;
        $this->accountNumber = $accountNumber;
    }

    # Getter Method
    public function getAccountName()
    {
        return $this->accountName;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function getBalance()
    {
        return $this->accountBalance;
    }

    public function depositAmount($amount)
    {
        if ($amount > 0) {
            $this->accountBalance += $amount;
        }
        return $this;
    }
}
