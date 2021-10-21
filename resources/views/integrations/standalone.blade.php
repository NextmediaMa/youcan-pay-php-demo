@extends('layout')

@section('content')
    <img src="https://pay.youcan.shop/images/ycpay-logo.svg" alt="YouCan Pay Logo" style="max-height: 100px;">

    <a href="{{ $paymentUrl }}" style="display: block">
        <button>Pay $20</button>
    </a>

    <h3>See <a href="https://pay.youcan.shop/docs">YouCan Pay Documentation</a></h3>
@endsection
