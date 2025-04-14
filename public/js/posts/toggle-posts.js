function applyFilters() {
    const type = document.getElementById('filter-type').value;
    const category = document.getElementById('filter-category').value;
    const location = document.getElementById('filter-location').value;

    document.querySelectorAll('.post-card').forEach(card => {
        const matchesType = !type || card.dataset.type === type;
        const matchesCategory = !category || card.dataset.category === category;
        const matchesLocation = !location || card.dataset.location === location;

        card.classList.toggle('hidden', !(matchesType && matchesCategory && matchesLocation));
    });
}

function resetFilters() {
    // Reset all dropdowns to default (empty string)
    document.getElementById('filter-type').value = '';
    document.getElementById('filter-category').value = '';
    document.getElementById('filter-location').value = '';

    // Show all posts
    applyFilters();
}