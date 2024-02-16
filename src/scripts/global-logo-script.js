const logo = document.getElementsByClassName('logo')[0];

logo.addEventListener('click', () => {
    const redirectUrl = window.location.href.includes('books.html') ? 'index.html' : '../index.html' && window.location.href.includes('index.html') ? 'index.html' : '../index.html';
    window.location.href = redirectUrl;
});