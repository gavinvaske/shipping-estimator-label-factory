<?php

namespace modules\sitemodule\models;

class RateRequest
{
    public $Request;
    public $Shipment;

    /**
     * @param $Request
     * @param $Shipment
     */
    public function __construct($Request, $Shipment)
    {
        $this->Request = $Request;
        $this->Shipment = $Shipment;
    }
}