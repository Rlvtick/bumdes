<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - BUM DESA ADHINATA MANDIRI KEDUNGUDI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="logo">
                    <img src="img/bumdeslogo.png" alt="Logo">
                    <div class="logo-text">
                        <span>BUM DESA ADHINATA</span>
                        <span>MANDIRI KEDUNGUDI</span>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a href="{{url('/home')}}">Home</a></li>
                        <li class="dropdown"><a href="#">Profil <img src="img/arrow.png" class="arrow" alt="arrow"></a>
                            <div class="dropdown-content">
                                <a href="{{url('/visi misi')}}">Visi dan Misi</a>
                            </div>
                        </li>
                        <li class="dropdown"><a href="#">Unit Usaha <img src="img/arrow.png" class="arrow" alt="arrow"></a>
                            <div class="dropdown-content">
                                <a href="{{url('sky park hill')}}">Sky Park Hill</a>
                                <a href="{{url('pos pendakian')}}">Pos Pendakian</a>
                                <a href="{{url('hippam')}}">HIPPAM</a>
                                <a href="{{url('bank sampah')}}">Bank Sampah</a>
                            </div>
                        </li>
                        <li><a href="{{url('struktur organisasi')}}">Struktur Organisasi</a></li>
                        <li><a href="{{url('berita')}}">Berita</a></li>
                        <li><a href="{{url('kontak')}}">Kontak</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="green-line"></div>
    </header>

    <section class="slideshow-container">
        <div class="mySlides fade">
            <img src="img/main-image.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/bs.jpeg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/sph4.JPG" style="width:100%">
        </div>

        <div class="dots-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>

    <div class="green-divider"></div>

    <section class="overview" style="background-image: url('img/Rectangle 14.png');">
        <div class="overlay">
            <h1>OVERVIEW</h1>
        </div>
    </section>

    <section class="units-section">
        <div class="unit">
            <div class="unit-content">
                <h2>Sky Park Hill (SPH)</h2>
                <p>Sky Park Hill adalah unit <strong>BUMDes Adhinata Mandiri Kedungudi</strong> yang berada di bagian selatan desa, lebih tepatnya di atas tanah kas desa (TKD). Sky Park Hill merupakan satu-satunya unit yang menjalankan pujasera dengan pemandangan persawahan dan Gunung Welirang.</p>
            </div>
            <img src="img/sphmain.png" alt="Sky Park Hill">
        </div>
        <div class="unit">
            <div class="unit-content">
                <h2>Pos Pendakian</h2>
                <p>Pos Pendakian via Desa Kedungudi mencakup beberapa gunung, yaitu Gunung Penanggungan, Gunung Bekel, dan Gunung Sarah Klopo. Pendakian gunung via Desa Kedungudi sangat diminati oleh wisatawan karena pemandangannya dan jalur treknya yang melintasi candi-candi sebagai cagar budaya.</p>
            </div>
            <img src="img/gpmain.jpeg" alt="Pos Pendakian">
        </div>
        <div class="unit">
            <div class="unit-content">
                <h2>HIMPUNAN PENDUDUK PEMAKAI AIR MINUM (HIPPAM)</h2>
                <p><strong>BUMDes Adhinata Mandiri Kedungudi</strong> uga mempunyai unit yang mengelola air di desa Kedungudi, yaitu unit HIPPAM <strong>Tirta Agung Jaya</strong>. Pengelola unit ini memiliki struktur yang terdiri dari RT dan RW Desa Kedungudi.</p>
            </div>
            <img src="img/hippambest.jpeg" alt="HIPPAM">
        </div>
        <div class="unit">
            <div class="unit-content">
                <h2>BANK SAMPAH</h2>
                <p><strong>Bank Sampah Segunung Harto</strong> dikelola oleh ibu-ibu PKK dan diketuai oleh Ibu Kades Desa Kedungudi. Demi menjaga kebersihan desa, Bank sampah mempunyai program kerja sama dengan warga untuk mengumpulkan sampah yang terdapat diseluruh desa.</p>
            </div>
            <img src="img/bsmain.jpeg" alt="Bank Sampah">
        </div>
    </section>

    <section class="berita-section">
        <h2>BERITA BUMDES</h2>
        <div class="line"></div>
        <p>Dapatkan berita terkini untuk pengembangan dan kegiatan BUMDes, usaha desa, dan lain-lain dari para penggerak ekonomi desa.</p>
        <div class="button-container">
            <a href="{{url('berita')}}" class="read-more-top">Read more...</a>
        </div>
    </section>

        <div class="cards">
            <div class="card" onclick="window.location.href='{{url('/berita1')}}'">
                <img src="img/berita1.jpeg" alt="Berita 1">
                <h3><a href="{{url('/berita1')}}" class="news-link">Festival Bazar UMKM: Upaya KKN-BBK 4 Universitas Airlangga untuk Mewujudkan Ekonomi Berkelanjutan di Desa Kedungudi</a></h3>
                <div class="berita-summary">
                    <p>BUMDes Adhinata Mandiri Kedungudi - Pada hari Minggu, 21 Juli 2024, di Sky Park Hill, Desa Kedungudi, Trawas, Mojokerto, diadakan Festival Bazar UMKM yang diselenggarakan oleh mahasiswa KKN-BBK 4 Universitas Airlangga. Acara ini berfokus pada promosi dan dukungan untuk pelaku UMKM lokal, menampilkan produk unggulan desa kepada masyarakat luas.</p>
                </div>
                <div class="button-container">
                    <a href="{{url('/berita1')}}">Read more...</a>
                </div>
            </div>
            <div class="card" onclick="window.location.href='{{url('/berita2')}}'">
                <img src="img/berita2.jpeg" alt="Berita 2">
                <h3><a href="{{url('/berita2')}}" class="news-link">Penanaman Pohon Bersama PT. BETTS Indonesia di Desa Kedungudi dalam Memperingati World Environment Day</a></h3>
                <div class="berita-summary">
                    <p>BUMDes Adhinata Mandiri Kedungudi - Pada hari Rabu, 17 Juli 2024, Desa Kedungudi menggelar acara penanaman pohon bersama dalam rangka memperingati World Environment Day. Kegiatan ini dilakukan di area persawahan belakang Sky Park Hill (SPH).</p>
                </div>
                <div class="button-container">
                    <a href="{{url('/berita2')}}">Read more...</a>
                </div>
            </div>
            <div class="card" onclick="window.location.href='{{url('/berita3')}}'">
                <img src="img/berita3.jpeg" alt="Berita 3">
                <h3><a href="{{url('/berita3')}}" class="news-link">Pelatihan Excel untuk Pembukuan Keuangan Unit Usaha BUMDes Adhinata Mandiri Kedungudi</a></h3>
                <div class="berita-summary">
                    <p>BUMDes Adhinata Mandiri Kedungudi - Pada hari Minggu, 29 Juni 2024, BUMDes Adhinata Mandiri Kedungudi akan mengadakan pelatihan tentang cara input pembukuan pemasukan dan pengeluaran menggunakan format Excel. Pelatihan ini ditujukan untuk beberapa unit usaha di bawah BUMDes, yaitu Bank Sampah, Sky Park Hill, Hippam, dan Pendakian. Tujuan dari pelatihan ini adalah untuk meningkatkan keterampilan administrasi dan pencatatan keuangan di setiap unit, sehingga pengelolaan keuangan dapat berjalan lebih efisien dan transparan.</p>
                </div>
                <div class="button-container">
                    <a href="{{url('/berita3')}}">Read more...</a>
                </div>
            </div>
        </div>
    </section>
    
<footer>
        <div class="footer-container">
            <div class="footer-left">
                <div class="footer-logo">
                    <img src="img/bumdeslogo.png" alt="Logo">
                    <div class="footer-social">
                        <p>Follow Us</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/profile.php?id=61561843724704&mibextid=ZbWKwL"><img src="img/facebook-asset.png" alt="Facebook"></a>
                            <a href="https://www.instagram.com/bumdesadhinatamandirikedungudi"><img src="img/instagram-asset.png" alt="Instagram"></a>
                            <a href="https://www.youtube.com/@BUMDESADHINATAMANDIRIKEDUNGUDI"><img src="img/youtube-asset.png" alt="YouTube"></a>
                        </div>
                    </div>
                </div>
                <div class="footer-logo-text">
                    <span>BUM DESA ADHINATA</span>
                    <span>MANDIRI KEDUNGUDI</span>
                </div>
            </div>
            <div class="footer-contact">
                <p><img src="img/location-asset.png" alt="Location" class="contact-icon"> <strong>ALAMAT :</strong><br><span class="contact-details">Jl. Selokelir No. 26 RT 01/RW 01, Desa Kedungudi, Kec. Trawas, 61375</span></p>
                <p><img src="img/phone-asset.png" alt="Phone" class="contact-icon"> <strong>NO. TELPON :</strong><br><span class="contact-details">+62 822 2831 6181</span></p>
                <p><img src="img/email-asset.png" alt="Email" class="contact-icon"> <strong>EMAIL :</strong><br><span class="contact-details">bumdesadhinatamandirikedungudi@gmail.com</span></p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
