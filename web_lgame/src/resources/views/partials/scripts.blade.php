<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"
    integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    AOS.init();
    $(window).scroll(function() {
        $('.myNav').toggleClass('scrolled', $(this).scrollTop() > 10);
        $('.logo-1').toggleClass('scrolled', $(this).scrollTop() > 10);
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        center: true,
        margin: 10,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            }
        }
    })
    var owl = $('.owl-carousel');
    owl.owlCarousel();
    $('.prev-slideshow-btn').click(function() {
        owl.trigger('prev.owl.carousel', [300]);
    })
    $('.next-slideshow-btn').click(function() {
        owl.trigger('next.owl.carousel');
    })

    function openFullscreen(element) {
        // Menambahkan style untuk membuat gambar menjadi fullscreen
        element.style.width = "1090%0%";
        element.style.height = "100%";

        // Menambahkan class untuk menampilkan container gambar fullscreen
        document.querySelector(".fullscreen-image-container").style.display = "flex";

        // Menampilkan gambar di dalam container gambar fullscreen
        document.querySelector(".fullscreen-image img").src = element.style.backgroundImage.replace('url(', '').replace(
            ')', '').replace(/\"/gi, "");
    }

    function closeFullscreen() {
        // Menghapus class untuk menyembunyikan container gambar fullscreen
        document.querySelector(".fullscreen-image-container").style.display = "none";

        // Menghapus gambar dari dalam container gambar fullscreen
        document.querySelector(".fullscreen-image img").src = "";
    }
</script>
