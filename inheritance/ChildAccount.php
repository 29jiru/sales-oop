<?php
include 'BankAccount.php';

// This class inherit the base using the "extend" keyword
class Account1 extends BankAccount{
    private $interest_rate;

    private function emailAccount(){
        return "john.doe@gmail.com";
    }

    public function getEmailAccount(){
        return $this->emailAccount();
    }

    public function setInterestRate($interest_rate){
        $this->interest_rate = $interest_rate;
    }

    public function addInterest(){
        #Calculate
        $interest = $this->interest_rate * $this->getBalance();
        $this->depositAmount($interest);
    }
}

$accnt1_obj = new Account1("John Doe", "0122-3254-1000");
echo "Account Name: ". $accnt1_obj->getAccountName() ."<br>";       // output: 
echo "Account Number: ". $accnt1_obj->getAccountNumber() ."<br>";   // output: 
$accnt1_obj->depositAmount(500);                                    // deposit: 
$accnt1_obj->setInterestRate(0.05);                                 // : 
$accnt1_obj->addInterest();                                         // : 
echo "Balance: " .$accnt1_obj->getBalance() ."<br>";                // : 
echo "Email Address: " .$accnt1_obj->getEmailAccount() ."<br>";     // output: 