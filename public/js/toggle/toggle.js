document.addEventListener('DOMContentLoaded', function () {
    // Get the elements for toggling the visibility
    const toggleButton = document.getElementById('graduation-toggle');
    const content = document.getElementById('graduation-content');

    // Check if the toggleButton and content exist before adding the event listener
    if (toggleButton && content) {
        // Add click event to toggle the visibility of the content
        toggleButton.addEventListener('click', () => {
            if (content.style.display === 'none' || content.style.display === '') {
                content.style.display = 'block';  // Show the content
            } else {
                content.style.display = 'none';  // Hide the content
            }
        });
    }
});