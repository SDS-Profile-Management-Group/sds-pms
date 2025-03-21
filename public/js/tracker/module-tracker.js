document.addEventListener("DOMContentLoaded", function () {
    const addBtn = document.getElementById("add-record-btn");
    const modal = document.getElementById("record-modal");
    const modalTitle = document.getElementById("modal-title");
    const recordForm = document.getElementById("record-form");
    const closeModalBtn = document.getElementById("close-modal-btn");
    
    const moduleIdInput = document.getElementById("module_id");
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

    // Event listener for selecting a row
    const moduleRows = document.querySelectorAll('.module-div .select-row');
    moduleRows.forEach(row => {
        row.addEventListener("click", function () {
            const selectedRow = this;
            const updateUrlTemplate = selectedRow.getAttribute('data-update-url'); // Get the update URL from the row's data-update-url attribute

            if (!updateUrlTemplate) {
                alert("No update URL found for this row.");
                return;
            }

            const updateAction = updateUrlTemplate.replace(':module_id', selectedRow.dataset.moduleId); // Replace placeholder with actual module_id
            recordForm.action = updateAction; // Set the form action to the updated URL

            // Open the modal
            modal.classList.remove("hidden");
            modalTitle.textContent = "Edit Record";

            // Populate form fields with the selected row data
            moduleIdInput.value = selectedRow.dataset.moduleId;

            if (selectedRow.dataset.status === '1') {
                statusInput.value = '1';  // Taken
            } else {
                statusInput.value = '0';  // Not Taken
            }
            // statusInput.value = selectedRow.dataset.status;
            gradeInput.value = selectedRow.dataset.grade;

            console.log("Editing Record - Module ID:", moduleIdInput.value);
            console.log("Status Before Assignment:", statusInput.value);
            console.log("Grade Before Assignment:", selectedRow.dataset.grade);
        });
    });

    closeModalBtn.addEventListener("click", function () {
        modal.classList.add("hidden");
    });
});