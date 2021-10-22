@php
    use \App\Services\KeysService;
@endphp

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        * {
            font-family: Montserrat, sans-serif;
        }

        body {
            margin: 0px;
            background-color: #fdfdfd;
        }

        .info-card-holder {
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .info-card {
            height: 640px;
            width: 500px;
            background: white;
            border-radius: 13px;
            border: 1px solid #ddd;
            box-shadow: 3px 8px 7px #dbdbdb;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        .header img {
            width: 200px;
            margin: 30px auto;
        }

        .links-holder {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            margin: 0px auto 14px;
            width: 405px;
            border-radius: 9px;
            background-color: #f3f4f6;
            border: 1px solid #efefef;
            overflow: hidden;
            box-shadow: rgb(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .link-element {
            color: #374151;
            height: 69px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 600;
            border-right: 1px solid #ddd;
            cursor: pointer;
            text-decoration: none;
        }

        .link-element:last-child {
            border: none;
        }

        .link-element p {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .link-element p:hover {
            background-color: #f9fafb;
            text-decoration: underline;
        }

        .card-alert {
            width: 372px;
            display: flex;
            align-items: center;
            background-color: #f3f4f6;
            padding: 11px;
            border-radius: 37px;
            margin: auto;
            box-shadow: 0 0 0 1px #efefef;
        }

        .icon-holder {
            display: flex;
            padding: 4px;
            background: white;
            border-radius: 50%;
        }

        .icon-holder .icon {
            color: #4a83fc;
            height: 30px;
        }

        .alert-text {
            font-size: 15px;
            font-weight: 600;
            margin-left: 8px;
            color: #374151;
        }

        .footer-container {
            display: flex;
            height: 68px;
            align-items: center;
            justify-content: space-between;
            border-top: 1px solid #ddd;
        }

        .footer-item {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #4a83fc;
            font-size: 19px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }

        .footer-item:hover {
            background: #2563EB;
        }

        .footer-item:first-child {
            border-right: 1px solid #2d68e5;
        }

        .danger-alert .icon {
            color: #DC2626;
        }

        .danger-alert .alert-text {
            color: #B91C1C;
        }

        .danger-alert {
            background-color: #FEF2F2;
            width: 392px;
            box-shadow: none;
        }

        .link-icon {
            width: 19px;
            margin-left: 6px;
        }

        .input-form {
            height: 34px;
            outline: none;
            border-radius: 7px;
            border: 1px solid #e0e0e0;
            padding: 10px 15px;
            font-weight: 500;
            background-color: #F9FAFB;
            font-size: 15px;
        }

        .input-form:focus {
            background-color: #F3F4F6;
        }

        .form-holder {
            display: grid;
            grid-gap: 13px;
            width: 405px;
            margin: 0 auto;
        }

        .submit-form {
            padding: 16px 28px;
            border-radius: 10px;
            background: #4a83fc;
            border: none;
            color: white;
            cursor: pointer;
            margin-left: auto;
            font-weight: 600;
            margin-bottom: 26px;
        }
    </style>
</head>
<body style="margin: 0px; background-color: #fdfdfd">
<div class="info-card-holder">
    <div class="info-card form">
        <div>
            <div class="header" style="display: flex">
                <img
                    style="width: 200px; margin: 30px auto"
                    src="https://pay.youcan.shop/images/ycpay-logo.svg"
                />
            </div>

            <div>
                @if(KeysService::keysExist())
                    <div class="card-alert">
                        <div>
                            <div class="icon-holder">
                                <svg
                                    class="icon"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                        <div class="alert-text">
                            Demo project for YouCan Pay integration
                        </div>
                    </div>
                @else
                    <div class="card-alert danger-alert">
                        <div>
                            <div class="icon-holder">
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="alert-text">
                            You need to set your public and private keys
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div>
            <div class="links-holder">
                <a class="link-element" target="_blank" href="https://pay.youcan.shop">
                    <p>Official
                        <svg class="icon link-icon" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path>
                            <path
                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
                        </svg>
                    </p>
                </a>
                <a class="link-element" target="_blank" href="https://pay.youcan.shop/docs">
                    <p>Docs
                        <svg class="icon link-icon" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path>
                            <path
                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
                        </svg>
                    </p>
                </a>
                <a class="link-element" target="_blank" href="https://www.instagram.com/youcanpayment">
                    <p>Instagram
                        <svg class="icon link-icon" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path>
                            <path
                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
                        </svg>
                    </p>
                </a>
            </div>
        </div>
        @if(KeysService::keysExist() === false)
            <form class="form-holder" action="{{ route('set_keys') }}" method="POST">
                @csrf
                <input type="text" name="keys[publicKey]" class="input-form" placeholder="Public text">
                <input type="text" name="keys[privateKey]" class="input-form" placeholder="Private text">
                <button class="submit-form">Submit</button>
            </form>
        @else
            <div>
                <div class="footer-container">
                    <a href="{{ route('widget.show') }}" class="footer-item">Widget</a>
                    <a href="{{ route('standalone.show') }}" class="footer-item">Standalone</a>
                </div>
            </div>
        @endif
    </div>
</div>
</body>
</html>
