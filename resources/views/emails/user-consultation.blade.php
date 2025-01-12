<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Confirmation</title>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f8fafc;
            color: #1a1a1a;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.95) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 47, 108, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #002F6C 0%, #001a3d 100%);
            padding: 40px 30px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(255, 193, 7, 0.2), transparent 60%);
        }

        .header h1 {
            margin: 0;
            color: white;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -0.5px;
            position: relative;
        }

        .welcome-text {
            color: #FFC107;
            font-size: 18px;
            margin: 15px 0 0;
            position: relative;
        }

        .content {
            padding: 40px 30px;
            background: white;
            text-align: center;
        }

        .thank-you {
            font-size: 20px;
            color: #002F6C;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .appointment-card {
            background: rgba(0, 47, 108, 0.03);
            border-radius: 20px;
            padding: 30px;
            margin: 20px 0;
            border: 1px solid rgba(0, 47, 108, 0.08);
            transition: all 0.3s ease;
        }

        .appointment-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 47, 108, 0.08);
        }

        .datetime-group {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin: 20px 0;
        }

        .datetime-item {
            background: white;
            padding: 15px 25px;
            border-radius: 12px;
            border: 1px solid rgba(0, 47, 108, 0.1);
        }

        .label {
            color: #002F6C;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: block;
        }

        .value {
            color: #333;
            font-size: 18px;
            font-weight: 600;
        }

        .message {
            font-size: 16px;
            color: #666;
            margin: 30px 0;
            line-height: 1.8;
        }

        .footer {
            text-align: center;
            padding: 30px;
            background: rgba(0, 47, 108, 0.02);
            border-top: 1px solid rgba(0, 47, 108, 0.05);
        }

        .footer p {
            color: #666;
            font-size: 14px;
            margin: 5px 0;
        }

        .footer .logo-text {
            color: #002F6C;
            font-weight: 700;
            font-size: 16px;
            letter-spacing: -0.5px;
        }

        .accent-dot {
            display: inline-block;
            width: 6px;
            height: 6px;
            background: #FFC107;
            border-radius: 50%;
            margin: 0 8px;
            vertical-align: middle;
        }

        .signature {
            margin-top: 30px;
            color: #002F6C;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Welcome, {{ $consultation->name }}!</h1>
            <p class="welcome-text">Your consultation is confirmed</p>
        </div>

        <div class="content">
            <p class="thank-you">Thank you for booking a consultation with us</p>

            <div class="appointment-card">
                <div class="datetime-group">
                    <div class="datetime-item">
                        <span class="label">Date</span>
                        <div class="value">{{ $consultation->consultation_date }}</div>
                    </div>

                    <div class="datetime-item">
                        <span class="label">Time</span>
                        <div class="value">{{ $consultation->consultation_time }}</div>
                    </div>
                </div>
            </div>

            <p class="message">
                We're excited to connect with you and discuss your needs. If you have any questions before our meeting,
                please don't hesitate to reply to this email.
            </p>

            <div class="signature">
                Best regards,<br>
                {{ config('app.name') }} Team
            </div>
        </div>

        <div class="footer">
            <p class="logo-text">
                {{ config('app.name') }}
                <span class="accent-dot"></span>
                {{ date('Y') }}
            </p>
            <p>Shaping Tomorrow’s Digital Landscape Today</p>
        </div>
    </div>
</body>

</html>
