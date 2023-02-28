<?php 
class Fund{
    // property
    private $fund;
    // constructor
    public function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }
    //methods
    public function addFund($money){
        $this->fund += $money;
    }
    public function decutFund($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo "Total fund is {$this->fund} \n";
    }
}

$ourFund = new Fund(100);
//$ourFund->fund = 75; // can't use if property/method is private
$ourFund->getTotal();
$ourFund->addFund(10);
$ourFund->decutFund(7);
$ourFund->getTotal();