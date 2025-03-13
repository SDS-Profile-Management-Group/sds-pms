document.addEventListener("DOMContentLoaded", function() {
    const loginTab = document.getElementById("loginTab");
    const registerTab = document.getElementById("registerTab");
    const loginForm = document.getElementById("loginForm");
    const registerForm = document.getElementById("registerForm");

    loginTab.addEventListener("click", () => {
        loginForm.classList.remove("hidden");
        registerForm.classList.add("hidden");
        loginTab.classList.add("text-blue-500", "border-blue-500");
        registerTab.classList.remove("text-blue-500", "border-blue-500");
        registerTab.classList.add("text-gray-500");
    });

    registerTab.addEventListener("click", () => {
        registerForm.classList.remove("hidden");
        loginForm.classList.add("hidden");
        registerTab.classList.add("text-blue-500", "border-blue-500");
        loginTab.classList.remove("text-blue-500", "border-blue-500");
        loginTab.classList.add("text-gray-500");
    });
});
