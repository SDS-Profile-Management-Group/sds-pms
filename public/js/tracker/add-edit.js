document.addEventListener("DOMContentLoaded", function () {
    const addBtn = document.getElementById("add-record-btn");
    const editBtn = document.getElementById("edit-record-btn");
    
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
        recordForm.action = "{{ route('modules.store') }}"; // Set form action for adding
        moduleIdInput.value = ""; 
        statusInput.value = "";  // Reset status dropdown
        gradeInput.value = "";   // Reset grade dropdown
    });

    editBtn.addEventListener("click", function () {
        const selectedRow = document.querySelector(".selected"); // Assuming you highlight a row for editing
        if (!selectedRow) {
            alert("Please select a record to edit.");
            return;
        }

        modal.classList.remove("hidden");
        modalTitle.textContent = "Edit Record";
        
        // Set the form action to update the record
        recordForm.action = "{{ route('modules.update', ':id') }}".replace(':id', selectedRow.dataset.id);
        
        // Populate form fields with the selected row data
        moduleIdInput.value = selectedRow.dataset.moduleId;
        statusInput.value = selectedRow.dataset.status;
        gradeInput.value = selectedRow.dataset.grade;
    });

    closeModalBtn.addEventListener("click", function () {
        modal.classList.add("hidden");
    });
});