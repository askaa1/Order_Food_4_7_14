document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const correctUsername = 'rahull';
    const correctPassword = '123';

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    if (username === correctUsername && password === correctPassword) {
        alert("Login berhasil");
        // Arahkan ke halaman lain
        window.location.href = '/hal2'; // Jalur absolut berdasarkan rute Laravel
    } else {
        alert("Username atau password tidak sesuai");
    }
});