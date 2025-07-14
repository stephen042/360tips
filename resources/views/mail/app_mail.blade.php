<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title>{{ config('app.name') }}</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
    <style>
        html, body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Roboto', sans-serif !important;
            font-size: 14px;
            line-height: 24px;
            color: #8094ae;
            font-weight: 400;
            background-color: #f5f6fa;
        }

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }

        table, td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        a {
            text-decoration: none;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }
    </style>
</head>

<body width="100%" style="margin: 0; padding: 0 !important;">
    <center style="width: 100%; background-color: #f5f6fa;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
            <tr>
                <td style="padding: 0;">
                    <!-- Top banner with embedded background image -->
                    <table width="100%" style="max-width: 620px; margin: 0 auto;" role="presentation">
                        <tr>
                            <td background="cid:crypto-bg" style="background-image: url('cid:crypto-bg'); background-size: cover; background-position: center; height: 200px; text-align: center;" valign="middle">
                                @if(config('app.logo'))
                                    <img src="{{ asset(config('app.logo')) }}" alt="Logo" width="100" style="margin-top: 50px;">
                                @else
                                    <h2 style="color: #ffffff; padding-top: 80px; font-size: 24px;">{{ ucwords(config('app.name')) }}</h2>
                                @endif
                            </td>
                        </tr>
                    </table>

                    <!-- Main content wrapper -->
                    <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
                        <tbody>
                            <tr>
                                <td style="padding: 30px 30px 15px 30px;">
                                    <h2 style="font-size: 18px; color: #6576ff; font-weight: 600; margin: 0; text-align: center;">
                                        {{ $body["title"] }}
                                    </h2>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 30px 20px">
                                    <p style="margin-bottom: 10px;">Hi {{ $body['name'] }},</p>
                                    <p style="margin-bottom: 2px;">{!! $body["message"] !!}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px 30px 40px">
                                    <p style="margin: 0; font-size: 13px; line-height: 22px; color:#9ea8bb;">
                                        This is an automatically generated email. Please do not reply. If you face any issues, contact us at {{ config('app.Admin_email') }}.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Footer -->
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding:25px 20px 0;">
                                    <p style="font-size: 13px;">
                                        Copyright © {{ date('Y') }} {{ ucwords(config('app.name')) }}. All rights reserved.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
