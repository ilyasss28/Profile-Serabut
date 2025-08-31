// Loader hilang setelah halaman selesai dimuat
window.addEventListener("load", () => {
    const loader = document.getElementById("loader");
    setTimeout(() => {
        loader.classList.add("hide");
        setTimeout(() => loader.style.display = "none", 600);
    }, 800); // kasih delay sedikit biar animasi kelihatan
});


// Function untuk menjalankan animasi hitung
function animateCounter(element, target) {
    let count = 0;
    const increment = target / 200; // Sesuaikan angka ini untuk kecepatan
    const speed = 10; // Kecepatan (dalam ms)

    const counter = setInterval(() => {
        count += increment;
        if (count >= target) {
            count = target;
            clearInterval(counter);
        }
        element.textContent = Math.floor(count).toLocaleString(); // Menggunakan toLocaleString untuk format angka
    }, speed);
}

// Cari semua elemen dengan class .text-[#ca7305] (atau yang memiliki data-target)
const counters = document.querySelectorAll('h6[data-target]');

counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    animateCounter(counter, target);
});