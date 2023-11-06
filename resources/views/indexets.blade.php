<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- CSS Hajid -->
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <title>Biodata Hajid</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hajid Alauddin Ramadhan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#activities">My Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img class="rounded-circle" src="{{ asset('gambar/Fotoprofil.jpeg') }}" width="30%">
            <h1 class="display-4">Hajid Alauddin Ramadhan</h1>
            <p class="lead">Information System Student</p>
        </div>
    </div>


    <!-- Baris About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h1>About</h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="indent text-justify">Halo perkenalkan nama Saya Hajid Alauddin Ramadhan biasa dipanggil Hajid.Disini saya akan menceritakan sedikit tentang saya.Saya berasal dari Surabaya Jawa Timur.Saya adalah anak terakhir dari kedua bersaudara.</p>
                    <p class="indent text-justify">Saya sekarang berkuliah pada Institut Teknologi Sepuluh Nopember (ITS) di jurusan Sistem Informasi. Berkuliah di ITS merupakan sebuah ambisi ku sejak melihat kakak saya berkuliah juga disana . Ngomong ngomong soal ITS mengapa aku memilih jurusan Sistem Informasi? karena dari awal aku sudah suka dengan perkembangan pada dunia IT dan juga saya suka atau kreativitas pada layar komputer. </p>
                    <p class="indent text-justify">Membahas Ketertarikan saya, saya juga tertarik pada non akademik yaitu kepanitiaan. Pada saat masa SMA saya mengikuti kabinet OSIS Sma 15 surabaya dengan begitu saya memiliki banyak pengalaman pada kepanitiaan. Begitu juga Kuliah saya mengikuti beberapa kepanitian seperti maba cup,ISE dan lain lain.</p>

                </div>
            </div>

            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('gambar/IMG_8646.JPG') }}" alt="Los Angeles" width="1100" height="550">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('gambar/Jerman.JPG') }}" alt="Chicago" width="1100" height="550">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('gambar/Jerman2.JPG') }}" alt="New York" width="1100" height="550">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
                <br><br><br><br><br>
              </div>
        </div>
    </section>
    <!-- Baris Activities -->

    <section id="activities" class="activites" bg-light pb-4>
        <div clas="container">
            <div class="row mb-4 pt-4">
                <div class="col text-center">
                    <h1>My Activities</h1>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="text-center">Berikut ini adalah kegiatan-kegiatan didalam kampus yang saya lakukan
                            selama
                            Perkuliahan</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row mb-4">
                    <div class="col-md">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('gambar/SUP.JPEG') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center"><b>Supporteran</b></p>
                                <p class="text-justify"> Kegiatan ini adalah bentuk dukungan kepada tim futsal Sistem Informasi yang sedang bertanding di ajang lomba IFC. Acara ini berlangsung pada September - Oktober 2022. Kegiatan ini sangat seru dimana satu jurusan melawan jurusan lain. Tidak hanya tim yang bertanding yang saling melawan namun kita sebagai supporter juga tidak mau kalah lantang dengan supporter jurusan lain.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('gambar/Mabacup.JPG') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center"><b>Maba Cup</b></p>
                                <p class="text-justify"> Kegiatan kedua saya yaitu Kepanitiaan MabaCup2k22. Maba Cup sendiri adalah acara perlombaaan antar jurusan dari maba oleh maba dan untuk maba. Disini saya menjadi bagian staff perlengkapan dan berlangsung pada semester.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('gambar/Gerigi.JPG') }}" alt="Card image cap" height="250px">
                            <div class="card-body">
                                <p class="card-text text-center"><b>Gerigi 2K23</b></p>
                                <p class="text-justify"> Gerigi adalah acara tahunan dari ITS untuk menyambut para maba untuk memperkenalkan isi atau semua hal dari ITS itu sendiri. Disini saya menjadi staff Secretarial atau disebut sebagai kestari yang bertugas mendampingi maba bersama mentor selama acara berlangsung.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('gambar/Paradigm.jpg') }}" alt="Card image cap" height="250px">
                            <div class="card-body">
                                <p class="card-text text-center"><b>Information Systems Expo</b></p>
                                <p class="text-justify"> Information Systems Expo (ISE!) adalah acara tahunan dari Departemen Sistem Informasi. Disini saya berperan menjadi staff FOH dari divisi Paradigm. Acara ini diselenggarakan semester 2 hingga sekarang. Di ISE saya bertugas untuk menyiapkan venue dan vendor untuk bagian acara Paradigm.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('gambar/Ilits.JPG') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center"><b>Ini Lho ITS</b></p>
                                <p class="text-justify"> Ini Lho ITS adalah acara dari Bem its untuk memperkenalkan ITS ke seluruh pelosok Indonesia. Disini saya bertugas sebagai Staff Ahli dari Logistik Tools and Equipment dan acara ini masih berlangsung hingga sekarang.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('gambar/Manage.JPG') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center"><b>MANAGE 2023</b></p>
                                <p class="text-justify"> Manage 2023 adalah acara pengkaderan dari HMSI untuk Sistem Informasi 2022. Acara ini diadakan mulai Semester 2 hingga berakhir pada 21 october 2023. Kita diajarkan banyak hal mulai dari Mengenali sesama angkatan, Basic Media Schooling, Mengenal kakak tingkat, hingga membuat Giant Flag. Meskipun sangat melelahkan tapi dampak yang diberikan sangat bermanfaat yaitu menumbuhkan solidaritas antar sesama angkatan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="feedbackForm" class="feedbackForm">
        <div class="container">
          <h1>Isi Pesan</h1>
          <form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
            <div class="input-control">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" class="form-control ">
            </div>
            <div class="input-control">
              <label for="email">Email:</label>
              <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="input-control">
              <label for="feedback">Subjek:</label>
              <input type="text" id="subjek" name="subjek" class="form-control">
            </div>
            <div class="input-control">
                <label for="feedback">Pesan</label>
                <input type="text" id="pesan" name="pesan" class="form-control">
              </div>
            <input type="submit" value="Submit" class="btn btn-primary buttonPost">
          </form>
        </div>
      </section>



    <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                  <h3>Hajid Alauddin Ramadhan</h3>
                  <p>
                    Institut Teknologi Sepuluh Nopember<br><br>
                    <strong>Phone:</strong>  085850230118<br>
                    <strong>Email:</strong> hajidramadhan@gmail.com<br>
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>


          </div>
        </div>
      </footer><!-- End Footer -->

    <br><br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
