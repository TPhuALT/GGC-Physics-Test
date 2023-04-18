<!DOCTYPE html>
<head>
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<?php
    $isLogged = isset($_SESSION['loggedIn']);
?>

<script>
    var check = $isLogged;
    if (true) {
        document.getElementById("header").innerHTML = "Đăng nhập thành công. Đây là trang chủ.";
    } else {
        document.getElementById("header").innerHTML = "Đăng nhập không thành công";
    }
</script>

<body style="max-width: max-content; margin: auto;">
    <h1 name="header" style="font-size: large;"></h1>
</body>