<?php

namespace modules\sitemodule\controllers;

use Craft;
use craft\web\Controller;
use modules\sitemodule\models\Address;
use modules\sitemodule\models\Dimensions;
use modules\sitemodule\models\PackageWeight;
use modules\sitemodule\models\ShipTo;
use modules\sitemodule\models\UnitOfMeasurement;
use modules\sitemodule\services\ShippingService;

/**
 * Shipping Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    gavinvaske
 * @package   Sitemodule
 * @since     1.0.0
 */
class ShippingController extends Controller
{
    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = true;

    /**
     * Handle a request going to our plugin's actionDoSomething URL,
     * e.g.: actions/sitemodule/shipping/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the ShippingController actionDoSomething() method';
        $shippingService = new ShippingService();

        $request = Craft::$app->getRequest();

        $request = Craft::$app->getRequest();

        $streetAddress = $request->getRequiredParam('address');
        $city = $request->getRequiredParam('city');
        $state = $request->getRequiredParam('state');
        $zipcode = $request->getRequiredParam('zipcode');

        $packageWeight = $request->getRequiredParam('package-weight');
        $packageHeight = $request->getRequiredParam('package-height');

        $AddressTo = new Address($streetAddress, $city, $state, $zipcode, "US");
        //$AddressTo = new Address("355 West San Fernando Street", "San Jose", "CA", "95113", "US");
        $shipToAddress = new ShipTo("Sarita Lynn", $AddressTo);

        $unitOfMeasure = new UnitOfMeasurement("LBS", "");
        $packageWeight = new PackageWeight($unitOfMeasure, $packageWeight);

        $UnitOfMeasurement = new UnitOfMeasurement("IN", "");
        $packageDimensions = new Dimensions($UnitOfMeasurement, "10", "7", $packageHeight);

        $upsResponse = $shippingService->makeUPSApiShippingRequest($shipToAddress, $packageWeight, $packageDimensions);

        return $this->asJson($upsResponse);
    }

    /**
     * Handle a request going to our plugin's actionDoSomething URL,
     * e.g.: actions/sitemodule/shipping/do-something
     *
     * @return string
     */
    public function actionTest() {

        return "this is a test";
    }

}