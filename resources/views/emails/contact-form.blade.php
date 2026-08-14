<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Inquiry - NDS Security Services</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f8f5f0;
            color: #332219;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }
        .wrapper {
            width: 100%;
            background-color: #f8f5f0;
            padding: 30px 15px;
            box-sizing: border-box;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #e8dec8;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }
        .header {
            background: linear-gradient(135deg, #2a1b10 0%, #3a2618 50%, #2a1b10 100%);
            color: #ffffff;
            padding: 32px 30px;
            text-align: center;
            border-bottom: 3px solid #c08552;
        }
        .header h1 {
            margin: 0 0 8px 0;
            font-size: 22px;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        .header p {
            margin: 0;
            font-size: 13px;
            color: #e8dec8;
            font-weight: 500;
        }
        .badge {
            display: inline-block;
            background-color: rgba(192, 133, 82, 0.25);
            border: 1px solid rgba(192, 133, 82, 0.5);
            color: #f5cfab;
            font-size: 11px;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
        }
        .content {
            padding: 32px 30px;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
        }
        .info-table td {
            padding: 12px 14px;
            font-size: 13px;
            border-bottom: 1px solid #f2eadc;
        }
        .info-table tr:last-child td {
            border-bottom: none;
        }
        .label {
            font-weight: 700;
            color: #5c4436;
            width: 30%;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 0.5px;
        }
        .value {
            color: #21150e;
            font-weight: 600;
        }
        .value a {
            color: #c08552;
            text-decoration: none;
        }
        .message-box {
            background-color: #fdfbf7;
            border-left: 4px solid #c08552;
            border-radius: 8px;
            padding: 18px 20px;
            margin-top: 10px;
        }
        .message-box h3 {
            margin: 0 0 10px 0;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            color: #c08552;
            letter-spacing: 0.5px;
        }
        .message-box p {
            margin: 0;
            font-size: 14px;
            line-height: 1.6;
            color: #332219;
            white-space: pre-line;
        }
        .footer {
            background-color: #faf7f2;
            padding: 20px 30px;
            text-align: center;
            border-top: 1px solid #f0e6d6;
            font-size: 12px;
            color: #7a6557;
        }
        .footer p {
            margin: 4px 0;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <!-- Header -->
            <div class="header">
                <div class="badge">New Contact Query</div>
                <h1>NDS Security Services</h1>
                <p>Website Inquiry Received via Contact Form</p>
            </div>

            <!-- Content -->
            <div class="content">
                <table class="info-table">
                    <tr>
                        <td class="label">Sender Name:</td>
                        <td class="value">{{ $name }}</td>
                    </tr>
                    <tr>
                        <td class="label">Email Address:</td>
                        <td class="value"><a href="mailto:{{ $email }}">{{ $email }}</a></td>
                    </tr>
                    <tr>
                        <td class="label">Phone Number:</td>
                        <td class="value"><a href="tel:{{ $phone }}">{{ $phone }}</a></td>
                    </tr>
                    <tr>
                        <td class="label">Subject / Service:</td>
                        <td class="value">{{ $subject }}</td>
                    </tr>
                    <tr>
                        <td class="label">Received At:</td>
                        <td class="value">{{ now()->format('F j, Y, g:i a T') }}</td>
                    </tr>
                </table>

                <div class="message-box">
                    <h3>Query Details:</h3>
                    <p>{{ $messageContent }}</p>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer">
                <p><strong>NDS Security Services Noida</strong> • 24/7 Command Center Operations</p>
                <p>This automated message was sent from your website's contact form.</p>
            </div>
        </div>
    </div>
</body>
</html>
