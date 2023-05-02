<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Info</title>

    @include('partials.styles')
</head>

<body>
    @include('partials.header')

    <!-- Banner -->
    <div class="effect-vignitte">
        <img src="https://drive.google.com/uc?export=view&id=1s8fyKyFquP2uP2N4NFBbnNbvBgVZ_0IR" alt="" class="banner">
    </div>
    <!-- Banner -->

    <!-- Banner Footer -->
    <div class="banner-footer-wrapper">
        <div class="d-flex">
          <div class="game-icon" style="background-image: url(https://drive.google.com/uc?export=view&id=18AH9-3gBUIoVPBbbCAdD99KZ7Yglqkbo);"></div>
        <div class="review-wrapper">
          <div class="review-info">
            <i class="fa fa-solid fa-download"></i> 0 
            &#124; 
            <i class="fa fa-regular fa-star"></i> 4.0 
            &#124;
            Rating 10+
          </div>
          <br>
          <a href="#" class="download-button">Download</a>
        </div>
        </div>
        <div class="banner-footer"></div>
    </div>
    <!-- Banner Footer -->

    <!-- CONTENT -->

    <div class="d-flex screenshot-slideshow justify-content-center">
      <button class="prev-slideshow-btn"><i class="fa fa-solid fa-caret-left"></i></button>
      <div class="owl-carousel owl-theme">
        <div class="game-screenshot" style="background-image: url(https://drive.google.com/uc?export=view&id=1hmjwdtP5b1mWH4j4ZiehafAPQrjk53oj);" onclick="openFullscreen(this)"></div>
        <div class="game-screenshot" style="background-image: url(https://drive.google.com/uc?export=view&id=1s8fyKyFquP2uP2N4NFBbnNbvBgVZ_0IR);" onclick="openFullscreen(this)"></div>
        <div class="game-screenshot" style="background-image: url(https://drive.google.com/uc?export=view&id=1splGndNI7qgkOnofrk27BN97pwSKhDqh);" onclick="openFullscreen(this)"></div>
        <div class="game-screenshot" style="background-image: url(https://drive.google.com/uc?export=view&id=1hmjwdtP5b1mWH4j4ZiehafAPQrjk53oj);" onclick="openFullscreen(this)"></div>
        <div class="game-screenshot" style="background-image: url(https://drive.google.com/uc?export=view&id=1s8fyKyFquP2uP2N4NFBbnNbvBgVZ_0IR);" onclick="openFullscreen(this)"></div>
        <div class="game-screenshot" style="background-image: url(https://drive.google.com/uc?export=view&id=1splGndNI7qgkOnofrk27BN97pwSKhDqh);" onclick="openFullscreen(this)"></div>
      </div>
      <button class="next-slideshow-btn"><i class="fa fa-solid fa-caret-right"></i></button>
    </div>

    <div class="fullscreen-image-container" onclick="closeFullscreen()">
      <div class="fullscreen-image">
        <img src="" alt="">
      </div>
    </div>

    <div class="content-wrapper">
      <h2>About this game</h2>
      <p class="font-normal">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum perspiciatis architecto laudantium illo quas quidem quis temporibus id cum amet? Saepe tenetur sapiente architecto facere perspiciatis, fuga inventore iste blanditiis?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum perspiciatis architecto laudantium illo quas quidem quis temporibus id cum amet? Saepe tenetur sapiente architecto facere perspiciatis, fuga inventore iste blanditiis?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum perspiciatis architecto laudantium illo quas quidem quis temporibus id cum amet? Saepe tenetur sapiente architecto facere perspiciatis, fuga inventore iste blanditiis?
      </p>
      <div class="video-container">
        <iframe class="gameplay-video"
          src="https://www.youtube.com/embed/ULoSnMyPF9k"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope;"
          allowfullscreen>
        </iframe>
      </div>
      <h2>Features</h2>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum perspiciatis architecto laudantium illo quas quidem quis temporibus id cum amet? Saepe tenetur sapiente architecto facere perspiciatis, fuga inventore iste blanditiis?
      </p>
    </div>
    <!-- CONTENT -->

    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
