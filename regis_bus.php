<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ลงทะเบียนผู้ใช้งาน</title>
</head>
<body>
	<center><img src="img/DLT.png" width=200></center>
	<center>
		<h1><center>ลงทะเบียนผู้ใช้งาน</center></h1>
	<form method="post" action="#">
		<div>ชื่อผู้ใช้ระบบ : <input type="text" name="username"></div>
		<div>รหัสผ่าน : <input type="text" name="password"></div>
		<div>ชื่อ - นามสกุล : <input type="text" name="fullname"></div>
		<div>เลขบัตรประชาชน : <input type="text" name="subject" required></div>
		<div>เบอร์โทรศัพท์ : <input type="text" name="tel"><br></div>
		<div><br><input type="submit" value="สมัคร"></div>
	</form>
	</center>
</body>

</html>