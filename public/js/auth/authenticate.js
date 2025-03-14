document.addEventListener("DOMContentLoaded", function() {
    // Tab Navigation
    const loginTab = document.getElementById("loginTab");
    const registerTab = document.getElementById("registerTab");
    const loginForm = document.getElementById("loginForm");
    const registerForm = document.getElementById("registerForm");

    function updateTitle(title) {
        document.title = title + " | SDS PMS";
    }

    loginTab.addEventListener("click", () => {
        loginForm.classList.remove("hidden");
        registerForm.classList.add("hidden");
        loginTab.classList.add("text-blue-500", "border-blue-500");
        registerTab.classList.remove("text-blue-500", "border-blue-500");
        registerTab.classList.add("text-gray-500");

        updateTitle("Login");
    });

    registerTab.addEventListener("click", () => {
        registerForm.classList.remove("hidden");
        loginForm.classList.add("hidden");
        registerTab.classList.add("text-blue-500", "border-blue-500");
        loginTab.classList.remove("text-blue-500", "border-blue-500");
        loginTab.classList.add("text-gray-500");

        updateTitle("Register");
    });

    // User Type Toggle (Student/Staff)
    const userTypeSelect = document.querySelector('select[name="user_type"]');
    const studentQuestions = document.querySelector('.student-questions');
    const staffQuestions = document.querySelector('.staff-questions');

    function toggleQuestions() {
        const userType = userTypeSelect.value;
        if (userType === 'student') {
            studentQuestions.classList.remove('hidden');
            staffQuestions.classList.add('hidden');
        } else if (userType === 'staff') {
            staffQuestions.classList.remove('hidden');
            studentQuestions.classList.add('hidden');
        } else {
            studentQuestions.classList.add('hidden');
            staffQuestions.classList.add('hidden');
        }
    }

    userTypeSelect.addEventListener('change', toggleQuestions);
    toggleQuestions(); // Set initial state

    // Set initial title based on visible form
    if (!loginForm.classList.contains("hidden")) {
        updateTitle("Login");
    } else {
        updateTitle("Register");
    }
});
