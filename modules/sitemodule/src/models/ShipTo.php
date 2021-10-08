<?php

namespace modules\sitemodule\models;

class ShipTo
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