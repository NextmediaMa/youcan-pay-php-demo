<?php

namespace App\Http\Controllers\Widget;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use YouCan\Pay\YouCanPay;

class VerifyPaymentController extends Controller
{
    public function __construct(
        private YouCanPay $youCanPay
    )
    {
    }

    public function __invoke(Request $request)
    {
        $transactionId = $request->get('transactionId');

        $orderId = $this->youCanPay->transaction->get($transactionId)?->getOrderId();

        if ($request->session()->get("orderId") === $orderId) {
            return 'Payment was successful.';
        }

        return 'Payment could not be verified.';
    }
}
