<?php

namespace modules\sitemodule\models;

class PackageWeight
{
    public $UnitOfMeasurement;
    public $Weight;

    public function __construct($unitOfMeasurement, $weight) {
        $this->UnitOfMeasurement = $unitOfMeasurement;
        $this->Weight = $weight;
    }
}