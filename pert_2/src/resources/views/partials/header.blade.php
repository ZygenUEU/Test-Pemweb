<!-- Navbar -->
<nav class="fixed-top" id="myNavbar">
    <div class="topNav"></div>
    <div class="myNav-wrapper" style="z-index: 1;">
        <img src="https://drive.google.com/uc?export=view&id=16dKuEnzng_YEDA6FkkHgYMd0SKyOvtIP" alt="" class="logo-1">
        <div class="myNav">
            <a href="{{ route('Home') }}" class="navigation">Home</a>
            <a href="{{ route('About') }}" class="navigation">About</a>
            <a href="{{ route('Contact') }}" class="navigation">Contact</a>
            <div class="dropdown myNav-dropdown">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bars" style="color: aliceblue;"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Home</a></li>
                  <li><a class="dropdown-item" href="#">About</a></li>
                  <li><a class="dropdown-item" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- myNav -->