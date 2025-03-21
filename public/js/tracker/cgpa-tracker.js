document.addEventListener("DOMContentLoaded", function () {
    const addBtn = document.getElementById("add-record-btn");
    const modal = document.getElementById("record-modal");
    const modalTitle = document.getElementById("modal-title");
    const recordForm = document.getElementById("record-form");
    const closeModalBtn = document.getElementById("close-modal-btn");

    const semesterInput = document.getElementById("semester");
    const cgpaInput = document.getElementById("cgpa_obt");

    addBtn.addEventListener("click", function () {
        modal.classList.remove("hidden");
        modalTitle.textContent = "Add Record";
        recordForm.action = recordForm.dataset.action; // Set form action for adding
        semesterInput.value = ""; 
        cgpaInput.value = "";  // Reset status dropdown
    });

    closeModalBtn.addEventListener("click", function () {
        modal.classList.add("hidden");
    });
});