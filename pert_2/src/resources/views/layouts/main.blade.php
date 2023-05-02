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
        <img src="https://drive.google.com/uc?export=view&id=1s8fyKyFquP2uP2N4NFBbnNbvBgVZ_0IR" alt="" class="banner">
    </div>
    <!-- Banner -->

    <!-- CONTENT -->
    <div class="content-wrapper">
        <div class="search-wrapper">
            <div class="myContainer">
                <div class="search-form-wrapper">
                    <input type="text" id="nama" name="nama" class="search-form" placeholder="Search">
                    <button class="search-button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>

                <div class="dropdown mt-2">
                    <button class="btn btn-secondary dropdown-toggle category-btn" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="myCard card-image" style="background-image: url(https://drive.google.com/uc?export=view&id=1hmjwdtP5b1mWH4j4ZiehafAPQrjk53oj);">
            <div class="myCard-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mycard-content-left-bg">
                            <h2 style="text-align: center;"><span style="color: rgb(255, 156, 7);">AR</span>SHOOT</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="myCard-content-right-bg">
                            <a href="{{ route('GameInfo') }}" class="button-1">VIEW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="myCard card-image" style="background-image: url(https://drive.google.com/uc?export=view&id=11xaiCyoxmsLhtmIVOkL03hqDMHgLlzqT);">
            <div class="myCard-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mycard-content-left-bg">
                            <h2 style="text-align: center;">TARUNG</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="myCard-content-right-bg">
                            <a href="{{ route('GameInfo') }}" class="button-1">VIEW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat adipisci cumque nemo doloribus repellendus,
            non neque, quibusdam cum necessitatibus deserunt maiores, perferendis laboriosam harum inventore hic! Eos
            possimus quaerat obcaecati?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat adipisci cumque nemo doloribus repellendus,
            non neque, quibusdam cum necessitatibus deserunt maiores, perferendis laboriosam harum inventore hic! Eos
            possimus quaerat obcaecati?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat adipisci cumque nemo doloribus repellendus,
            non neque, quibusdam cum necessitatibus deserunt maiores, perferendis laboriosam harum inventore hic! Eos
            possimus quaerat obcaecati?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat adipisci cumque nemo doloribus repellendus,
            non neque, quibusdam cum necessitatibus deserunt maiores, perferendis laboriosam harum inventore hic! Eos
            possimus quaerat obcaecati?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat adipisci cumque nemo doloribus repellendus,
            non neque, quibusdam cum necessitatibus deserunt maiores, perferendis laboriosam harum inventore hic! Eos
            possimus quaerat obcaecati?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat adipisci cumque nemo doloribus repellendus,
            non neque, quibusdam cum necessitatibus deserunt maiores, perferendis laboriosam harum inventore hic! Eos
            possimus quaerat obcaecati?

        </h1>
    </div>
    <!-- CONTENT -->

    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
