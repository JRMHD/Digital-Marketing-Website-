<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Newsletter</title>
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

        .message {
            font-size: 18px;
            color: #333;
            margin: 20px 0;
            line-height: 1.8;
            padding: 30px;
            background: rgba(0, 47, 108, 0.03);
            border-radius: 20px;
        }

        .signature {
            margin-top: 30px;
            color: #002F6C;
            font-weight: 600;
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
            <h1>Welcome to Our Community! 🎉</h1>
            <p class="welcome-text">Your subscription is confirmed</p>
        </div>

        <div class="content">
            <div class="message">
                Thank you for subscribing to our newsletter! We're thrilled to have you join our community of
                forward-thinkers and innovators. Get ready for exclusive insights, updates, and digital trends delivered
                straight to your inbox.
            </div>

            <div class="signature">
                Best regards,<br>
                Ardent Digital Trends Team
            </div>
        </div>

        <div class="footer">
            <p class="logo-text">
                Ardent Digital Trends
                <span class="accent-dot"></span>
                {{ date('Y') }}
            </p>
            <p>Shaping Tomorrow’s Digital Landscape Today</p>
        </div>
    </div>
</body>

</html>
