<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Park Hill - BUM DESA ADHINATA MANDIRI KEDUNGUDI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sph.css') }}">
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
            <h1>SKY PARK HILL</h1>
            <h2>Unit Usaha <img src="img/rightarrow.png" class="right-arrow" alt="Right Arrow"><span>Sky Park Hill</span></h2>
        </div>
    </section>
    
    <div class="green-divider"></div> <!-- Green line added below the banner -->

    <section class="content-section">
        <div class="container">
            <h1 class="centered-title">Sky Park Hill (SPH)</h1>

            <div class="content">
                <div class="main-image">
                    <img src="img/sphmain.png" alt="Sky Park Hill Image">
                </div>
                <div class="description">
                    <p>Salah satu unit usaha BUMDes Adhinata Mandiri Kedungudi sejak Juni 2023.</p>
                    <p>Tempat kuliner yang memiliki pemandangan persawahan dan Gunung Weliran.</p>
                </div>
            </div>
        </div>

        <h2 class="gallery-heading">Sky Park Hill Gallery</h2>
        <div class="green-divider-small gallery-divider"></div> <!-- Divider line below the h2 -->

        <div class="gallery">
            <img src="img/sph1.JPG" alt="Gallery Image 1">
            <img src="img/sph2.JPG" alt="Gallery Image 2">
            <img src="img/sph3.JPG" alt="Gallery Image 3">
            <img src="img/sph4.JPG" alt="Gallery Image 4">
            <img src="img/sph5.JPG" alt="Gallery Image 5">
            <img src="img/sph6.JPG" alt="Gallery Image 5">
        </div>

        <h2 class="organization-heading">Struktur Organisasi</h2>
        <div class="green-divider-small organization-divider"></div> <!-- Divider line below the h2 -->

        <div class="organization-chart">
            <img src="img/structure.png" alt="Organizational Structure" class="org-structure-image">
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
</body>
</html>