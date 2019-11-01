<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fonts/beyond_the_mountains-webfont.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('plugin-frameworks/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/ionicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('common/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('common/nav.css') }}" />

    <title>@yield('title')</title>

    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.4.0/js/all.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-steel fixed-top">
        <a class="navbar-brand fn-b" href="#">Queen Burger's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ul-e">
                <li class="nav-item active li-e">
                    <a class="nav-link fn-a" href="/">HOME</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link fn-a" href="#">ABOUT US</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link fn-a" href="#">SERVICE</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link fn-a" href="#">CONTACT</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-right mr">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn-action" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Change Password</a>
                <a class="dropdown-item" href="#">profil</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Login</a>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <!-- Body -->

    @yield('container')

    <!-- Footer -->
    <footer class="pb-50 pt-70 pos-relative">
      <div class="pos-top triangle-bottom"></div>
      <div class="container-fluid">
        <a href="#"><img src="static/images/heading_logo.png" alt="logo" width="30" height="50"></a>
          <div class="pt-30">
            <p class="underline-secondary"><b>Address : </b></p>
            <p>Jalan Kemerdekaan Indonesia</p>
          </div>

          <div class="pt-30">
            <p class="underline-secondary"><b>Phone : </b></p>
            <a href="tel:+62 321 321 3213">+62 321 321 3213</a>
          </div>

          <div class="pt-30">
            <p class="underline-secondary"><b>Email : </b></p>
            <a href="mailto:arikanami@gmail.com">arikanamis@gmail.com</a>
          </div>

          <ul class="icon mt-30">
            <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
            <li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
            <li><a href="#"><i class="ion-social-vimeo"></i></a></li>
          </ul>

          <p class="color-light font-9 mt-50 mt-sm-30">
            Queen Burger
          </p>
      </div>
    </footer>
    <!-- Footer -->





    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('plugin-frameworks/swiper.js') }}"></script>
    <script src="{{ asset('common/scripts.js') }}"></script>
  </body>
</html>