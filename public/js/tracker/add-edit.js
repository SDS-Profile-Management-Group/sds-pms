document.addEventListener("DOMContentLoaded", function () {
    const addBtn = document.getElementById("add-record-btn");
    const editBtn = document.getElementById("edit-record-btn");
    
    const modal = document.getElementById("record-modal");
    const modalTitle = document.getElementById("modal-title");
    const recordForm = document.getElementById("record-form");
    const closeModalBtn = document.getElementById("close-modal-btn");
    
    const moduleIdInput = document.getElementById("module_id");
    // const moduleNameDisp = document.getElementById("module_name");
    const statusInput = document.getElementById("status");
    const gradeInput = document.getElementById("grade");

    addBtn.addEventListener("click", function () {
        modal.classList.remove("hidden");
        modalTitle.textContent = "Add Record";
        recordForm.action = recordForm.dataset.action; // Set form action for adding
        moduleIdInput.value = ""; 
        statusInput.value = "";  // Reset status dropdown
        gradeInput.value = "";   // Reset grade dropdown
    });

    const moduleDivs = document.querySelectorAll('.module-div');

    // Listen for click on the edit button
    editBtn.addEventListener("click", function () {
        // Find the selected row within any div
        const selectedRow = document.querySelector(".selected"); // Assuming you add the "selected" class to the row
        
        if (!selectedRow) {
            alert("Please select a record to edit.");
            return;
        }

        // Find the parent div that contains the selected row
        const parentDiv = selectedRow.closest('.module-div');
        
        // Get the URL from the parent div's data attribute
        const updateUrlTemplate = parentDiv.getAttribute('data-update-url');

        // Replace ':module_id' with the actual module_id from the selected row
        const updateAction = updateUrlTemplate.replace(':module_id', selectedRow.dataset.moduleId);

        // Set the form action to update the record
        recordForm.action = updateAction;

        // Open the modal
        modal.classList.remove("hidden");
        modalTitle.textContent = "Edit Record";

        // Populate form fields with the selected row data
        moduleIdInput.value = selectedRow.dataset.moduleId;
        statusInput.value = selectedRow.dataset.status;
        gradeInput.value = selectedRow.dataset.grade;
    });

    closeModalBtn.addEventListener("click", function () {
        modal.classList.add("hidden");
    });
});