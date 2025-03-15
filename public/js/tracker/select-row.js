// Select a row when clicked
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.select-row').forEach(row => {
        row.addEventListener('click', function() {
            // Remove 'selected' class from all rows
            document.querySelectorAll('.select-row').forEach(r => r.classList.remove('selected'));
            
            // Add 'selected' class to clicked row
            this.classList.add('selected');
        });
    });
});