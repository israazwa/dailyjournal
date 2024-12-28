<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Whatt</title>
    <link rel="icon" href="img/logo.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- nav start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Cat03.jpg/640px-Cat03.jpg"
          alt="logo"
          style="width: 40px; height: 40px; margin-right: 1px"
        />
        <a class="navbar-brand text-dark" href="#home"
          ><b>Russian Armored</b></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#hero">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutme">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
            <li class="nav-item">
              <button id="darkButton" class="me-2">
                <i class="nav-link bi bi-moon-stars"></i>
              </button>
            </li>
            <li class="nav-item">
              <button id="lightButton">
                <i class="nav-link bi bi-brightness-high"></i>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->
    <!-- hero start -->
    <section
      id="hero"
      class="isi text-center p-5 bg-info-subtle text-sm-start text-dark"
    >
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img
            src="https://gdb.rferl.org/f7c4e2a3-a8bc-4413-999c-53a5180f1c7e_cx0_cy2_cw0_w1080_h608.jpg"
            class="img-fluid"
            width="320"
          />
          <div>
            <h1 class="fw-bold dispaly-4">Russian Armored</h1>
            <h4 class="lead dispaly-6">
              The Armed Forces of the Russian Federation,[a] commonly referred
              to as the Russian Armed Forces, are the military of Russia. They
              are organized into three service branches—the Ground Forces, Navy,
              and Aerospace Forces—two independent combat arms (the Strategic
              Rocket Forces and Airborne Forces),[11] and the Special Operations
              Forces Command.
            </h4>
            <h6>
              <span id="tanggal"></span>
              <span id="jam"></span>
            </h6>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->
    <!-- article start -->
    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold dispaly-4 pb-3">Article</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
          <div class="col">
            <div class="card h-100">
              <img
                src="https://thedefensepost.com/wp-content/uploads/2021/07/96257868_armatatankt14afp9may17.jpg"
                class="card-img-top"
                alt="..."
              />
              <div></div>
              <div class="card-body">
                <h5 class="card-title">T-14 Armata</h5>
                <p class="card-text">
                  T-14 Armata adalah tank tempur utama generasi keempat Rusia
                  yang dirancang oleh Ural Design Bureau of Transport
                  Machine-Building dan Uralvagonzavod. Tank ini pertama kali
                  diluncurkan pada Mei 2015 dalam parade Moscow Victory Day.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"
                  >Last updated 15 mins ago</small
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/2008_Moscow_Victory_Day_Parade_-_BMD-4.jpg/640px-2008_Moscow_Victory_Day_Parade_-_BMD-4.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">BMD-4M</h5>
                <p class="card-text">
                  BMD-4 adalah kendaraan tempur infanteri amfibi yang masuk
                  dalam pelayanan Pasukan Lintas Udara Rusia. Menggunakan dua
                  air-jet di kedua sisi lambung belakang memungkinkan kecepatan
                  maksimum 10kmph di atas air. Mengintegrasikan baling-baling
                  trim, pompa lambung kapal otomatis dan snorkeling mendukung
                  kemampuan amfibi, serta melindungi awaknya dari tembakan
                  senjata ringan dan artileri.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"
                  >Last updated 5 mins ago</small
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img
                src="https://euro-sd.com/wp-content/uploads/2024/09/2S35-Koalitsiya-SV_RecoMonkey-1024x683.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">2S19 Msta-S</h5>
                <p class="card-text">
                  2S19 Msta-S adalah artileri gerak self-propelled howitzer 152
                  mm yang dirancang oleh Uni Soviet dan Rusia. Artileri ini
                  mulai beroperasi pada tahun 1989 sebagai penerus dari SO-152.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"
                  >Last updated 35 mins ago</small
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img
                src="https://i.namu.wiki/i/jTng8cM5-_vOBBh755ueBx_MQ21yK272LGm_5f_pex-UoZaoe9N_qgV6BDup6A_UdidNB-mwlWAwQBA42EYS9w.webp"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">T90M</h5>
                <p class="card-text">
                  The T-90AM is a Russian made third-generation main battle
                  tank. It's the last modernized version of the T-90A. It's main
                  weapon is the latest version of the 2A6M 125mm gun, the
                  2A46M-5, with the Kalina fire control system (the same as the
                  T-14)
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"
                  >Last updated 5 mins ago</small
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img
                src="https://fighting-vehicles.com/wp-content/uploads/2024/04/BMP-3-Derivatsiya-Banner.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">2s38</h5>
                <p class="card-text">
                  2S38 Derivatsiya-PVO adalah kendaraan antipesawat beroda
                  rantai yang dirancang untuk melawan berbagai jenis drone,
                  senjata berpresisi tinggi, dan target berlapis baja ringan.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"
                  >Last updated 5 mins ago</small
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- article end -->
    <!-- gallery start -->
    <section id="gallery" class="isi text-center p-5 bg-info-subtle text-dark">
      <div class="container">
        <h1 class="fw-bold dispaly-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://assets.kyivindependent.com/content/images/2023/02/gettyimages-1234870210-1662029687u4meb.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMRJ8rerbNDfcnz_5jVzGO-mYSQbXDLQfJeezC62EHWDktHjXcaFHThXhqEUOYJCuymkY&usqp=CAU"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://cdn.wavellroom.com/2022/09/51939874965_8eb8b46dfc_o-1920x1279.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmrTZP6hHHPmyzbqggQ_N8u_miD5rk9NwKbA&s"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://assets.kyivindependent.com/content/images/2023/02/kch-9642-1664218621kecoz.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- gallery end -->

    <!-- Schedule start -->
    <section id="schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold dispaly-4 pb-3">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-end">
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-header bg-danger">Senin</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Rekayasa Perangkat Lunak 12.30-15.00 | H.4.8
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-header bg-danger">Selasa</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Technopreunersip 10.30-12.00 | Kulino
                  </li>
                  <li class="list-group-item">
                    Basis Data Teori 12.30-14.10 | H.5.13
                  </li>
                  <li class="list-group-item">
                    Pendidikan Kewarganegaraan 18.30-20.00 | H.7
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-header bg-danger">Rabu</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Pemrograman Berbasis Data 10.20-12.00 | D.2.J
                  </li>
                  <li class="list-group-item">
                    Basis Data 12.30-14.10 | D.3.I
                  </li>
                  <li class="list-group-item">Probstat 15.30-18.00 | H.4.11</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-header bg-danger">Kamis</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Logika Informatika 09.30-15.00 | H.4.1
                  </li>
                  <li class="list-group-item">
                    Sistem Operasi 12.30-15.00 | H.4.11
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-header bg-danger">Jumat</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Free</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-header bg-danger">Sabtu</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Free</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Schedule end -->

    <!-- About Me start -->
    <section
      id="aboutme"
      class="isi text-center p-5 bg-info-subtle text-sm-start text-dark"
    >
      <div class="container">
        <h1 class="fw-bold dispaly-4 pb-3 text-center">About Me</h1>
        <div class="d-sm-flex flex-sm-row- align-items-center">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Cat03.jpg/640px-Cat03.jpg"
            class="img-fluid - rounded-circle me-3"
            width="320"
          />
          <div>
            <h4 class="lead dispaly-6">A11.2023.15287</h4>
            <h1 class="fw-bold dispaly-4">Isra Azwa</h1>
            <h4 class="lead dispaly-6">Program studi Tenik Informatika</h4>
            <h4>Universitas Dian Nuswantoro</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- footer start -->
    <footer class="text-center p-5">
      <div>
        <a href="#"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href="#"><i class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
        <a href="#"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
      </div>
      <div>IsraAzwa&copy; 2024</div>
    </footer>
    <!-- footer end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script>
      function aktifkanModeGelap() {
        // Set kelas untuk body
        document.body.classList.remove("bg-body-tertiary");
        document.body.classList.add("bg-secondary");

        // Set kelas untuk elemen-elemen dengan kelas "isi"
        const elemenIsi = document.getElementsByClassName("isi");
        for (let i = 0; i < elemenIsi.length; i++) {
          elemenIsi[i].classList.remove("bg-info-subtle", "text-dark");
          elemenIsi[i].classList.add("bg-black", "text-white");
        }

        // Set kelas untuk elemen card-body
        const cardBodies = document.querySelectorAll(".card-body");
        cardBodies.forEach((cardBody) => {
          cardBody.classList.remove("bg-info-subtle", "text-dark");
          cardBody.classList.add("bg-dark", "text-white");
        });
      }

      // Fungsi untuk mengaktifkan mode terang
      function aktifkanModeTerang() {
        // Set kelas untuk body
        document.body.classList.remove("bg-secondary");
        document.body.classList.add("bg-body-tertiary");

        // Set kelas untuk elemen-elemen dengan kelas "isi"
        const elemenIsi = document.getElementsByClassName("isi");
        for (let i = 0; i < elemenIsi.length; i++) {
          elemenIsi[i].classList.remove("bg-dark", "text-white");
          elemenIsi[i].classList.add("bg-info-subtle", "text-dark");
        }

        // Set kelas untuk elemen card-body
        const cardBodies = document.querySelectorAll(".card-body");
        cardBodies.forEach((cardBody) => {
          cardBody.classList.remove("bg-dark", "text-white");
          cardBody.classList.add("bg-light", "text-dark");
        });
      }

      // Fungsi untuk menampilkan jam dan tanggal
      function tampilWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1; // Menambahkan 1 karena bulan mulai dari 0

        // Menampilkan tanggal dan jam
        document.getElementById("tanggal").innerHTML =
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear(); // Perbaiki sintaksis
        document.getElementById("jam").innerHTML =
          waktu.getHours() +
          ":" +
          String(waktu.getMinutes()).padStart(2, "0") + // Menambahkan nol di depan jika kurang dari 10
          ":" +
          String(waktu.getSeconds()).padStart(2, "0"); // Menambahkan nol di depan jika kurang dari 10

        // Set timeout untuk memanggil fungsi ini setiap detik
        setTimeout(tampilWaktu, 1000);
      }

      // Tetapkan event listener untuk tombol dark mode dan light mode
      window.onload = function () {
        document.getElementById("darkButton").onclick = aktifkanModeGelap;
        document.getElementById("lightButton").onclick = aktifkanModeTerang;
        tampilWaktu(); // Panggil fungsi tampilWaktu saat halaman dimuat
      };
    </script>
  </body>
</html>
