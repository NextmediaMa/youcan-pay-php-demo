<?php

namespace App\Http\Controllers\Standalone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use YouCan\Pay\YouCanPay;

class ShowFormController extends Controller
{
    public function __construct(
        private YouCanPay $youCanPay
    )
    {
    }

    public function __invoke(Request $request)
    {
        $orderId = uniqid();

        $request->session()->put('orderId', $orderId);

        $token = $this->youCanPay->token->create(
            $orderId,
            "2000",
            "USD",
            $request->ip(),
            route('standalone.callback', ['success' => true]),
            route('standalone.callback', ['success' => false])
        ); //20 USD

        return view('integrations.standalone', [
            'paymentUrl' => $token->getPaymentURL()
        ]);
    }
}
