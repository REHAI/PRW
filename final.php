<?php
// إستقبال البيانات القادمة من الحقول في صفحة Alula.php
//source https://www.geekgenes.com/2018/02/php-2/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST["uremail"];
}

// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myform";

// إنشاء الإتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);
// إختبار الإتصال
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mytable (uremail)
VALUES ('$email')";

if (mysqli_query($conn, $sql)) {
echo "تم الأشتراك";
header("Location: Alula.php");
  die();
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
