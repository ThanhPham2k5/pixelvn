// kiểm tra định dạng email
let email = document.querySelector("#email");
let warning = document.querySelector(".warning");
let warn_text = document.querySelector(".warn_text");

email.addEventListener("change", () => {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let value = email.value.trim();

    if (value === "") {
        email.style.outlineColor = "#d93b4d";
        warn_text.textContent = "Bắt buộc";
        warning.classList.remove("hidden"); // hiện cảnh báo
        email.classList.add("wrong");
    } else if (!regex.test(value)) {
        email.style.outlineColor = "#d93b4d";
        warn_text.textContent = "Email không hợp lệ";
        warning.classList.remove("hidden"); // hiện cảnh báo
        email.classList.add("wrong");
    } else {
        email.style.outlineColor = "green"; // ví dụ hợp lệ thì viền xanh
        warning.classList.add("hidden");    // ẩn cảnh báo
        email.classList.remove("wrong");
    }
});