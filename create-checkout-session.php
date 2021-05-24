<?php

require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51GnYWKFeoY7b2LtgxpBCpHoYlltGuh2ySozJJrTZ1cBii83hLMuCd7B5VpeJfYdxJa0Ry4zGAHmc4T3XIAbdJKrW00aPQNWpTg');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/tvcpay/order_process.php';
$quantity = $body->quantity;

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'eur',
      'unit_amount' => 2000,
      'product_data' => [
        'name' => 'first',
        'images' => ["https://i.imgur.com/EHyR2nP.png"],
      ],
    ],
    'quantity' => $quantity,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

echo json_encode(['id' => $checkout_session->id]);