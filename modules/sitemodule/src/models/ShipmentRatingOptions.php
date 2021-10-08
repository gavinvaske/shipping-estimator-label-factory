<?php

namespace modules\sitemodule\models;

class ShipmentRatingOptions
{
    public $UserLevelDiscountIndicator;

    /**
     * @param $UserLevelDiscountIndicator
     */
    public function __construct($UserLevelDiscountIndicator)
    {
        $this->UserLevelDiscountIndicator = $UserLevelDiscountIndicator;
    }


}