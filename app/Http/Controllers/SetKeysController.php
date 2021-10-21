<?php

namespace App\Http\Controllers;

use App\Services\KeysService;
use Illuminate\Http\Request;

class SetKeysController extends Controller
{
    public function __invoke(Request $request)
    {
        $keys = $request->get('keys');

        KeysService::setKeys($keys['publicKey'], $keys['privateKey']);

        return redirect()
            ->back();
    }
}
