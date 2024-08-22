<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>استمارة تقديم المفقود</title>
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
        input[type="text"], input[type="date"], input[type="time"], input[type="email"], select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="file"] {
            margin-bottom: 15px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>استمارة تقديم المفقود</h1>

        <form id="missing-person-form" method="POST" enctype="multipart/form-data">
            <h2>معلومات المفقود:</h2>

            <label for="full-name">الاسم الكامل:</label>
            <input type="text" id="full-name" name="full-name" placeholder="أدخل الاسم الكامل" required>

            <label for="dob">تاريخ الميلاد:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="gender">الجنس:</label>
            <select id="gender" name="gender" required>
                <option value="">اختر الجنس</option>
                <option value="male">ذكر</option>
                <option value="female">أنثى</option>
            </select>

            <label for="photo">الصورة (اختياري):</label>
            <input type="file" id="photo" name="photo" accept="image/*">

            <label for="last-seen">آخر مكان تم رؤيته فيه:</label>
            <input type="text" id="last-seen" name="last-seen" placeholder="أدخل آخر مكان تم رؤيته فيه" required>

            <label for="wilaya">الولاية:</label>
            <select id="wilaya" name="wilaya" required>
                <option value="">اختر الولاية</option>
                <option value="Adrar">أدرار</option>
<option value="Chlef">الشلف</option>
<option value="Laghouat">الأغواط</option>
<option value="Oum El Bouaghi">أم البواقي</option>
<option value="Batna">باتنة</option>
<option value="Béjaïa">بجاية</option>
<option value="Biskra">بسكرة</option>
<option value="Béchar">بشار</option>
<option value="Blida">البليدة</option>
<option value="Bouira">البويرة</option>
<option value="Tamanrasset">تمنراست</option>
<option value="Tébessa">تبسة</option>
<option value="Tlemcen">تلمسان</option>
<option value="Tiaret">تيارت</option>
<option value="Tizi Ouzou">تيزي وزو</option>
<option value="Algiers">الجزائر</option>
<option value="Djelfa">الجلفة</option>
<option value="Jijel">جيجل</option>
<option value="Sétif">سطيف</option>
<option value="Saïda">سعيدة</option>
<option value="Skikda">سكيكدة</option>
<option value="Sidi Bel Abbès">سيدي بلعباس</option>
<option value="Annaba">عنابة</option>
<option value="Guelma">قالمة</option>
<option value="Constantine">قسنطينة</option>
<option value="Médéa">المدية</option>
<option value="Mostaganem">مستغانم</option>
<option value="M'Sila">المسيلة</option>
<option value="Mascara">معسكر</option>
<option value="Ouargla">ورقلة</option>
<option value="Oran">وهران</option>
<option value="El Bayadh">البيض</option>
<option value="Illizi">إليزي</option>
<option value="Bordj Bou Arréridj">برج بوعريريج</option>
<option value="Boumerdès">بومرداس</option>
<option value="El Tarf">الطارف</option>
<option value="Tindouf">تندوف</option>
<option value="Tissemsilt">تيسمسيلت</option>
<option value="El Oued">الوادي</option>
<option value="Khenchela">خنشلة</option>
<option value="Souk Ahras">سوق أهراس</option>
<option value="Tipaza">تيبازة</option>
<option value="Mila">ميلة</option>
<option value="Aïn Defla">عين الدفلى</option>
<option value="Naâma">النعامة</option>
<option value="Aïn Témouchent">عين تموشنت</option>
<option value="Ghardaïa">غرداية</option>
<option value="Relizane">غليزان</option>
<option value="Timimoun">تيميمون</option>
<option value="Bordj Badji Mokhtar">برج باجي مختار</option>
<option value="Ouled Djellal">أولاد جلال</option>
<option value="Béni Abbès">بني عباس</option>
<option value="In Salah">عين صالح</option>
<option value="In Guezzam">عين قزام</option>
<option value="Touggourt">تقرت</option>
<option value="Djanet">جانت</option>
<option value="El M'Ghair">المغير</option>
<option value="El Meniaa">المنيعة</option>

            </select>

            <label for="missing-date">التاريخ المتوقع لاختفاءه:</label>
            <input type="date" id="missing-date" name="missing-date" required>

            <label for="missing-time">الوقت المتوقع لاختفاءه:</label>
            <input type="time" id="missing-time" name="missing-time">

            <label for="features">ملامح أو علامات مميزة:</label>
            <textarea id="features" name="features" placeholder="أدخل أي علامات مميزة كالنُدوب أو الوشم"></textarea>

            <h2>معلومات التواصل:</h2>

            <label for="contact-name">اسم الشخص الذي يقدم الاستمارة:</label>
            <input type="text" id="contact-name" name="contact-name" placeholder="أدخل اسمك" required>

            <label for="relationship">العلاقة بالمفقود:</label>
            <input type="text" id="relationship" name="relationship" placeholder="أدخل علاقتك بالمفقود" required>

            <label for="phone">رقم الهاتف:</label>
            <input type="text" id="phone" name="phone" placeholder="أدخل رقم هاتفك" required>

            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required>

            <input type="submit" name="send" value="إرسال">
        </form>
    </div>

    <?php
    if (isset($_POST['send'])) {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'mpersons';

        $conn = mysqli_connect($host, $user, $pass, $db);

        if (!$conn) {
            die('فشل الاتصال بقاعدة البيانات: ' . mysqli_connect_error());
        }

        $full_name = mysqli_real_escape_string($conn, $_POST['full-name']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $last_seen = mysqli_real_escape_string($conn, $_POST['last-seen']);
        $wilaya = mysqli_real_escape_string($conn, $_POST['wilaya']);
        $missing_date = mysqli_real_escape_string($conn, $_POST['missing-date']);
        $missing_time = mysqli_real_escape_string($conn, $_POST['missing-time']);
        $features = mysqli_real_escape_string($conn, $_POST['features']);
        $contact_name = mysqli_real_escape_string($conn, $_POST['contact-name']);
        $relationship = mysqli_real_escape_string($conn, $_POST['relationship']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        // معالجة الصورة
        $photo = '';
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
            // تحقق مما إذا كان دليل uploads موجودًا
            if (!file_exists('uploads')) {
                mkdir('uploads', 0777, true); // إنشاء الدليل إذا لم يكن موجودًا
            }

            $photo = 'uploads/' . basename($_FILES['photo']['name']);
            move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
        }

        // التحقق من وجود إدخال بنفس الاسم
        $checkQuery = "SELECT * FROM MP WHERE full_name='$full_name'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            echo 'هذا الاسم موجود بالفعل في قاعدة البيانات.';
        } else {
            $insert = "INSERT INTO MP (full_name, dob, gender, photo, last_seen, wilaya, missing_date, missing_time, features, contact_name, relationship, phone, email) 
                       VALUES ('$full_name', '$dob', '$gender', '$photo', '$last_seen', '$wilaya', '$missing_date', '$missing_time', '$features', '$contact_name', '$relationship', '$phone', '$email')";

            $q = mysqli_query($conn, $insert);
            if ($q) {
                echo 'تمت إضافة المعلومات بنجاح';
            } else {
                echo 'حدث خطأ أثناء إضافة المعلومات: ' . mysqli_error($conn);
            }
        }

        // إغلاق الاتصال بقاعدة البيانات
        mysqli_close($conn);
    }
    ?>
</body>
</html>
