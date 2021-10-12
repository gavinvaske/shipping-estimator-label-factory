<?php

namespace modules\sitemodule\models;

class Shipper
{
    public $Name;
    public $ShipperNumber;
    public $Address;

    /**
     * @param $Name
     * @param $Address
     */
    public function __construct($Name, $ShipperNumber, $Address)
    {
        $this->Name = $Name;
        $this->ShipperNumber = $ShipperNumber;
        $this->Address = $Address;
    }
}