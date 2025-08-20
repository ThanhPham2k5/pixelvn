// sự kiện bảng ngôn ngữ
let board = document.querySelector(".language_option");
document.querySelector(".global").addEventListener("click", () => {
    board.classList.toggle("hidden");
});

document.querySelector(".main").addEventListener("click", () => {
    if(!board.classList.contains("hidden")) {
        board.classList.add("hidden");
    }
});

//tích chọn ngôn ngữ
let vien = document.querySelector(".vien");
let eng = document.querySelector(".eng");

vien.addEventListener("click", () => {
    let chosen_1 = vien.children[0];
    let chosen_2 = eng.children[0];
    if(!chosen_1.classList.contains("chosen_default")) {
        chosen_1.classList.add("chosen_default");
        chosen_2.classList.remove("chosen_default");

        let support_link = document.querySelector(".support_link");
        let log_in = document.querySelector(".log_in");
        let sign_up = document.querySelector(".sign_up");

        support_link.textContent = "Hỗ trợ";
        log_in.textContent = "Đăng nhập";
        sign_up.textContent = "Đăng ký";
    }
});

eng.addEventListener("click", () => {
    let chosen_1 = eng.children[0];
    let chosen_2 = vien.children[0];
    if(!chosen_1.classList.contains("chosen_default")) {
        chosen_1.classList.add("chosen_default");
        chosen_2.classList.remove("chosen_default");

        let support_link = document.querySelector(".support_link");
        let log_in = document.querySelector(".log_in");
        let sign_up = document.querySelector(".sign_up");

        support_link.textContent = "Support";
        log_in.textContent = "Log In";
        sign_up.textContent = "Sign Up";
    }
});


//chuyển hướng đăng nhập và đăng ký
document.querySelector(".log_in").addEventListener("click", () => {
    window.location.href = "http://localhost/pixelvn/web_page/login.php";
});

document.querySelector(".sign_up").addEventListener("click", () => {
    window.location.href = "http://localhost/pixelvn/";
});