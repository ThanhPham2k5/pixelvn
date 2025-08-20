<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css chung -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- css riêng -->
    <link rel="stylesheet" href="../assets/css/web_page/login.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="../assets/img/web_img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="../assets/img/web_img/favicon/favicon.svg" />
    <link rel="shortcut icon" href="../assets/img/web_img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/web_img/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="../assets/img/web_img/favicon/site.webmanifest" />

    <title>Đăng nhập vào tài khoản PixelVN Games Store</title>
</head>
<body>
    <div class="background">
        <div class="frame">
            <div class="header">Đăng nhập vào PixelVN Games</div>
            <form class="login" method="GET" action="">
                <!-- khung login -->
                <div class="login_input">
                    <label for="email" class="email_label">Đăng nhập bằng e-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <!-- cảnh báo -->
                <div class="warning hidden">
                    <img src="../assets/img/web_img/warning.png" alt="cảnh báo" class="logo">
                    <div class="warn_text">Bắt buộc</div>
                </div>
                <!-- nút tiếp tục -->
                <button type="submit" class="continue">Tiếp tục</button>
            </form>
            <div class="signup">
                <div class="signup_text">Bạn là người mới?</div>
                <a href="http://localhost/pixelvn/web_page/signup.php" class="create_account link">Tạo tài khoản</a>
            </div>
            <div class="others">
                <div class="others_text">Cách đăng nhập khác</div>
                <!-- option -->
                <div class="option">
                    <!-- Google -->
                     <div class="option_frame">
                        <img src="../assets/img/web_img/google.png" alt="google" class="google option_logo">
                        <div class="option_text">Google</div>
                     </div>

                    <!-- Facebook -->
                     <div class="option_frame">
                        <img src="../assets/img/web_img/facebook.png" alt="facebook" class="facebook option_logo">
                        <div class="option_text">Facebook</div>
                     </div>
                </div>
            </div>
            <a href="http://localhost/pixelvn/" class="problems link">Bạn gặp vấn đề đăng nhập?</a>
            <a href="http://localhost/pixelvn/" class="policy link">Chính sách quyền riêng tư</a>
        </div>
    </div>

    <script src="../assets/js/web_page/login.js"></script>
</body>
</html>