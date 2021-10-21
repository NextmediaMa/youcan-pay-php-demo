<?php

namespace App\Http\Controllers\Widget;

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

        $token = $this->youCanPay->token->create($orderId, "2000", "USD", $request->ip()); //20 USD

        return view('integrations.widget', [
            'token' => $token->getId()
        ]);
    }
}
