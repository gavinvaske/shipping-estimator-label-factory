<?php

namespace modules\sitemodule\controllers;

use Craft;
use craft\web\Controller;

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
    protected $allowAnonymous = ['index', 'do-something'];

    /**
     * Handle a request going to our plugin's actionDoSomething URL,
     * e.g.: actions/sitemodule/shipping/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the ShippingController actionDoSomething() method';

        print "Hello Marsss!!";

        return $result;
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