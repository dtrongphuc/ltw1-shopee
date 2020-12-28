const registerForm = document.querySelector("#register-form");
const loginForm = document.querySelector("#login-form");
const forgotForm = document.querySelector("#forgot-password-form");
const successAlert = document.querySelector(".auth-alert__success");
const errorAlert = document.querySelector(".auth-alert__error");
registerForm &&
    registerForm.addEventListener("submit", async e => {
        e.preventDefault();
        resetNotify();

        let formData = new FormData(registerForm);
        const registerData = {
            email: formData.get("email"),
            password: formData.get("password"),
            r_password: formData.get("r_password")
        };

        try {
            const response = await axios.post("/register", registerData);
            if (response.status === 200) {
                successAlert.style.display = "block";
            }
        } catch (error) {
            let messageObj = error?.response?.data?.data;
            let fields = Object.keys(messageObj);
            fields.forEach(field => {
                document.querySelector("#" + field).classList.add("is-invalid");
                document.querySelector(
                    `#${field} + .invalid-feedback`
                ).innerHTML = messageObj[field];
            });
        }
    });

loginForm &&
    loginForm.addEventListener("submit", async e => {
        e.preventDefault();
        resetNotify();

        let formData = new FormData(loginForm);
        const loginData = {
            email: formData.get("email"),
            password: formData.get("password")
        };

        try {
            const response = await axios.post("login", loginData);
            console.log(response);
            if (response.status === 200) {
                window.location.href = "/";
            }
        } catch (error) {
            if (error.response.status === 401) {
                errorAlert.innerHTML = "Tài khoản chưa được kích hoạt";
                errorAlert.style.display = "block";
                return;
            }

            let messageObj = error?.response?.data?.data;
            if (messageObj.error) {
                errorAlert.innerHTML =
                    "Tài khoản hoặc mật khẩu không chính xác";
                errorAlert.style.display = "block";
                return;
            }

            let fields = Object.keys(messageObj);
            fields.forEach(field => {
                document.querySelector("#" + field).classList.add("is-invalid");
                document.querySelector(
                    `#${field} + .invalid-feedback`
                ).innerHTML = messageObj[field];
            });
        }
    });

forgotForm &&
    forgotForm.addEventListener("submit", async e => {
        e.preventDefault();
        resetNotify();

        let formData = new FormData(forgotForm);
        const forgotData = {
            email: formData.get("email")
        };

        try {
            const response = await axios.post("forgot-password", forgotData);
            if (response.status === 200) {
                successAlert.style.display = "block";
            }
        } catch (error) {
            let messageObj = error?.response?.data?.data;
            if (messageObj.error) {
                errorAlert.innerHTML = messageObj.error;
                errorAlert.style.display = "block";
                return;
            }

            document.querySelector("#email").classList.add("is-invalid");
            document.querySelector(`#email + .invalid-feedback`).innerHTML =
                messageObj?.email;
        }
    });

const resetNotify = () => {
    if (successAlert) {
        successAlert.style.display = "none";
    }
    if (errorAlert) {
        errorAlert.style.display = "none";
    }

    document.querySelectorAll(".invalid-feedback").forEach(element => {
        element.innerHTML = "";
    });

    document.querySelectorAll(".is-invalid").forEach(element => {
        element.classList.remove("is-invalid");
    });
};
