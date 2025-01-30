<?php
$servername = "localhost";
$username = "root";  // غيّره إذا كنت تستخدم اسم مستخدم مختلف
$password = "";  // ضع كلمة مرور MySQL إذا كنت تستخدمها
$dbname = "robot_control";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['direction'])) {
    $direction = $_POST['direction'];
    $sql = "INSERT INTO directions (direction) VALUES ('$direction')";

    if ($conn->query($sql) === TRUE) {
        echo "Direction saved: " . $direction;
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
