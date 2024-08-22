<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>البحث عن المفقود</title>
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
        input[type="text"], input[type="submit"] {
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
        .result {
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>البحث عن معلومات استمارة</h1>

        <form method="POST">
            <label for="full-name">الاسم الكامل:</label>
            <input type="text" id="full-name" name="full-name" placeholder="أدخل الاسم الكامل" required>

            <input type="submit" name="search" value="بحث">
        </form>

        <?php
        if (isset($_POST['search'])) {
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'mpersons';

            $conn = mysqli_connect($host, $user, $pass, $db);

            if (!$conn) {
                die('فشل الاتصال بقاعدة البيانات: ' . mysqli_connect_error());
            }

            $full_name = mysqli_real_escape_string($conn, $_POST['full-name']);

            $query = "SELECT * FROM MP WHERE full_name='$full_name'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="result">';
                    if ($row['photo']) {
                        echo '<img src="' . $row['photo'] . '" alt="صورة المفقود" style="max-width: 200px; border-radius: 4px;">';
                    }
                    echo '<p><strong>الاسم الكامل:</strong> ' . htmlspecialchars($row['full_name']) . '</p>';
                    echo '<p><strong>تاريخ الميلاد:</strong> ' . htmlspecialchars($row['dob']) . '</p>';
                    echo '<p><strong>الجنس:</strong> ' . htmlspecialchars($row['gender']) . '</p>';
                    echo '<p><strong>آخر مكان تم رؤيته فيه:</strong> ' . htmlspecialchars($row['last_seen']) . '</p>';
                    echo '<p><strong>تاريخ الاختفاء:</strong> ' . htmlspecialchars($row['missing_date']) . '</p>';
                    echo '<p><strong>وقت الاختفاء:</strong> ' . htmlspecialchars($row['missing_time']) . '</p>';
                    echo '<p><strong>ملامح أو علامات مميزة:</strong> ' . htmlspecialchars($row['features']) . '</p>';
                    echo '<p><strong>اسم مقدم الاستمارة:</strong> ' . htmlspecialchars($row['contact_name']) . '</p>';
                    echo '<p><strong>العلاقة بالمفقود:</strong> ' . htmlspecialchars($row['relationship']) . '</p>';
                    echo '<p><strong>رقم الهاتف:</strong> ' . htmlspecialchars($row['phone']) . '</p>';
                    echo '<p><strong>البريد الإلكتروني:</strong> ' . htmlspecialchars($row['email']) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>لا توجد معلومات لهذا الاسم.</p>';
            }

            mysqli_close($conn);
        }
        ?>
    </div>

</body>
</html>
