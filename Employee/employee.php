<?php
class Employee
{
    // property
    private $name;
    private $civil;
    private $position;
    private $employ;
    private $base_hour;
    private $over_hour;
    private $baseRate;
    private $overRate;
    private $pay;
    private $addPay;
    private $grossIncome;
    private $netIncome;
    private $healthcare;
    private $tax;

    public function __construct($name, $civil, $position, $employ, $base_hour, $over_hour)
    {
        #INSTANTIATE
        $this->name = $name;
        $this->civil = $civil;
        $this->position = $position;
        $this->employ = (int)$employ;
        $this->base_hour = (int)$base_hour;
        $this->over_hour = (int)$over_hour;
        $this->baseRate = 0;
        $this->overRate = 0;
        $this->pay = 0;
        $this->addPay = 0;
        $this->grossIncome = 0;
        $this->netIncome = 0;
        $this->healthcare = 0;
        $this->tax = 0;

        // 基本給の計算
        $this->calcGrossPay();
    }

    // 
    public function calcGrossPay()
    {
        $adminPay = [1 => 350, 2 => 400, 3 => 500];
        $staffPay = [1 => 300, 2 => 350, 3 => 400];
        $adminOverPay = [1 => 15, 2 => 30, 3 => 40];
        $staffOverPay = [1 => 10, 2 => 25, 3 => 30];

        if ($this->position == "admin") {
            $this->baseRate = $adminPay[$this->employ];
            $this->pay = $this->baseRate * ($this->base_hour / 8);
            $this->overRate = $adminOverPay[$this->employ];
            $this->addPay = $this->overRate * ($this->over_hour);
        } else {
            $this->baseRate = $staffPay[$this->employ];
            $this->pay = $this->baseRate * ($this->base_hour / 8);
            $this->overRate = $staffOverPay[$this->employ];
            $this->addPay = $this->overRate * ($this->over_hour);
        }
        $this->grossIncome = $this->pay + $this->addPay;
    }

    # Getter Method
    public function getName()
    {
        return $this->name;
    }

    public function getCivil()
    {
        return $this->civil;
    }

    public function getPosition()
    {
        return $this->position;
    }

    
    public function getEmployee()
    {
        if ($this->employ == "1") {
            $this->employ = "Contractual";
        } elseif ($this->employ == "2") {
            $this->employ = "Probationary";
        } elseif ($this->employ == "3") {
            $this->employ = "Regular";
            // } else {
                //     $this->employ = "雇用形態にエラー";
            }
            return $this->employ;
        }
        
        public function getBaseRate()
        {
            return $this->baseRate;
        }
    
        public function getOverRate()
        {
            return $this->overRate;
        }

        public function getHealthcare()
        {
            if ($this->civil == "single") {
                $this->healthcare = 200;
            } elseif ($this->civil == "married") {
            $this->healthcare = 75;
        } else {
            $this->healthcare = "healthcareに計算違い";
        }
        return $this->healthcare;
    }

    public function getTax()
    {
        if ($this->civil == "single") {
            if ($this->grossIncome > 1000) {
                $this->tax = $this->grossIncome * 0.05;
            }
        } elseif ($this->civil == "married") {
            if ($this->grossIncome > 1500) {
                $this->tax = $this->grossIncome * 0.03;
            }
        }
        return $this->tax;
    }

    public function getNetIncome()
    {
        $this->getTax();
        $this->netIncome = number_format($this->grossIncome - ($this->tax + $this->healthcare), 2);
        return $this->netIncome;
    }

    public function getGrossIncome()
    {
        return $this->grossIncome;
    }
}
