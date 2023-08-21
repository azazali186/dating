<!DOCTYPE html>
<html>

<head>
    <title>XmakeLove</title>
</head>

<body>

    <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0" align="center"
        cellpadding="0" cellspacing="0">
        <tr>
            <td style="height:80px;">&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align:center;">
                <a href="#" title="logo" target="_blank">
                    <img width="150" src="{{ URL::to('public/website/assets/images/logo/logo.png') }}" title="logo" alt="logo">
                </a>
            </td>
        </tr>
        <tr>
            <td style="height:20px;">&nbsp;</td>
        </tr>
        <tr>
            <td>
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                    style="max-width:670px;background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                    {{-- <tr>
                    <td style="height:40px;">&nbsp;</td>
                </tr> --}}
                    <tr>
                        <div
                            style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
                            <div style="margin:0px auto;width:80%;">
                                <div style="border-bottom:1px solid #eee">
                                    <a href=""
                                        style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">XmakeLove</a>
                                </div>
                                <p style="font-size:1.1em">Hi,</p>
                                <p>Thank you for choosing XmakeLove. Use the following OTP to complete your add email
                                    procedures. </p>
                                <p> OTP is valid for 20 minutes</p>
                                <h2
                                    style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">
                                    {{ $mailData['textMessage'] ?? '' }}</h2>
                                <p style="font-size:0.9em;">Regards,<br />XmakeLove</p>
                                <hr style="border:none;border-top:1px solid #eee" />
                                <div
                                    style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
                                    <p>XmakeLove</p>
                                    <p>1600 Amphitheatre Parkway</p>
                                    <p>Cambodia</p>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <td style="height:70px; text-align: center;">&nbsp;<p
                                style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">
                                &copy; <strong>www.xmakelove.com</strong></p>
                        </td>
                    </tr>
                </table>
            </td>
        <tr>
            <td style="height:30px;">&nbsp;</td>
        </tr>
        {{-- <tr>
        <td style="height:80px;">&nbsp;</td>
    </tr> --}}
    </table>


    {{-- <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>

    <p>  {{ $mailData['textMessage'] }} </p>

    <p>Thank you</p> --}}
</body>

</html>
