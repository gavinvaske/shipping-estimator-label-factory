<?php

namespace modules\sitemodule\services;

use craft\base\Component;
use modules\sitemodule\models\Address;
use modules\sitemodule\models\Dimensions;
use modules\sitemodule\models\Package;
use modules\sitemodule\models\PackageWeight;
use modules\sitemodule\models\PackagingType;
use modules\sitemodule\models\RateRequest;
use modules\sitemodule\models\Request;
use modules\sitemodule\models\Service;
use modules\sitemodule\models\ShipFrom;
use modules\sitemodule\models\Shipment;
use modules\sitemodule\models\ShipmentRatingOptions;
use modules\sitemodule\models\ShipmentTotalWeight;
use modules\sitemodule\models\Shipper;
use modules\sitemodule\models\ShipTo;
use modules\sitemodule\models\TransactionReference;
use modules\sitemodule\models\UnitOfMeasurement;

class ShippingService extends Component
{

    const UPS_RATE_URL = "https://onlinetools.ups.com/ship/v1/rating/Rate";

    function makeUPSApiShippingRequest($shipToAddress, $packageWeight, $packageDimensions){
        $apiService = new ApiService();
        $method = 'POST';

        $data = $this->createUPSShippingRequestBody($shipToAddress, $packageWeight, $packageDimensions);

        $make_call = $apiService->callAPI($method, self::UPS_RATE_URL, json_encode($data));

        $raw_response = json_decode($make_call, true);

        return json_encode($raw_response);
    }

    private function createUPSShippingRequestBody($shipToAddress, $packageWeight, $packageDimensions)
    {
        $requestBody = array();

        $Request = new Request("1703", new TransactionReference(" "));
        $ShipmentRatingOptions = new ShipmentRatingOptions("TRUE");
        $AddressFrom = new Address("366 Robin LN SE", "Marietta", "GA", "30067", "US");
        $Shipper = new Shipper("Billy Blanks", " ", $AddressFrom);
        $ShipFrom = new ShipFrom("Billy Blanks", $AddressFrom);
        $Service = new Service("03", "Ground");
        $PackagingType = new PackagingType("02", "Package");
        $Package = new Package($PackagingType, $packageDimensions, $packageWeight);
        
        $Shipment = new Shipment($ShipmentRatingOptions, $Shipper, $shipToAddress, $ShipFrom, $Service, $packageWeight, $Package);

        $requestBody["RateRequest"] = new RateRequest($Request, $Shipment);

        return $requestBody;
    }
}