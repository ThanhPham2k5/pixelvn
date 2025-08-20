// bộ cờ kiểm tra
let email_flag = false;
let password_flag = false;
let agree_flag = false;

// kiểm tra định dạng email
let email = document.querySelector("#email");
let warning_email = document.querySelector(".warning_email");
let warn_email_text = document.querySelector(".warn_email_text");

email.addEventListener("change", () => {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let value = email.value.trim();

    if (value === "") {
        email.style.outlineColor = "#d93b4d";
        warn_email_text.textContent = "Bắt buộc";
        warning_email.classList.remove("hidden"); // hiện cảnh báo
        email.classList.add("wrong");
        email_flag = false;
    } else if (!regex.test(value)) {
        email.style.outlineColor = "#d93b4d";
        warn_email_text.textContent = "Email không hợp lệ";
        warning_email.classList.remove("hidden"); // hiện cảnh báo
        email.classList.add("wrong");
        email_flag = false;
    } else {
        email.style.outlineColor = "green"; // ví dụ hợp lệ thì viền xanh
        warning_email.classList.add("hidden");    // ẩn cảnh báo
        email.classList.remove("wrong");
        email_flag = true;
    }
});


// kiểm tra định dang password
let password = document.querySelector("#password");
let warning_password = document.querySelector(".warning_password");
let warn_password_text = document.querySelector(".warn_password_text");

password.addEventListener("change", () => {
    const regex_length = /\S{7,}$/;
    const regex_one_char = /^(?=.*[A-Za-z])/;
    const regex_one_digit = /(?=.*\d)/;
    let value = password.value.trim();

    if (value === "") {
        password.style.outlineColor = "#d93b4d";
        warn_password_text.textContent = "Bắt buộc";
        warning_password.classList.remove("hidden"); // hiện cảnh báo
        password.classList.add("wrong");
        password_flag = false;
    } else if (!regex_length.test(value)) {
        password.style.outlineColor = "#d93b4d";
        warn_password_text.textContent = "Quá ngắn";
        warning_password.classList.remove("hidden"); // hiện cảnh báo
        password.classList.add("wrong");
        password_flag = false;
    } else if (!regex_one_char.test(value) || !regex_one_digit.test(value)) {
        password.style.outlineColor = "#d93b4d";
        warn_password_text.textContent = "Định dạng không hợp lệ";
        warning_password.classList.remove("hidden"); // hiện cảnh báo
        password.classList.add("wrong");
        password_flag = false;
    } else {
        password.style.outlineColor = "green"; // ví dụ hợp lệ thì viền xanh
        warning_password.classList.add("hidden");    // ẩn cảnh báo
        password.classList.remove("wrong");
        password_flag = true;
    }
});

// chức năng hiển thị password
let show = document.querySelector(".show_password");
let hide = document.querySelector(".hide_password");
show.addEventListener("click", () => {
    show.classList.toggle("hidden");
    hide.classList.toggle("hidden");
    password.type = "text";
});
hide.addEventListener("click", () => {
    show.classList.toggle("hidden");
    hide.classList.toggle("hidden");
    password.type = "password";
});

// chức năng xem info
let info_img = document.querySelector(".info_img");
let info_text = document.querySelector(".info_text");
info_img.addEventListener("click", () => {
    info_text.classList.toggle("hidden");
});

// chức năng xem lí do
let why = document.querySelector(".why");
let input_img = document.querySelector(".input_img");
why.addEventListener("click", () => {
    why.classList.toggle("why_active");
    why.classList.toggle("why_inactive");
});

// chức năng kiểm tra đồng ý
let agree = document.getElementById("agree");
let warning_check = document.querySelector(".warning_check");
agree.addEventListener("click", () => {
    if(agree.checked) {
        warning_check.classList.add("hidden");
        agree_flag = true;
    } else {
        warning_check.classList.remove("hidden");
        agree_flag = false;
    }
});

// chức năng cho phép tiếp tục
let next = document.querySelector(".next");
function checked(email_flag, password_flag, agree_flag) {
    if(email_flag && password_flag && agree_flag) {
        next.classList.remove("inactive");
        next.classList.add("active");
        return true;
    } else {
        next.classList.remove("active");
        next.classList.add("inactive");
    }
    return false;
}
email.addEventListener("change", () => {
    checked(email_flag, password_flag, agree_flag);
});
password.addEventListener("change", () => {
    checked(email_flag, password_flag, agree_flag);
});
agree.addEventListener("change", () => {
    checked(email_flag, password_flag, agree_flag);
});

// ngăn ko cho submit
let form = document.querySelector(".frame")
form.addEventListener("submit", (e) => {
    if(!checked(email_flag, password_flag, agree_flag)) {
        e.preventDefault();
    }
});