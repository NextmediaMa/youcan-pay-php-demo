<?php

namespace App\Http\Controllers\Standalone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use YouCan\Pay\YouCanPay;

class CallbackController extends Controller
{
    public function __construct(
        private YouCanPay $youCanPay
    )
    {
    }

    public function __invoke(Request $request)
    {
        if ($request->query('success')) {

            $orderId = $this->youCanPay->transaction->get($request->query('transaction_id'))?->getOrderId();

            if ($request->session()->get("orderId") === $orderId) {
                return 'Payment was successful.';
            }

            return 'Payment could not be verified.';
        }

        return sprintf("Error: %s", $request->query('message'));
    }
}
