<?php

class Fare
{
    private $age;
    private $km;
    private $fare;

    public function setValues($new_age, $new_km)
    {
        $this->age = $new_age;
        $this->km = $new_km;
        // first fare is $8
        $this->fare = 8;

        if ($this->km > 4) {
            $add = $this->km - 4;
            $this->fare += $add ;
        }
        // Apply 20% discount
        if ($this->age > 59) {
            $this->fare = ($this->fare * 0.8);
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getKm()
    {
        return $this->km;
    }

    public function getFare()
    {
        return $this->fare;
    }
}
