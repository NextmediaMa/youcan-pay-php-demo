@extends('layout')

@section('content')
    <img src="https://pay.youcan.shop/images/ycpay-logo.svg" alt="YouCan Pay Logo" style="max-height: 100px;">

    <div hidden style="color: red; font-size: larger" id="error"></div>

    <div id="payment-card"></div>
    <button type="button" id="pay">Pay $20</button>

    <h3>See <a href="https://pay.youcan.shop/docs">YouCan Pay Documentation</a></h3>

    <script type="text/javascript">
        var ycPay = new YCPay('{{ config('ycpay.public_key') }}', {
            locale: "en"
        });

        // setting the sandbox mode
        ycPay.setSandboxMode(true);

        // render the form
        ycPay.renderForm('#payment-card');

        // start the payment on button click
        document.getElementById('pay').addEventListener('click', function () {
            // execute the payment
            ycPay.pay('{{ $token }}')
                .then(successCallback)
                .catch(errorCallback);
        })

        function successCallback(transactionId) {
            const form = document.createElement('form');
            form.setAttribute('action', '{{ route('widget.verify') }}');
            form.setAttribute('method', 'POST');
            form.hidden = true;

            const csrf = document.createElement('input');
            csrf.setAttribute('name', '_token');
            csrf.setAttribute('value', '{{ csrf_token() }}');
            form.appendChild(csrf);

            const transaction = document.createElement('input');
            transaction.setAttribute('name', 'transactionId');
            transaction.setAttribute('value', transactionId);
            form.appendChild(transaction);

            document.body.appendChild(form);

            form.submit();
        }

        function errorCallback(errorMessage) {
            const error = document.getElementById('error');
            error.innerText = `Error: ${errorMessage}`;
            error.hidden = false;
        }
    </script>
@endsection
