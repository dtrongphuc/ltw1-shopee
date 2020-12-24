const registerForm = document.querySelector("#register-form");
const loginForm = document.querySelector("#login-form");
registerForm &&
    registerForm.addEventListener("submit", async e => {
        e.preventDefault();
        let formData = new FormData(registerForm);
        const registerData = {
            username: formData.get("username"),
            email: formData.get("email"),
            password: formData.get("password"),
            r_password: formData.get("r_password")
        };

        try {
            const response = await axios.post("api/register", registerData);
            if (response.status === 200)
                document.querySelector(".auth-alert__success").styles.display =
                    "block";
        } catch (error) {
            console.log(error);
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
