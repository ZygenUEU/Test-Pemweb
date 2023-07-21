<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/45e4de4e82.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<Style>
body{
    background-color: #1f1e1e !important;
    overflow-x: hidden;
}

/* width */
::-webkit-scrollbar {
    width: 10px;
  }
  
/* Track */
::-webkit-scrollbar-track {
    background: #333333;
}
  
/* Handle */
::-webkit-scrollbar-thumb {
    background: #ffffff;
}
  
/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #d4d4d4;
}
  

.container {
    margin-left: 10%;
    margin-right: 10%;
}

.mt-1 {
    margin-top: 10px;
}

.mt-2 {
    margin-top: 25px;
}

.mt-3 {
    margin-top: 40px;
}

.mt-4 {
    margin-top: 50px;
}

.mt-5 {
    margin-top: 60px;
}

.ml-1 {
    margin-left: 10px;
}

.ml-2 {
    margin-left: 25px;
}

.ml-3 {
    margin-left: 40px;
}

.ml-4 {
    margin-left: 50px;
}

.ml-5 {
    margin-left: 60px;
}

.font-thin{
    font-weight: lighter;
}

.font-normal{
    font-weight: normal;
}

/* MAYNAV ============================================================================ */
.topNav{
    padding: 5px; 
    background-color: #333333; 
    z-index: 1; 
    position: relative
}

.myNav-wrapper {
    height: 5%;
    width: 100%;
    position: relative;
}

.myNav-dropdown{
    display: none;
    z-index: 1;
}

.myNav {
    transition: 0.5s;
    background-color: #33333300 !important;
    float: right;
    border-radius: 0 0 0 10px;
    margin-top: -5px;
    padding-bottom: 10px !important;
}

.myNav.scrolled{
    transition: 0.5s;
    margin-top: -10px;
    background-color: #333333 !important;
    -webkit-box-shadow: 0px 7px 13px 0px rgba(0,0,0,0.56);
    box-shadow: 0px 1px 10px 0px rgba(0,0,0,0.56);
}


.myNav ul {
    overflow: visible;
    background-color: #333333;
}

.myNav a {
    float: right;
    display: block;
    color: #ffffff;
    font-weight: bold;
    text-shadow: 0px 0px 5px #333333;
    text-align: center;
    padding: 8px 16px;
    text-decoration: none;
    font-size: 17px;
    margin-top: 10px;
}

.myNav a:hover {
    color: #4b75ff;
}

.myNav .icon {
    display: none;
}


/* MYNAV END ==============================================================================*/

/* BANNER =================================================================================*/
.banner{
    width: 100%;
    object-fit: cover;
    border: solid 10px;
    border-top: transparent;
    border-left: transparent;
    border-right: transparent;
    border-color: #333333;
}
/* BANNER END =============================================================================*/

/* BANNER FOOTER ==========================================================================*/
.banner-footer-wrapper{
    width: 100%;
    position: relative;
    top: -301px;
    padding-top: 40px;
    margin-bottom: -301px;
    background: #000000;
    background: -moz-linear-gradient(top, #000000 0%, #000000 50%, #000000 100%);
    background: -webkit-linear-gradient(top, #000000 0%, #000000 50%, #000000 100%);
    background: linear-gradient(to bottom, #00000000 0%, #0000004d 17%, #000000c7 100%);
}

.banner-footer{
    width: 100%;
    padding-bottom: 10px;
    background-color: #333333;
}

.game-icon{
    width: 245px !important;
    /* height: 100%; */
    padding-top: 235px;
    background-color: #969696;
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    border-radius: 0 10px 0 0;
    border: solid 10px #333333;
    border-bottom: transparent;
    border-left: transparent;
}
/* BANNER FOOTER END ======================================================================*/

/* SLIDESHOW =============================================================================*/
.screenshot-slideshow{
    margin-top: 2%;
}

.owl-carousel{
    width: 90% !important;
}

.owl-stage{
    margin-top: 40px !important;
    margin-bottom: 40px !important;     
}

.owl-item{
    transform: scale(90%) !important;
    transition: .6s ease;
}

.active.center {
    transform: scale(120%) !important;
    z-index: 5;
    -webkit-box-shadow: 0px 1px 5px 2px rgba(0,0,0,0.4); 
    box-shadow: 0px 1px 5px 2px rgba(0,0,0,0.4);
}

.active {
    transform: scale(90%) !important;
    transition: .6s ease;
}

.game-screenshot{
    padding: 22%;
    width: 100%;
    background-color: #969696;
    background-size: cover;
    background-position: center;
    border-radius: 5px;
}

.prev-slideshow-btn{
    width: 6%;
    border-radius: 50px;
    background-color: #333333;
    border: none;
    color: #ffffff;
    height: 80px;
    margin-top: 6.5%;
    margin-right: -4.5%;
    z-index: 10;
    -webkit-box-shadow: 0px 1px 3px 0px rgba(0,0,0,0.72); 
    box-shadow: 0px 1px 3px 0px rgba(0,0,0,0.72);
    font-size: 40px;
}

.next-slideshow-btn{
    width: 6%;
    border-radius: 50px;
    background-color: #333333;
    border: none;
    color: #ffffff;
    height: 80px;
    margin-top: 6.5%;
    margin-left: -4.5%;
    z-index: 10;
    -webkit-box-shadow: 0px 1px 3px 0px rgba(0,0,0,0.72);
    box-shadow: 0px 1px 3px 0px rgba(0,0,0,0.72);
    font-size: 40px;
}
/* SLIDESHOW END =========================================================================*/

/* CONTENT ================================================================================*/
.content-wrapper{
    margin-left: 10%;
    margin-right: 10%;
    color: white;
    margin-top: 50px;
    text-align: justify;
}
/* CONTENT END =========================================================================== */

/* CARD ===================================================================================*/
.myCard{
    transition: 2s ease-in;
    -webkit-transition: 2s ease-in;
    -moz-transition: 2s ease-in;
    width: 100%;
    padding-top: 300px;
    background-color: #333333;
    border-radius: 10px;
    -webkit-box-shadow: 0px 4px 9px 2px rgba(0,0,0,0.59); 
    box-shadow: 0px 4px 9px 2px rgba(0,0,0,0.59); 
    margin-bottom: 50px;
    border: solid 5px;
    border-color: #4b75ff;
}

.card-image{
    background-size: cover;
    background-position: center;
}

.myCard:hover {
    transition: 2s ease-in;
    background-size: 1500px;
}

.myCard-content-right-bg{
    background-color: #333333;
    padding-top: 20px;
    width: 60%;
    float: right;
    border-radius: 25px 0px 0px 0px;
    border: solid 5px;
    border-right: transparent;
    border-bottom: transparent;
    border-color: #4b75ff;
}

.mycard-content-left-bg{
    background-color: #333333;
    padding-top: 10px;
    width: 80%;
    border-radius: 0px 0px 25px 0px;
    position: relative;
    top: -300px;
    overflow: hidden;
    border: solid 5px;
    border-left: transparent;
    border-top: transparent;
    border-color: #4b75ff;
}

.mycard-content-left-bg h2{
    margin-bottom: 10px;
}
/* CARD END ===============================================================================*/

/* BUTTON =================================================================================*/
.button-1{
    float: right;
    position: relative;
    margin-right: 30px;
    margin-bottom: 15px;
    background-color: #4b75ff;
    color: #ffffff;
    border-radius: 10px;
    width: 50%;
    padding-top: 10px;
    padding-bottom: 10px;
    border: none;
    font-weight: bold;
    text-align: center;
    font-size: 1em;
    text-decoration: none;
}

.button-1:hover{
    background-color: #3454be;
    color: #969696;
}

.download-button{
    padding: 15px;
    background-color: #3454be;
    color: white;
    text-decoration: none;
    border-radius: 10px;
    padding-right: 100px;
    padding-left: 100px;
    margin-left: 20px;
}
/* BUTTON END =============================================================================*/

/* SEARCH FORM =========================================================================== */
.search-wrapper{
    padding-top: 30px;
    padding-bottom: 30px;
    width: 100%;
    border-radius: 10px;
    /* margin-top: 50px; */
    color: #4b75ff;
    background: #4b75ff;
    margin-bottom: 50px;
}

.search-form-wrapper{
    background-color: #ffffff;
    width: 100%;
    border-radius: 10px;
}

.search-form{
    width: 92%;
    border-radius: 10px;
    border: none;
    height: 40px;
    background-color: #ffffff;
    margin-left: 2%;
}

.search-wrapper input[type="text"] {
    color: #1f1e1e;
    font-family: Arial, Helvetica, sans-serif;
}

.search-wrapper input:focus {
    outline: none;
}

.search-wrapper input::placeholder {
    font-family: "Arial", sans-serif; /* ganti dengan nama font yang diinginkan */
    font-size: 14px; /* ganti dengan ukuran font yang diinginkan */
    font-style: italic; /* ganti dengan style font yang diinginkan */
}

.search-button{
    background: #4b75ff !important;
    border: none;
    background-color: #1f1e1e !important;
    color: #ffffff;
    padding-top: 5px;
    padding-bottom: 6px;
    /* padding-right: 8px; */
    border-radius: 10px;
    width: 5%;
}
.category-btn{
    background-color: #1f1e1e !important;
    border: none !important;
    font-size: 12px !important;
}
/* SEARCH FORM END ======================================================================= */

/* INFORMATION ============================================================================*/
.review-wrapper{
    padding-left: 10px;
    width: 50%;
    float: right;
    color: white;
}

.review-info{
    position: relative;
    margin-top: 140px;
    margin-left: 20px;
}

.game-rating{
    padding: 10px;
    background-color: white;
    color: #1f1e1e;
    border-radius: 5px;
    font-family: 10px;
    width: 10px;
}

.video-container {
    position: relative;
    padding-bottom: 56.25%;
}
  
.video-container iframe {
    width: 80%;
    height: 80%;
    position: absolute;
    margin: auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
/* INFORMATION END ========================================================================*/

/* FOOTER ================================================================================ */
.myFooter{
    padding-bottom: 10px;
    padding-top: 10px;
    width: 100%;
    background-color: #3454be;
    color: #ffffff;
}

.copyright-bg{
    padding: 10px;
    border-radius: 50px;
    background-color: #00000021;
    margin-right: 2%;
    margin-left: 2%;
    padding-left: 10%;
    padding-right: 10%;
}
/* FOOTER END ============================================================================ */

/* EFFECT ================================================================================ */
.effect-vignitte{
    width: 100%;
    position: relative;
    display: inline-block;
}

.effect-vignitte > img{
    display: block;
}

.effect-vignitte::after{
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    box-shadow: inset 0px 0px 1000px rgb(0 0 0);
}

.fullscreen-image-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 9999;
}
  
.fullscreen-image {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}
  
.fullscreen-image img {
    max-width: 90%;
    max-height: 90%;
    margin: auto;
}

.effect-bottom-fade{
    padding: 110px;
    width: 100%;
    margin-top: -225px;
    z-index: 10;
    position: relative;
    background: #1f1e1e;
    background: -moz-linear-gradient(top, #1f1e1e 0%, #1f1e1e 50%, #1f1e1e 100%);
    background: -webkit-linear-gradient(top, #1f1e1e 0%, #1f1e1e 50%, #1f1e1e 100%);
    background: linear-gradient(to bottom, #1f1e1e00 0%, #1f1e1ea6 50%, #1f1e1e 90%);

}
  
/* EFFECT END ============================================================================ */

/* OTHER ==================================================================================*/
.logo-1 {
    transition: 0.5s;
    width: 150px;
    height: 35px;
    margin-left: 10px;
    margin-top: 12px;
}

.logo-1.scrolled {
    transition: 0.5s;
    width: 150px;
    height: 35px;
    margin-left: 10px;
    margin-top: 10px;
}

.myContainer{
    margin-left: 5%;
    margin-right: 5%;
}

.icon-bg{
    padding: 10px;
    width: 45px;
    border-radius: 50px;
    background-color: #00000021;
}

.box-shape{
    padding: 10px;
    width: 100%;
    border-radius: 5px;
}
/* OTHER END ==================================================================================*/

/* SCREEN 1100PX */
@media screen and (max-width: 1100px) and (min-width: 768px) {
    /* myNav ================================================================================== */
    .topNav{
        padding: 2px; 
        background-color: #333333; 
        z-index: 1; 
        position: relative
    }
    /* myNav END ============================================================================== */

    /* BUTTON ==================================================================================*/
    .button-1{
        font-size: 0.6em;
    }
    /* BUTTON END ==============================================================================*/

    /* SLIDESHOW ===============================================================================*/
    .next-slideshow-btn, .prev-slideshow-btn{
        height: 60px;
        margin-top: 7.5%;
        font-size: 35px;
    }
    
    .owl-stage-outer{
        margin-bottom: -50px;
    }
    /* SLIDESHOW END ===========================================================================*/
    
}
  
/* SCREEN 767PX */
@media screen and (max-width: 767px) {
    /* myNav ================================================================================= */
    .topNav{
        padding: 2.5px; 
        background-color: #333333; 
        z-index: 1; 
        position: relative
    }

    .myNav-dropdown{
        display: block;
        z-index: 1;
    }

    .dropdown-menu.show {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .dropdown-item{
        font-size: 13px !important;
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }

    .dropdown-menu.show {
        min-width:0px;
        -webkit-box-shadow: 0px 7px 13px 0px rgba(0,0,0,0.56); 
        box-shadow: 0px 7px 13px 0px rgba(0,0,0,0.56);
    }

    .myNav {
        background-color: #333333;
        overflow: visible;
        position: relative;
        padding-bottom: 0px !important;
        float: right;
        margin-top: 1px;
    }

    .myNav.scrolled{
        transition: 0.5s;
        margin-top: -1px;
        background-color: #333333 !important;
        -webkit-box-shadow: 0px 7px 13px 0px rgba(0,0,0,0.56); 
        box-shadow: 0px 7px 13px 0px rgba(0,0,0,0.56);
    }

    .myNav a {
        float: none;
        text-align: left;
    }

    .myNav li{
        float: right;
    }

    .navigation{
        display: none !important;
    }
    /* myNav END ============================================================================= */

    .logo-1 {
        width: 85px;
        height: 20px;
        margin-left: 10px;
        margin-top: 10px;
    }
    .logo-1.scrolled {
        width: 85px;
        height: 20px;
        margin-left: 10px;
        margin-top: 5px;
    }

    /* BANNER =================================================================================*/
    .banner{
        height: 400px;
        object-fit: cover;
        border: solid 10px;
        border-top: transparent;
        border-left: transparent;
        border-right: transparent;
        border-color: #333333;
    }
    /* BANNER END =============================================================================*/

    /* BANNER FOOTER ==========================================================================*/
    .banner-footer-wrapper{
        top: -186px;
        margin-bottom: -186px;
    }

    .game-icon{
        width: 130px !important;
        padding-top: 120px;
    }
    /* BANNER FOOTER END ======================================================================*/

    /* SEARCH FORM ============================================================================*/
    .search-wrapper{
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .search-form{
        width: 80%;
    }

    .search-button{
        width: 15%;
    }

    /* SEARCH =================================================================================*/

    /* CARD ===================================================================================*/
    .myCard{
        width: 100%;
        padding-top: 300px;
        border-radius: 10px;
        margin-bottom: 50px;
    }

    .myCard-content-right-bg{
        padding-top: 10px;
        width: 60%;
    }

    .mycard-content-left-bg{
        padding-top: 10px;
        width: 80%;
        position: relative;
        top: -300px;
    }
    /* CARD END ===============================================================================*/

    
    /* INFORMATION ============================================================================*/
    .review-wrapper{
        padding-left: 10px;
        width: 50%;
        float: right;
        color: white;
    }

    .review-info{
        margin-top: 55px;
        margin-left: 10px;
        font-size: 10px;
        margin-bottom: -10px;
    }

    .game-rating{
        padding: 10px;
        background-color: white;
        color: #1f1e1e;
        border-radius: 5px;
        font-family: 10px;
        width: 10px;
    }

    .video-container iframe {
        width: 90%;
        height: 90%;
    }
    /* INFORMATION END ========================================================================*/

    /* BUTTON =================================================================================*/
    .button-1{
        float: right;
        position: relative;
        margin-right: 30px;
        margin-bottom: 10px;
        border-radius: 5px;
        width: 50%;
        padding-top: 5px;
        padding-bottom: 5px;
        border: none;
        font-weight: bold;
        font-size: .6em;
    }

    .download-button{
        padding: 10px;
        padding-right: 40px;
        padding-left: 40px;
        margin-left: 10px;
        font-size: 12px;
    }
    /* BUTTON END =============================================================================*/

    /* FOOTER =================================================================================*/
    .copyright-bg{
        padding: 0px;
        border-radius: 50px;
        margin-right: 2%;
        margin-left: 2%;
        padding-left: 10%;
        padding-right: 10%;
        /* line-height: 38px; */
        font-size: 9px;
        padding-top: 5px;
    }
    /* FOOTER END =============================================================================*/

    /* SLIDESHOW ===============================================================================*/
    .owl-stage-outer{
        margin-bottom: -50px;
    }

    .prev-slideshow-btn, .next-slideshow-btn{
        display: none;
    }

    .owl-item{
        transform: scale(100%) !important;
        transition: .6s ease;
    }
    
    .active.center {
        transform: scale(140%) !important;
        z-index: 5;
        -webkit-box-shadow: 0px 6px 12px 5px rgba(0,0,0,0.5); 
        box-shadow: 0px 1px 10px 1px rgba(0,0,0,0.5);
    }
    
    .active {
        transform: scale(100%) !important;
        transition: .6s ease;
    }
    /* SLIDESHOW END ===========================================================================*/

    /* OTHER ==================================================================================*/
    .icon-bg{
        padding: 5px;
        width: 26px;
        border-radius: 50px;
        background-color: #3454be;
        font-size: 10px;
    }
    /* OTHER ==================================================================================*/
}
</Style>