document.addEventListener("DOMContentLoaded", function() {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5, // Jumlah card default yang ditampilkan
        centeredSlides: false,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // Jika lebar viewport kurang dari 1200px
            1200: {
                slidesPerView: 5, // Menampilkan 4 card
            },
            // Jika lebar viewport kurang dari 992px
            992: {
                slidesPerView: 3, // Menampilkan 3 card
            },
            // Jika lebar viewport kurang dari 768px
            768: {
                slidesPerView: 2, // Menampilkan 2 card
            },
            // Jika lebar viewport kurang dari 576px
            576: {
                slidesPerView: 1, // Menampilkan 1 card
            },
            414: {
                slidesPerView: 1, // Menampilkan 1 card
            },
        },
    });
    
    const skills = document.querySelectorAll('.skill');
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function animateSkills() {
        skills.forEach(skill => {
            if (isElementInViewport(skill) && !skill.classList.contains('in-view')) {
                skill.classList.add('in-view');
                
                const percentageText = skill.querySelector('#number').textContent;
                const percentage = parseInt(percentageText.replace('%', ''));
                
                const circle = skill.querySelector('svg circle');
                const circumference = 2 * Math.PI * circle.r.baseVal.value;
                const offset = circumference - (circumference * percentage / 100);
                
                circle.style.strokeDasharray = circumference;
                circle.style.strokeDashoffset = offset;
            }
        });
    }

    window.addEventListener('scroll', animateSkills);
    animateSkills();

    // Inisialisasi AOS
    AOS.init({
        duration: 1000, // durasi animasi dalam milidetik
        once: true // animasi hanya terjadi sekali saat menggulir
    });

    
});

function perbesarGambar(src) {
    // Membuat elemen modal
    const modal = document.createElement('div');
    modal.style.position = 'fixed';
    modal.style.top = 0;
    modal.style.left = 0;
    modal.style.width = '100%';
    modal.style.height = '100%';
    modal.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
    modal.style.display = 'flex';
    modal.style.justifyContent = 'center';
    modal.style.alignItems = 'center';
    modal.style.zIndex = 1000;

    // Membuat elemen gambar
    const img = document.createElement('img');
    img.src = src;
    img.style.maxWidth = '90vw'; // Memperbesar gambar hingga 90% dari lebar viewport
    img.style.maxHeight = '90vh'; // Memperbesar gambar hingga 90% dari tinggi viewport
    img.style.borderRadius = '10px';
    img.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.3)';
    img.style.cursor = 'pointer';

    // Menambahkan gambar ke modal
    modal.appendChild(img);

    // Membuat tombol tutup
    const closeButton = document.createElement('span');
    closeButton.innerHTML = '&times;';
    closeButton.style.position = 'absolute';
    closeButton.style.top = '20px';
    closeButton.style.right = '30px';
    closeButton.style.fontSize = '30px';
    closeButton.style.fontWeight = 'bold';
    closeButton.style.color = '#fff';
    closeButton.style.cursor = 'pointer';

    // Menambahkan tombol tutup ke modal
    modal.appendChild(closeButton);

    // Menambahkan modal ke dokumen
    document.body.appendChild(modal);

    // Fungsi untuk menghapus modal saat tombol tutup diklik
    closeButton.addEventListener('click', function () {
        document.body.removeChild(modal);
    });

    // Menghapus modal saat diklik di luar gambar
    modal.addEventListener('click', function (e) {
        if (e.target === modal) {
            document.body.removeChild(modal);
        }
    });
}
