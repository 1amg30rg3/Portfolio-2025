<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GGAVASHELI.COM</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f4f4f4;">
        <div style="background-color: #fff; padding: 30px; border-radius: 5px;">
            <h2 style="color: #0099ff; margin-top: 0;">GGAVASHELI.COM</h2>

            <p><strong>From:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Subject:</strong> {{ $data['subject'] }}</p>

            <hr style="border: none; border-top: 1px solid #ddd; margin: 20px 0;">

            <p><strong>Message:</strong></p>
            <p style="background-color: #f9f9f9; padding: 15px; border-left: 4px solid #0099ff;">
                {{ $data['message'] }}
            </p>
        </div>
    </div>
</body>
</html>
