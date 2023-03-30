<!DOCTYPE html>
<head>
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<script>
    var logged_in = Request.QueryString("name");
    if (logged_in == true)
    var check = <?php
                    if (isset($_SESSION['loggedIn'])) echo $_SESSION['loggedIn']; 
                ?>;
    if (check != null) {
        document.getElementById("header").innerHTML = "Đăng nhập thành công. Đây là trang chủ.";
    } else {
        document.getElementById("header").innerHTML = "Đăng nhập không thành công";
    }
</script>

<body style="max-width: max-content; margin: auto;">
    <h1 name="header" style="font-size: large;"></h1>
</body>