<?php

namespace modules\sitemodule\models;

class ShipFrom
{
    public $Name;
    public $Address;

    /**
     * @param $Name
     * @param $Address
     */
    public function __construct($Name, $Address)
    {
        $this->Name = $Name;
        $this->Address = $Address;
    }


}