const registerForm = document.querySelector("#register-form");
const loginForm = document.querySelector("#login-form");
const successAlert = document.querySelector(".auth-alert__success");
const errorAlert = document.querySelector(".auth-alert__error");
registerForm &&
    registerForm.addEventListener("submit", async e => {
        e.preventDefault();
        successAlert.style.display = "none";
        errorAlert.style.display = "none";

        let formData = new FormData(registerForm);
        const registerData = {
            username: formData.get("username"),
            email: formData.get("email"),
            password: formData.get("password"),
            r_password: formData.get("r_password")
        };

        try {
            const response = await axios.post("api/register", registerData);
            if (response.status === 200) {
                successAlert.style.display = "block";
            }
        } catch (error) {
            let messageObj = error?.response?.data?.data;
            let fields = Object.keys(messageObj);
            fields.forEach(field => {
                document.querySelector("#" + field).classList.add("is-invalid");
            });
        }
    });

loginForm &&
    loginForm.addEventListener("submit", async e => {
        e.preventDefault();
        let formData = new FormData(loginForm);
        const loginData = {
            email: formData.get("email"),
            password: formData.get("password")
        };

        try {
            const response = await axios.post("api/login", loginData);
            if (response.status === 200) {
                // window.location.href = "/";
                console.log(response);
            }
        } catch (error) {
            console.log(error);
        }
    });
