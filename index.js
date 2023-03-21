const header = document.getElementById('head');

window.addEventListener('scroll', () => {
    if (window.scrollY === 0) {
        header.style.backgroundColor = 'none';
    }
    else {
        header.style.backgroundColor = 'rgba(204, 153, 209, 0.993)';
    }
})

