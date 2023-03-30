<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Đăng nhập</title>
</head>

<?php
    if (isset($_POST['submit'])) {
        $uname     = $_POST['uname'];
        $upassword = $_POST['upassword'];

        $connect = new mysqli("localhost", "root", "", "users");
        $check_stmt = "SELECT * FROM user_accounts WHERE uname = '".$uname."' AND upassword = '".$upassword."'";
    
        $is_valid = mysqli_fetch_array(mysqli_query($connect, $check_stmt));

        $_POST['logged_in'] = $is_valid;

        if (isset($is_valid) && $is_valid) {
            echo '<script type="text/JavaScript">
                        location.href = "./index.php";
                  </script>';
        } else {
            $notification = "Đăng nhập thất bại.";
        }
    }
?>

<body>
    <div id="wrapper">
        <form action="./login.php" method="POST">
            <h3>Đăng Nhập</h3>

            <div style="font-size: 13px; color: red; padding-bottom: 10px;">
                <?php
                    if (isset($notification)) {
                        echo '<sup>', $notification, '</sup>';
                    }
                ?>
            </div>

            <div class="form-components">
                <input type="text" name="uname" required>
                <label for="uname">Username</label>
            </div>

            <div class="form-components">
                <input type="password" name="upassword" required>
                <label for="upassword">Mật khẩu</label>
            </div>
            
            <input type="submit" value="Đăng Nhập" name="submit" id="btn-login">
        </form>
    </div>
</body>
</html>