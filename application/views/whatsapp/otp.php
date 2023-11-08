<!DOCTYPE html>
<html>

<head>
    <title>Kirim OTP</title>
</head>

<body>
    <h2>Kirim OTP ke WhatsApp</h2>
    <form action="<?php echo base_url('otp/send_otp'); ?>" method="post">
        <label for="phone_number">Nomor Telepon:</label>
        <input type="text" name="phone_number" required>
        <input type="submit" value="Kirim OTP">
    </form>
</body>

</html>