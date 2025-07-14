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
      border: 0;
      display: block;
      outline: none;
      text-decoration: none;
    }
  </style>
</head>

<body width="100%" style="margin: 0; padding: 0 !important;">
  <center style="width: 100%; background-color: #f5f6fa;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
      <tr>
        <td>
          <!-- Full Width Header Image -->
          <table width="100%" style="max-width: 620px; margin: 0 auto;" role="presentation">
            <tr>
              <td style="padding: 0;">
                <img src="https://360xtip.online/public/assets/images/emailbg.jpg" width="100%" style="max-width: 100%; height: auto; display: block;" alt="Email Header">
              </td>
            </tr>

            <!-- Space for Site Name -->
            <tr>
              <td style="text-align: center; padding: 15px 0;">
                <h1 style="color: #6576ff; font-size: 20px; font-weight: 600; margin: 0;">
                  {{ ucwords(config('app.name')) }}
                </h1>
              </td>
            </tr>
          </table>

          <!-- Main content wrapper -->
          <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
            <tr>
              <td style="padding: 30px;">
                <h2 style="font-size: 18px; color: #6576ff; font-weight: 600; margin: 0 0 15px; text-align: center;">
                  {{ $body["title"] }}
                </h2>
                <p style="margin-bottom: 10px;">Hi {{ $body['name'] }},</p>
                <p style="margin-bottom: 20px;">{!! $body["message"] !!}</p>

                <p style="margin: 0; font-size: 13px; line-height: 22px; color:#9ea8bb;">
                  This is an automatically generated email. Please do not reply. If you face any issues, contact us at {{ config('app.Admin_email') }}.
                </p>
              </td>
            </tr>
          </table>

          <!-- Footer -->
          <table style="width:100%;max-width:620px;margin:0 auto;">
            <tr>
              <td style="text-align: center; padding:25px 20px 0;">
                <p style="font-size: 13px;">
                  Copyright © {{ date('Y') }} {{ ucwords(config('app.name')) }}. All rights reserved.
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
