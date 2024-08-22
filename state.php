<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض المفقودين في الولاية</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            direction: rtl;
        }
        .container {
            max-width: 800px;
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
        .missing-person {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .missing-person img {
            max-width: 200px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>المفقودين في الولاية</h1>

        <?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'mpersons';

        $conn = mysqli_connect($host, $user, $pass, $db);

        if (!$conn) {
            die('فشل الاتصال بقاعدة البيانات: ' . mysqli_connect_error());
        }

        $wilaya = isset($_GET['wilaya']) ? mysqli_real_escape_string($conn, $_GET['wilaya']) : '';

        $query = "SELECT * FROM MP WHERE wilaya='$wilaya'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="missing-person">';
                if ($row['photo']) {
                    echo '<img src="' . $row['photo'] . '" alt="صورة المفقود">';
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
            echo '<p>لا توجد بيانات لعرضها.</p>';
        }

        mysqli_close($conn);
        ?>
    </div>

</body>
</html>
