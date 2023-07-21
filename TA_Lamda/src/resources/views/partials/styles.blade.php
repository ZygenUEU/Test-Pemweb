<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Symbols:wght@100&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="path/to/lightbox.min.css">

<style>
    body {
        font-family: 'Asap', sans-serif;
    }

    .add-btn {
        color: white;
        padding: 10px;
        display: inherit;
        background-color: rgba(0, 255, 64, 0.644) !important;
        border-radius: 5px;
        text-decoration: none;
    }

    .add-btn:hover {
        color: white;
        text-decoration: none !important;
    }

    .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }

    .card-group {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: .5rem;
    }

    .card-title {
        font-weight: bold;
        font-size: 30px;
    }

    .card-text {
        font-weight: 100;
        color: gray;
    }

    .card-img-overlay {
        padding: 0 !important;
    }

    .advance-search {
        background-color: #128d4a;
        /* padding: 10px; */
        border-radius: 5px;
        overflow: hidden;
        margin-bottom: 15px;
        height: 0px;
        padding-top: 10px;
        padding-right: 10px;
        padding-left: 10px;
    }

    .bg-title {
        padding: 30px;
        height: 100%;
        background-image: linear-gradient(rgb(0, 0, 0) 0%, rgba(0, 0, 0, 0.41) 55%, rgb(0 0 0 / 0%) 100%);
        background-color: initial;
    }

    .owl-item>div:after {
        font-family: sans-serif;
        font-size: 24px;
        font-weight: bold;
    }

    .active.center {
        transform: scale(1);
        -webkit-filter: grayscale(0);
        /* Safari 6.0 - 9.0 */
        filter: grayscale(0);
        transform: scale(1.5);
        z-index: 100;
    }

    .active {
        transform: scale(.8);
        transition: .6s ease;
        -webkit-filter: grayscale(100%);
        /* Safari 6.0 - 9.0 */
        filter: grayscale(100%);
    }

    .owl-stage-outer {
        padding-top: 30px;
        padding-bottom: 30px;
    }


    .fullscreen-img-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: transparent;
        border: none;
        color: white;
        font-size: 24px;
        z-index: 999;
    }

    .screenshot-carousel img {
        max-width: 100%;
        height: auto;
    }


    .fullscreen-img-btn {
        position: relative;
        top: 26px;
        background-color: transparent;
        background-repeat: no-repeat;
        border: none;
        cursor: pointer;
        outline: none;
    }

    .card-style {
        /* box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
        backdrop-filter: blur(14px);
        background-color: rgba(255, 255, 255, 0.2); */
        background-color: rgb(69, 69, 69);
    }

    .c-sidebar-style {
        background-color: rgb(69, 69, 69);
    }

    .btn-link-style {
        color: #0077ff;
        text-decoration: none;
    }

    .btn-link-style:hover {
        color: #0077ff;
        text-decoration: none;
    }

    .video-container {
        position: relative;
        padding-bottom: 56.25%;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }


    /* TABLET SIZE */
    @media screen and (max-width: 991px) and (min-width: 768px) {
        .card-img-top {
            width: 100%;
            height: 16vw;
            object-fit: cover;
        }
    }

    /* PHONE SIZE */
    @media screen and (max-width: 767px) {
        .card-img-top {
            width: 100%;
            height: 60vw;
            object-fit: cover;
        }
    }
</style>
