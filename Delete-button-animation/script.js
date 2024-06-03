document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
    if(!button.classList.contains('delete')) {
        button.classList.add('delete');
        setTimeout(() => {
            button.classList.remove('delete');
            window.location.href = 'hapus.php'; // Mengarahkan ke halaman hapus.php setelah 3200ms
        }, 3200);
    }
    e.preventDefault();
}));
