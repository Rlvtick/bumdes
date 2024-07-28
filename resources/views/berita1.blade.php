<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - BUM DESA ADHINATA MANDIRI KEDUNGUDI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/berita1.css') }}">
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

    <section class="banner">
        <img src="img/main-image.png" alt="Banner Image">
        <div class="overlay"></div>
        <div class="banner-text">
            <h1>BERITA BUMDES</h1>
            <h2>Berita</h2>
        </div>
    </section>

    <div class="green-divider"></div> <!-- Green line added below the banner -->

    <section class="berita-content">
        <div class="text-section">
            <h1>Festival Bazar UMKM: Upaya KKN-BBK 4 Universitas Airlangga untuk Mewujudkan Ekonomi Berkelanjutan di Desa Kedungudi</h1>
            <h2>Minggu, 21 Juli 2024</h2>
        </div>
        <img src="img/berita1.jpeg" alt="Berita Image">
        <div class="berita-summary">
            <p>BUMDes Adhinata Mandiri Kedungudi - Pada hari Minggu, 21 Juli 2024, di Sky Park Hill, Desa Kedungudi, Trawas, Mojokerto, diadakan Festival Bazar UMKM yang diselenggarakan oleh mahasiswa KKN-BBK 4 Universitas Airlangga. Acara ini berfokus pada promosi dan dukungan untuk pelaku UMKM lokal, menampilkan produk unggulan desa kepada masyarakat luas.</p>
            <p>Bazar ini merupakan hasil kerjasama mahasiswa KKN-BBK 4 dengan BUMDes Adhinata Mandiri Kedungudi, serta didukung penuh oleh Universitas Airlangga. Produk yang dipamerkan meliputi kerajinan tangan, aksesoris, makanan khas seperti keripik samiler, jamu, dan berbagai produk lainnya.</p>
            <p>Festival dimulai dengan senam pagi yang diikuti oleh ibu-ibu Desa Kedungudi, menciptakan suasana segar. Acara resmi dibuka setelah Dzuhur, dipandu oleh MC dan diisi sambutan dari Ketua Pelaksana, Firnanda Aldi Pujangga, dan Kepala Desa Kedungudi, Dul Mukti.</p>
            <p>Festival ini dihadiri oleh berbagai tokoh penting seperti perangkat desa, Babinsa, Bhabinkamtibmas, serta Dosen Pembimbing Lapangan Universitas Airlangga, Nuzul Qur'aniati. Kehadiran warga desa menambah semarak acara, yang juga menampilkan pertunjukan menarik seperti penampilan menyanyi dan menari dari anak-anak SD setempat, senam dari karang taruna, dan kesenian tradisional Jawa Timur "Bantengan".
            <p>Mahasiswa KKN-BBK 4 berperan aktif dalam persiapan acara, mulai dari mencari sponsor, mengatur jadwal, hingga berkoordinasi dengan pelaku UMKM. Keberhasilan festival ini diharapkan dapat meningkatkan kesadaran masyarakat tentang potensi UMKM lokal dan mendorong perekonomian Desa Kedungudi. Festival ini juga diharapkan menjadi contoh bagi kegiatan serupa di masa depan, yang dapat memberikan manfaat ekonomi dan sosial bagi desa-desa lain.</p>        
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <div class="footer-logo">
                    <img src="img/bumdeslogo.png" alt="Logo">
                    <div class="footer-social">
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
</body>
</html>