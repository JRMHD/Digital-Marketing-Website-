<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Consultation Booking</title>
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

        .header p {
            color: rgba(255, 255, 255, 0.9);
            margin: 10px 0 0;
            font-size: 16px;
            position: relative;
        }

        .content {
            padding: 30px;
            background: white;
        }

        .field {
            margin-bottom: 24px;
            background: rgba(0, 47, 108, 0.03);
            border-radius: 16px;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .field:hover {
            background: rgba(0, 47, 108, 0.05);
            transform: translateY(-2px);
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
            font-size: 16px;
            background: white;
            padding: 12px 16px;
            border-radius: 12px;
            border: 1px solid rgba(0, 47, 108, 0.1);
        }

        .datetime-group {
            display: flex;
            gap: 20px;
            margin-bottom: 24px;
        }

        .datetime-field {
            flex: 1;
            background: rgba(0, 47, 108, 0.03);
            border-radius: 16px;
            padding: 20px;
        }

        .message-box {
            background: linear-gradient(to right, #fff, #fff);
            border-radius: 16px;
            padding: 24px;
            margin-top: 20px;
            border: 1px solid rgba(255, 193, 7, 0.3);
            position: relative;
        }

        .message-box::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(to bottom, #FFC107, #ffdb4d);
            border-radius: 4px 0 0 4px;
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

        .highlight {
            color: #002F6C;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>New Consultation Booked!</h1>
            <p>Hey Sheila, you have a new consultation request</p>
        </div>

        <div class="content">
            <div class="field">
                <span class="label">Client Name</span>
                <div class="value">{{ $consultation->name }}</div>
            </div>

            <div class="field">
                <span class="label">Email Address</span>
                <div class="value">{{ $consultation->email }}</div>
            </div>

            <div class="field">
                <span class="label">Phone Number</span>
                <div class="value">{{ $consultation->phone }}</div>
            </div>

            <div class="datetime-group">
                <div class="datetime-field">
                    <span class="label">Date</span>
                    <div class="value">{{ $consultation->consultation_date }}</div>
                </div>

                <div class="datetime-field">
                    <span class="label">Time</span>
                    <div class="value">{{ $consultation->consultation_time }}</div>
                </div>
            </div>

            <div class="message-box">
                <span class="label">Additional Notes</span>
                <div class="value" style="border: none; background: transparent; padding: 0;">
                    {{ $consultation->message }}
                </div>
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
