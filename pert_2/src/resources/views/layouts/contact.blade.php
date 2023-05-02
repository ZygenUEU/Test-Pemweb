<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    @include('partials.styles')
</head>

<body>
    @include('partials.header')

    <!-- Banner -->
    <div class="effect-vignitte">
        <img src="https://drive.google.com/uc?export=view&id=1s8fyKyFquP2uP2N4NFBbnNbvBgVZ_0IR" alt=""
            class="banner">
    </div>
    <div class="effect-bottom-fade"></div>
    <!-- Banner -->

    <!-- CONTENT -->
    <div class="content-wrapper">
        <h1 class="text-center">
            Let's Make The Gaming Experience Better
        </h1>
        <h3 class="text-center" style="margin-top: 20px; font-weight: lighter;">
            Contact Me On 
        </h3>
        <div class="mb-5 mt-5">
          <div class="row">
            <div class="col-md-4">
              <div class="text-center">
                <i class="fa fa-solid fa-phone-volume" style="font-size: 80px;"></i>
                <br>
                <p class="mt-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ea minus culpa enim impedit dolorem debitis, ullam cumque amet quae eaque porro quod unde repudiandae accusamus! Doloremque explicabo sequi eius.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-center">
                <i class="fa fa-brands fa-whatsapp" style="font-size: 80px;"></i>
                <br>
                <p class="mt-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ea minus culpa enim impedit dolorem debitis, ullam cumque amet quae eaque porro quod unde repudiandae accusamus! Doloremque explicabo sequi eius.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-center">
                <i class="fa fa-regular fa-envelope" style="font-size: 80px;"></i>
                <br>
                <p class="mt-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ea minus culpa enim impedit dolorem debitis, ullam cumque amet quae eaque porro quod unde repudiandae accusamus! Doloremque explicabo sequi eius.
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- CONTENT -->

    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
