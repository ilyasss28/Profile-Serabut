// Loader hilang setelah halaman selesai dimuat
window.addEventListener("load", () => {
    const loader = document.getElementById("loader");
    setTimeout(() => {
        loader.classList.add("hide");
        setTimeout(() => loader.style.display = "none", 600);
    }, 800); // kasih delay sedikit biar animasi kelihatan
});


// Function animasi hitung
function animateCounter(element, target) {
    let count = 0;
    const increment = target / 200; // Sesuaikan untuk kecepatan
    const speed = 10; // Interval update (ms)

    const counter = setInterval(() => {
        count += increment;
        if (count >= target) {
            count = target;
            clearInterval(counter);
        }
        element.textContent = Math.floor(count).toLocaleString();
    }, speed);
}

// Ambil semua elemen counter
const counters = document.querySelectorAll('h6[data-target]');

// Buat observer
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counter = entry.target;
            const target = +counter.getAttribute('data-target');

            // Jalankan animasi
            animateCounter(counter, target);

            // Stop observe biar ga keulang setiap scroll
            observer.unobserve(counter);
        }
    });
}, { threshold: 0.5 }); // 0.5 artinya jalan ketika 50% elemen kelihatan

// Observe semua counter
counters.forEach(counter => {
    observer.observe(counter);
});
