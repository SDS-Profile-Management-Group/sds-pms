function toggleReadOnly() {
    let inputs = document.querySelectorAll('#full_name, #contact_number, #dob, #alt_email');

    inputs.forEach(input => {
        input.readOnly = !input.readOnly;

        if (input.readOnly) {
            input.classList.remove('bg-white');
            input.classList.add('bg-gray-100');
        } else {
            input.classList.remove('bg-gray-100');
            input.classList.add('bg-white');
        }
    });

    let button = document.getElementById('editButton');
    if (button.innerText === "Edit Profile") {
        button.innerText = "Save Changes"; // Change button text when editing
    } else {
        button.innerText = "Edit Profile"; // Revert button text when not editing
        document.getElementById('updateProfileForm').submit();
    }
}