<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .contact-form { max-width: 400px; margin: auto; }
        label { display: block; margin-top: 15px; }
        input, textarea { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px 20px; }
    </style>
</head>
<body>
    <h2>Contact Us</h2>
    <form class="contact-form" method="POST" action="#">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send</button>
    </form>
    <br>
    <h3> Menu Kembali </h3>
    <a href="/"> Kembali ke Halaman Utama</a>
</body>
</html>