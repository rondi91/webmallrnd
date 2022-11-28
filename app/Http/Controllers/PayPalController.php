<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    public function getExpressCheckout()
    {
        $cart = \Cart::session(auth()->id());

        $cartItems = array_map(function ($item) use($cart) {
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['quantity']

            ];
        }, $cart->getContent()->toarray());

      
        $checkoutData = [
          'items' => $cartItems,
          'return_url' => route('paypal.success'),
          'cancel_url' => route('paypal.cancel'),
          'invoice_id' => uniqid(),
          'invoice_description' => " Order description ",
          'total' => $cart->getSubTotal(),
          'shipping_discount' => $cart->getSubTotal() - $cart->getTotal()
        ];
        $provider = new PayPalClient;
        


      // Through facade. No need to import namespaces
        $provider = \PayPal::setProvider();
        // $provider->setApiCredentials($config);
        $provider->getAccessToken();
        // $provider->setCurrency('EUR');
        // $plan = $provider->createPlan($checkoutData,true);
        // $provider = \PayPal::setProvider();
        // $invoice = $provider->createInvoice($data);
        // dd($token);
        // $fields = ['id', 'product_id', 'name', 'description'];
        // $plans = $provider->listPlans(1, 30, true, $fields);
        // dd($invoice);
        // $plans = $provider->listPlans();
        // $plan = $provider->createPlan($data,true);
      
        // $response = $provider->createPlan($cartItems,true);
        $data =  json_decode('{
  "name": "Video Streaming Service",
  "description": "Video streaming service",
  "type": "SERVICE",
  "category": "SOFTWARE",
  "image_url": "https://example.com/streaming.jpg",
  "home_url": "https://example.com/home"
}', true);

$request_id = 'create-product-'.time();

$product = $provider->createOrder($checkoutData);
        dd($product);

    }
}
