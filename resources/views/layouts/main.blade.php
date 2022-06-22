<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- My Stle CSS --}}
    <link rel="stylesheet" href="css/styles.css">

    <title>Sistem PPDB | {{ $title }}</title>
  </head>
  <body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-success link fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="PPDB/images/logo smp.png" width="35" height="35" class="d-inline-block align-text-top">
              SMP AL-AZHAR MUNCAR
            </a>
          </div>

        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="home" href="#">Home</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ ($title === "Panduan") ? 'active' : ''}}" href="panduan" id="panduan">Panduan Pendaftaran</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "/login") ? 'active' : ''}}" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "/register") ? 'active' : ''}}" href="/register">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    {{-- END OF NAVBAR --}}

    {{-- Menu Halaman Home --}}
        <div class="mt-4">
            {{-- Container adalah nama untuk home --}}
            @yield('container')

            @yield('panduan')


        </div>
    {{-- END OF Menu Halaman Panduan --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
