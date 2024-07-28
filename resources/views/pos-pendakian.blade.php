<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Park Hill - BUM DESA ADHINATA MANDIRI KEDUNGUDI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/pospendakian.css') }}">
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
            <h1>POS PENDAKIAN</h1>
            <h2>Unit Usaha <img src="img/rightarrow.png" class="right-arrow" alt="Right Arrow"><span>Pos Pendakian</span></h2>
        </div>
    </section>

    <div class="green-divider"></div> <!-- Green line added below the banner -->

    <div class="content-section">
        <div class="container">
            <h1 class="centered-title">Pos Pendakian</h1>

            <div class="section-content">
                <div class="section-left">
                    <h2>Pendakian Via Kedungudi</h2>
                    <div class="green-divider-small"></div>
                    <div class="image-gallery">
                        <div class="gallery-item">
                            <img src="img/gp.jpg" alt="Gunung Pananggungan" class="content-image">
                            <p>Gunung Pananggungan Via Kedungudi</p>
                            <p>1,653 MDPL</p>
                        </div>
                        <div class="gallery-item">
                            <img src="img/gb.jpg" alt="Gunung Bekel" class="content-image">
                            <p>Gunung Bekel Via Kedungudi</p>
                            <p>1,238 MDPL</p>
                        </div>
                        <div class="gallery-item">
                            <img src="img/psk.jpg" alt="Gunung Sarah Klepa" class="content-image">
                            <p>Puncak Sarah Klopo Via Kedungudi</p>
                            <p>1,235 MDPL</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section-content stats-section">
                <div class="stats-description">
                    <div class="stats">
                        <p><img src="img/mountain.png" alt="Mountain Icon"> 1 GUNUNG</p>
                        <p><img src="img/hill.png" alt="Peak Icon"> 2 PUNCAK</p>
                        <p><img src="img/candi.png" alt="Temple Icon"> 12 CANDI</p>
                    </div>
                    <div class="description">
                        <p>Pos pendakian ini menawarkan pengalaman alam dan budaya dengan tiga fitur utama: sebuah gunung untuk pendakian, dua puncak dengan panorama indah, dan dua belas candi yang memberikan sentuhan sejarah sepanjang rute. Tempat ini cocok untuk pecinta alam dan sejarah, menggabungkan petualangan fisik dan eksplorasi budaya.</p>
                    </div>
                </div>
                <div class="section-right">
                    <img src="img/gpbest.jpg" alt="Info Image" class="info-image">
                </div>
            </div>

            <div class="section-content trail-map-section">
                <div class="section-left">
                    <h2>Jalur Pendakian Via Kedungudi</h2>
                    <div class="green-divider-small jalur"></div>
                    <img src="img/map.png" alt="Trail Map" class="trail-map-image">
                </div>
                <div class="section-right follow-us">
                    <h2>Follow us</h2>
                    <div class="social-icons">
                        <p><img src="img/instagram-asset.png" alt="Instagram Icon" class="contact-icon"> <strong>Instagram</strong></p>
                        <span class="social-handle">@penanggunganviakedungudi</span>
                        <p><img src="img/facebook-asset.png" alt="Facebook Icon" class="contact-icon"> <strong>Facebook</strong></p>
                        <span class="social-handle">@penanggunganviakedungudi</span>
                        <p><img src="img/tiktok.png" alt="TikTok Icon" class="contact-icon"> <strong>TikTok</strong></p>
                        <span class="social-handle">@basecamp_kedungudi</span>
                        <p><img src="img/phone-asset.png" alt="Phone Icon" class="contact-icon"> <strong>No. Telpon</strong></p>
                        <span class="social-handle">+62 813 4933 4819</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
</body>
</html>