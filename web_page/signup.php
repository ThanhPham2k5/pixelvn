<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css chung -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- css riêng -->
    <link rel="stylesheet" href="../assets/css/web_page/signup.css">
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
        <form class="frame" method="GET" action="">
            <div class="header">Tạo tài khoản</div>

            <div class="email">
                <label for="email" class="email_label">Địa chỉ email</label>
                <input type="email" name="email" id="email">
                <!-- cảnh báo -->
                <div class="warning_email hidden">
                    <img src="../assets/img/web_img/warning.png" alt="cảnh báo" class="logo">
                    <div class="warn_email_text">Bắt buộc</div>
                </div>
            </div>

            <div class="password">
                <label for="password" class="password_label">Tạo mật khẩu</label>
                <!-- thanh nhập mật khẩu -->
                <div class="password_input">
                    <input type="password" name="password" id="password">
                    <img src="../assets/img/web_img/show.png" alt="xem" class="show_password">
                    <img src="../assets/img/web_img/hide.png" alt="che" class="hide_password hidden">
                    <div class="info">
                        <img src="../assets/img/web_img/info.png" alt="thông tin" class="info_img">
                        <div class="info_text hidden">
                            <div class="text_info">Mật khẩu phải có 7 ký tự trở lên, ít nhất 1 số, ít nhất 1 chữ cái và không có khoảng trắng.</div>
                        </div>
                    </div>
                </div>
                <!-- cảnh báo -->
                <div class="warning_password hidden">
                    <img src="../assets/img/web_img/warning.png" alt="cảnh báo" class="logo">
                    <div class="warn_password_text">Bắt buộc</div>
                </div>
            </div>

            <div class="why why_inactive">
                <!-- thanh ngang -->
                <div class="input">
                    <div class="input_text">Tại sao chúng tôi cần địa chỉ email của bạn</div>    
                    <img src="../assets/img/web_img/left arrow.png" alt="mũi tên" class="input_img">
                </div>
                <!-- nội dung -->
                <div class="why_text">
                    Bạn cần cung cấp email để có thể đăng nhập vào tài khoản và/hoặc đặt lại mật khẩu nếu cần.
                    <br>
                    <br>
                    Để bảo vệ quyền riêng tư, PixelVN sẽ băm địa chỉ email, nghĩa là địa chỉ này sẽ được thay đổi để không thể khôi phục lại thành dạng ban đầu hoặc sử dụng để liên hệ với bạn.
                    <br>
                    <br>
                    Khi bạn nhập địa chỉ đó để đăng nhập hoặc yêu cầu đặt lại mật khẩu, PixelVN sẽ băm địa chỉ đã nhập và so sánh với mã băm đã lưu trữ để đảm bảo thông tin khớp nhau.
                    <br>
                    <br>
                    Nếu thông tin trùng khớp, PixelVN sẽ đăng nhập hoặc gửi cho bạn liên kết để đặt lại mật khẩu.
                </div>
            </div>

            <div class="checkbox">
                <label class="check">
                    <input type="checkbox" name="agree" id="agree">
                    <div class="checkbox_custom"></div>
                    <div class="agree_text">Tôi đã đọc và đồng ý với </div>
                </label>
                <a href="http://localhost/pixelvn/" class="clause link">Điều khoản dịch vụ</a>
            </div>

            <!-- cảnh báo -->
            <div class="warning_check hidden">
                <img src="../assets/img/web_img/warn.png" alt="cảnh báo" class="warning_check_img">
                <div class="warning_check_text">Bạn phải chấp nhận điều khoản sử dụng</div>
            </div>

            <button class="next inactive">Tiếp tục</button>

            <div class="login">
                <div class="login_text">Bạn đã có tài khoản? </div>
                <a href="http://localhost/pixelvn/web_page/login.php" class="login_link link">Đăng nhập</a>
            </div>

            <div class="policy">
                <a href="http://localhost/pixelvn/" class="policy_link link">Chính sách quyền riêng tư</a>
            </div>
        </form>
    </div>

    <script src="../assets/js/web_page/signup.js"></script>
</body>
</html>