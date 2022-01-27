<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <!--HTML-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--[if mso]>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border: 1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <a href="https://imgbb.com/"><img src="https://i.ibb.co/xLVRbx5/Logo-Name-No-Background.png" alt="Logo-Name-No-Background" border="0" style="width: 200px;display: block;margin: auto;"></a>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 0 30px;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    <td style="padding:0 0 36px 0;color:#153643;">
                                        <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">
                                            Welcome to YouShar3</h1>
                                        <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            Thank you for joining the YouShar3 family, we are glad to have you with us.
                                            We are anxious to start teaching you and helping you to
                                            navigate throw our website. We hope you can have a good time enjoying our
                                            services.
                                            <br><br>
                                            Could you please click the button below so we can activate your account:
                                        </p>
                                        <p>{{ $user_name}}</p>
                                        <form role="form" action="{{ route('confirmation')}}" method="GET">
                                            {{ csrf_field() }}
                                            <button type="submit" style="width: 138px;background-color: #81C92C;color: white;border: none;padding: 15px 32px;text-decoration: none;display: block;font-size: 16px;margin-right: auto;margin-left: auto;">Confirm</button>
                                        </form>
                                        <p style="margin:30px 0 0 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            Thanks for helping us maintain your account's security.</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;background:#81C92C;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;">
                                <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                        <p style="margin:0;font-size:14px;line-height:16px;">
                                            &copy; 2021 - YouShar3<br />
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>