<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بنا</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            direction: rtl;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"], input[type="email"], textarea, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .success-message {
            color: green;
            text-align: center;
        }
        .error-message {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>اتصل بنا</h1>

        <form method="POST">
            <label for="name">الاسم:</label>
            <input type="text" id="name" name="name" placeholder="أدخل اسمك" required>

            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required>

            <label for="message">الرسالة:</label>
            <textarea id="message" name="message" rows="5" placeholder="أدخل رسالتك" required></textarea>

            <input type="submit" name="send" value="إرسال">
        </form>

        <?php
        if (isset($_POST['send'])) {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            $to = 'hadjerlaach30@gmail.com'; // استبدل بعنوان بريدك الإلكتروني
            $subject = 'استفسار من صفحة اتصل بنا';
            $body = "الاسم: $name\nالبريد الإلكتروني: $email\n\nالرسالة:\n$message";
            $headers = "From: $email";

            // إرسال البريد الإلكتروني
            if (mail($to, $subject, $body, $headers)) {
                echo '<p class="success-message">تم إرسال الرسالة بنجاح!</p>';
            } else {
                echo '<p class="error-message">حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة لاحقًا.</p>';
            }
        }
        ?>
    </div>

</body>
</html>
