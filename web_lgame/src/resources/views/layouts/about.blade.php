<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

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
        <div class="mb-5" style="margin-top: 100px;">
            <div class="row">
                <div class="col-md-4 order-first order-md-first">
                    <img src="https://drive.google.com/uc?export=view&id=1ai56WGFk2l9jGOprMiXz8Dx3-gUckKaq" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 order-last order-md-last">
                    <div class="box-shape" style=" background-color: #333333">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem dignissimos
                        labore incidunt laboriosam et? Natus adipisci quaerat, inventore, quasi beatae libero odit iure
                        odio, corrupti cupiditate tempora accusamus eaque!
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <div class="row">
                <div class="col-md-8 order-last order-md-first">
                    <div class="box-shape" style=" background-color: #333333">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem dignissimos
                        labore incidunt laboriosam et? Natus adipisci quaerat, inventore, quasi beatae libero odit iure
                        odio, corrupti cupiditate tempora accusamus eaque!
                    </div>
                </div>
                <div class="col-md-4 order-first order-md-last">
                    <img src="https://drive.google.com/uc?export=view&id=1ai56WGFk2l9jGOprMiXz8Dx3-gUckKaq" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT -->

    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
