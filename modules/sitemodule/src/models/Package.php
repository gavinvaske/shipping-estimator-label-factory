<?php

namespace modules\sitemodule\models;

class Package
{
    public $PackagingType;
    public $Dimensions;
    public $PackageWeight;

    public function __construct($packagingType, $dimensions, $packageWeight)
    {
        $this->PackagingType = $packagingType;
        $this->Dimensions = $dimensions;
        $this->PackageWeight = $packageWeight;
    }
}