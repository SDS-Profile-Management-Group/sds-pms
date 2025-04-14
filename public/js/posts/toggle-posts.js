function toggleView(view) {
    document.querySelectorAll('.post-section').forEach(el => el.classList.add('hidden'));

    if (view === 'own') {
        document.getElementById('own-posts').classList.remove('hidden');
    } else if (view === 'public') {
        document.getElementById('public-posts').classList.remove('hidden');
    } else {
        document.getElementById('all-posts').classList.remove('hidden');
    }
}