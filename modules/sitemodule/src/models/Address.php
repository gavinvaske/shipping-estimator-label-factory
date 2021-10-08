<?php

namespace modules\sitemodule\models;

class Address
{
    public $AddressLine;
    public $City;
    public $StateProvinceCode;
    public $PostalCode;
    public $CountryCode;

    /**
     * @param $AddressLine
     * @param $City
     * @param $StateProvinceCode
     * @param $PostalCode
     * @param $CountryCode
     */
    public function __construct($AddressLine, $City, $StateProvinceCode, $PostalCode, $CountryCode)
    {
        $this->AddressLine = $AddressLine;
        $this->City = $City;
        $this->StateProvinceCode = $StateProvinceCode;
        $this->PostalCode = $PostalCode;
        $this->CountryCode = $CountryCode;
    }


}