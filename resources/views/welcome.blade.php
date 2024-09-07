<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send SMS</title>
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<form method="GET" action="/send-sms">
    @csrf
    <label for="phone_number">Phone Number:</label>
    <input type="text" id="phone_number" name="phone_number" required placeholder="+923013675277">
    <button type="submit">Send SMS</button>
</form>
</body>
</html>
