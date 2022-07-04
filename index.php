<?php
include './config.php';
$str_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

$name = $phone = $email = $token = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["phone"]);
	$email = test_input($_POST["email"]);
	$phone = test_input($_POST["phone"]);
	$token = test_input($_POST["token"]);


	$check_insert = mysqli_query($connect, "INSERT INTO `api_token`(`name`, `phone`, `email`, `token`) VALUES ('$name','$phone','$email','$token')");
	if ($check_insert) {
		echo ('<script>alert("Nhập thành công")</script>');
	} else {
		echo ('<script>alert("Thất bại")</script>');
	}
}
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

<form action="" method="POST">
    Nhập tên:
</form>
<form action="" method="POST">
    <input type="text" name="name" required><br><br>
    Nhập sdt:
    <input type="text" name="phone" required><br><br>
    Nhập email:
    <input type="email" name="email" required><br><br>
    Token:
    <input type="text" name="token" value="<?php echo 'CCYA' . substr(str_shuffle($str_chars), 0, 15); ?>" readonly><br><br>
    <button type="submit">Tạo token</button>
</form>