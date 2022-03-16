<?php
session_start(); // เปิดใช้งาน session
if (isset($_SESSION['user_login'])) { // ถ้าเข้าระบบอยู่
    header("location: index.php"); // redirect ไปยังหน้า index.php
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="register-box bg-light p-5 rounded mt-3">
            <h1>ลงทะเบียน</h1>
            <form method="post" action="register_action.php">
                <div class="mb-3">
                    <label for="u_fullname" class="form-label">ชื่อ - สกุล</label>
                    <input type="text" class="form-control" id="u_fullname" name="u_fullname" placeholder="ชื่อ - สกุล" required>
                </div>
                <div class="mb-3">
                    <label for="u_username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="u_username" name="u_username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label for="u_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="u_password" name="u_password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label for="u_level" class="form-label">Level</label>
                    <select id="u_level" name="u_level" class="form-select">
                        <option value="user">ผู้ใช้ทั่วไป</option>
                        <option value="administrator">ผู้ดูแลระบบ</option>
                    </select>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">ลงทะเบียน</button>
                <a href="login.php" class="w-100 btn btn-lg btn-danger mt-3">ยกเลิก</a>
            </form>
        </div>
    </div>
</body>

</html>