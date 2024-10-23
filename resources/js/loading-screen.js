window.addEventListener('load', function () {
    const loadingScreen = document.getElementById('loading-screen');
    const app = document.getElementById('app');

    loadingScreen.style.opacity = '0';
    app.style.display = 'block';

    setTimeout(function () {
        loadingScreen.style.display = 'none';
    }, 500);
});
