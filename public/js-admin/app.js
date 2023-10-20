document.addEventListener('DOMContentLoaded', function () {
    const searchTermInput = document.getElementById('searchTerm');
    const articles = document.querySelectorAll('.col-lg-4');
    const searchResults = document.getElementById('searchResults');

    searchTermInput.addEventListener('input', () => {
        const searchTerm = searchTermInput.value.toLowerCase();
        let hasResults = false; // Tandai jika ada hasil pencarian

        articles.forEach(article => {
            const articleTitle = article.querySelector('.judul-news').textContent.toLowerCase();

            if (articleTitle.includes(searchTerm)) {
                article.style.display = 'block';
                hasResults = true; // Ada hasil pencarian
            } else {
                article.style.display = 'none';
            }
        });

        // Setel pesan "Yang Anda cari tidak ada" berdasarkan hasil pencarian
        if (!hasResults) {
            searchResults.textContent = 'Ups, pencarian Anda tidak ditemukan.'; // Tampilkan pesan jika tidak ada hasil pencarian
        } else {
            searchResults.textContent = ''; // Hapus pesan jika ada hasil pencarian
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const searchTermInput = document.getElementById('searchTermDetail');
    const articles = document.querySelectorAll('.col-lg-4');
    const searchResults = document.getElementById('searchResultsDetail');

    searchTermInput.addEventListener('input', () => {
        const searchTerm = searchTermInput.value.toLowerCase();
        let hasResults = false; // Tandai jika ada hasil pencarian

        articles.forEach(article => {
            const articleTitle = article.querySelector('.judul-news').textContent.toLowerCase();

            if (articleTitle.includes(searchTerm)) {
                article.style.display = 'block';
                hasResults = true; // Ada hasil pencarian
            } else {
                article.style.display = 'none';
            }
        });

        // Setel pesan "Yang Anda cari tidak ada" berdasarkan hasil pencarian
        if (!hasResults) {
            searchResults.textContent = 'Ups, pencarian Anda tidak ditemukan.'; // Tampilkan pesan jika tidak ada hasil pencarian
        } else {
            searchResults.textContent = ''; // Hapus pesan jika ada hasil pencarian
        }
    });
});

// filter kategori
    // Fungsi untuk menampilkan konten kategori yang dipilih dan menyembunyikan yang lain
    function showContent(content) {
        allContent.style.display = "none";
        digitalMarketingContent.style.display = "none";
        tipsContent.style.display = "none";
        bisnisContent.style.display = "none";
        teknologiContent.style.display = "none";

        content.style.display = "block";

        // Hapus kelas "active" dari semua kategori
        allCategory.classList.remove("active");
        digitalMarketingCategory.classList.remove("active");
        tipsCategory.classList.remove("active");
        bisnisCategory.classList.remove("active");
        teknologiCategory.classList.remove("active");

        // Tambahkan kelas "active" hanya pada kategori yang dipilih
        if (content === allContent) {
            allCategory.classList.add("active");
        } else if (content === digitalMarketingContent) {
            digitalMarketingCategory.classList.add("active");
        } else if (content === tipsContent) {
            tipsCategory.classList.add("active");
        } else if (content === bisnisContent) {
            bisnisCategory.classList.add("active");
        } else if (content === teknologiContent) {
            teknologiCategory.classList.add("active");
        }
    }

// kondisi nav active
$(document).ready(function() {
    // Mendapatkan URL saat ini
    var currentUrl = window.location.pathname;

    // Loop melalui setiap item navigasi
    $('#nav-items a').each(function() {
        var linkHref = $(this).attr('href');

        // Memeriksa apakah URL saat ini cocok dengan href item navigasi
        if (currentUrl === linkHref) {
            $(this).addClass('active'); // Menambahkan kelas "active"
        }
    });
});

// fungsi active and unactive visi misi
function showTab(tab) {
    if (tab === 'vision') {
        document.getElementById('vision-content').style.display = 'block';
        document.getElementById('mision-content').style.display = 'none';
        document.getElementById('vision-tab').style.backgroundColor = '#142546';
        document.getElementById('vision-tab').querySelector('a').style.color = '#fff';
        document.getElementById('mision-tab').style.backgroundColor = '#fff';
        document.getElementById('mision-tab').querySelector('a').style.color = '#142546';
    } else if (tab === 'mision') {
        document.getElementById('mision-content').style.display = 'block';
        document.getElementById('vision-content').style.display = 'none';
        document.getElementById('mision-tab').style.backgroundColor = '#142546';
        document.getElementById('mision-tab').querySelector('a').style.color = '#fff';
        document.getElementById('vision-tab').style.backgroundColor = '#fff';
        document.getElementById('vision-tab').querySelector('a').style.color = '#142546';
    }
}

// Default: Tampilkan "Visi" (misalnya pada saat halaman dimuat)
showTab('vision');
document.getElementById('vision-content').style.display = 'block';
        document.getElementById('mision-content').style.display = 'none';
        document.getElementById('vision-tab').style.backgroundColor = '#142546';
        document.getElementById('vision-tab').querySelector('a').style.color = '#fff';
        document.getElementById('mision-tab').style.backgroundColor = '#fff';
        document.getElementById('mision-tab').querySelector('a').style.color = '#142546';