<?php
session_start();
session_destroy(); // ลบ session ทั้งหมด
header("location: login.php"); // redirect ไปยังหน้า login.php