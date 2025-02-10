<?php

class School
{
    private $name;
    private $year;
    private $unit;
    private $lab;
    private $price;

    public function setValues($new_name, $new_year, $new_unit, $new_lab)
    {
        $this->name = $new_name;
        $this->year = (int)$new_year;
        $this->unit = $new_unit;
        $this->lab = $new_lab;
        $this->price = 0;

        if ($this->year == 1) {
            $this->price = 550 * $this->unit;
            if ($this->lab == "lab") {
                $this->price += 3359;
                $this->price = (string)number_format($this->price, 2) . "(With Lab)";
            } else {
                $this->price = (string)number_format($this->price, 2) . "(Without Lab)";
            }
        } elseif ($this->year == 2) {
            $this->price = 630 * $this->unit;
            if ($this->lab == "lab") {
                $this->price += 4000;
                $this->price = (string)number_format($this->price, 2) . "(With Lab)";
            } else {
                $this->price = (string)number_format($this->price, 2) . "(Without Lab)";
            }
        } elseif ($this->year == 3) {
            $this->price = 470 * $this->unit;
            if ($this->lab == "lab") {
                $this->price += 2890;
                $this->price = (string)number_format($this->price, 2) . "(With Lab)";
            } else {
                $this->price = (string)number_format($this->price, 2) . "(Without Lab)";
            }
        } elseif ($this->year == 4) {
            $this->price = 501 * $this->unit;
            if ($this->lab == "lab") {
                $this->price += 3555;
                $this->price = (string)number_format($this->price, 2) . "(With Lab)";
            } else {
                $this->price = (string)number_format($this->price, 2) . "(Without Lab)";
            }
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
