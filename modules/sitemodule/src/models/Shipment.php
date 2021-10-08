<?php

namespace modules\sitemodule\models;

class Shipment
{
    public $ShipmentRatingOptions;
    public $Shipper;
    public $ShipTo;
    public $ShipFrom;
    public $Service;
    public $ShipmentTotalWeight;
    public $Package;

    /**
     * @param $ShipmentRatingOptions
     * @param $Shipper
     * @param $ShipTo
     * @param $ShipFrom
     * @param $Service
     * @param $ShipmentTotalWeight
     * @param $Package
     */
    public function __construct($ShipmentRatingOptions, $Shipper, $ShipTo, $ShipFrom, $Service, $ShipmentTotalWeight, $Package)
    {
        $this->ShipmentRatingOptions = $ShipmentRatingOptions;
        $this->Shipper = $Shipper;
        $this->ShipTo = $ShipTo;
        $this->ShipFrom = $ShipFrom;
        $this->Service = $Service;
        $this->ShipmentTotalWeight = $ShipmentTotalWeight;
        $this->Package = $Package;
    }


}