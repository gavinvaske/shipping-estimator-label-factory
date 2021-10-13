<?php

namespace modules\sitemodule\controllers;

use Craft;
use craft\web\Controller;

class PaymentController extends Controller
{
    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = true;

    public function actionCreateCheckoutSession()
    {
        \Stripe\Stripe::setApiKey('sk_test_HUPcOzbRokXXdG9IbNsh4wmB');
        header('Content-Type: application/json');
        $YOUR_DOMAIN = 'http://localhost:8888';

        $amount = 1000; // TODO: make this dynamic

        // TODO: See https://stackoverflow.com/a/66306163 for info on how to create a custom charge
        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'label_purchase',
                    ],
                    'unit_amount' => $amount,
                ],
                'quantity' => 1,
            ]],
            'payment_method_types' => [
                'card',
            ],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/success.html',
            'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
        ]);

        $redirectUrl = $checkout_session->url;

        header("HTTP/1.1 303 See Other");
        header("Location: " . $redirectUrl);

        return $this->redirect($redirectUrl);
    }
}