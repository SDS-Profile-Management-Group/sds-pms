const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

document.getElementById('save-modules').addEventListener('click', function() {
    const moduleCodes = Array.from(document.querySelectorAll('input[name="module_code[]"]')).map(input => input.value);

    const data = {
        student_id: studentId, // Ensure this variable is set in your Blade file
        modules_taken: moduleCodes.map(module => ({
            module_code: module
        })),
    };

    fetch('/save-modules', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken // Ensure the CSRF token is included
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Modules saved successfully!');
        } else {
            alert('Failed to save modules: ' + data.error);
        }
    })
    .catch((error) => {
        console.error('Error:', error);
    });
});
