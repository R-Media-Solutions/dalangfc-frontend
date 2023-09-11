<!--MAIN MENU WRAP BEGIN-->
<?php
    $uriSegments    = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $segment        = $this->uri->segment('1');
?>
<div class="main-menu-wrap sticky-menu">
    <div class="container">
        <a href="<?php echo BASE_URL; ?>" class="custom-logo-link"><img src="assets/images/logo/logo-white.png" width=84 alt="logo" class="custom-logo"></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#team-menu" aria-expanded="false">
            <span class="sr-only">Navigasi</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <nav class="navbar">
            <div class="collapse navbar-collapse" id="team-menu">
                <ul class="main-menu nav">
                    <li class="<?php echo ($segment == 'home' || $segment == '') ? "active" : " "; ?>">
                        <a href="<?php echo BASE_URL; ?>"><span>Beranda</span></a>
                    </li>
                    <li class="<?php echo ($segment == 'news') ? "active" : " "; ?>"><a href="<?php echo BASE_URL; ?>news"><span>Berita</span></a></li>
                    <li class="<?php echo ($segment == 'matches' || $segment == 'standing' || $segment == 'standing-cup' || $segment == 'broadcasts' || $segment == 'match-live' || $segment == 'live-text-stream' || $segment == 'upcoming-match') ? "active" : " "; ?>">
                        <a href="<?php echo BASE_URL; ?>matches"><span>Pertandingan</span></a>
                        <ul>
                            <li>
                                <a href="<?php echo BASE_URL; ?>standing"><span>Klasemen<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                                <ul>
                                    <li class="<?php echo ($segment == 'standing') ? "active" : " "; ?>" ><a href="<?php echo BASE_URL; ?>standing"><span>Liga</span></a></li>
                                    <li class="<?php echo ($segment == 'standing-cup') ? "active" : " "; ?>"><a href="<?php echo BASE_URL; ?>standing-cup"><span>Cup</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL; ?>broadcasts"><span>Jadwal Pertandingan<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                                <ul>
                                    <li class="<?php echo ($segment == 'broadcasts') ? "active" : " "; ?>"><a href="<?php echo BASE_URL; ?>broadcasts"><span>Siaran</span></a></li>
                                    <li class="<?php echo ($segment == 'match-live') ? "active" : " "; ?>"><a href="<?php echo BASE_URL; ?>match-live"><span>Pertandingan Langsung</span></a></li>
                                    <li class="<?php echo ($segment == 'live-text-stream') ? "active" : " "; ?>"><a href="<?php echo BASE_URL; ?>live-text-stream"><span>Berita Pertandingan Langsung </span></a></li>
                                    <li class="<?php echo ($segment == 'upcoming-match') ? "active" : " "; ?>"><a href="<?php echo BASE_URL; ?>upcoming-match"><span>Pertandingan Mendatang</span></a></li>
                                </ul>	
                            </li>
                            <!--
                            <li>
                                <a href="championships-archive.html"><span>championships archive<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                                <ul>
                                    <li><a href="championship.html"><span>championship information</span></a></li>
                                </ul>	
                            </li>
                            -->
                        </ul>
                    </li>
                    <li class="<?php echo ($segment == 'about-club' || $segment == 'club-stats') ? "active" : " "; ?>">
                        <a href="<?php echo BASE_URL; ?>about-club"><span>KLUB</span></a>
                        <ul>
                            <li class="<?php echo ($segment == 'about-club') ? "active" : " "; ?>"><a href="<?php echo BASE_URL; ?>about-club"><span>Sejarah Klub</span></a></li>
                            <li class="<?php echo ($segment == 'club-stats') ? "active" : " "; ?>"><a href="<?php echo BASE_URL; ?>club-stats"><span>Statistik Klub</span></a></li>
                        </ul>
                    </li>
                    <li class="<?php echo ($segment == 'player' || $segment == 'staff') ? "active" : " "; ?>">
                        <a href="<?php echo BASE_URL; ?>staff"><span>TIM</span></a>
                        <ul>
                            <li class="<?php echo ($segment == 'player') ? "active" : " "; ?>"><a href="<?php echo BASE_URL; ?>player"><span>Pemain</span></a></li>
                            <li class="<?php echo ($segment == 'staff') ? "active" : " "; ?>"><a href="<?php echo BASE_URL; ?>staff"><span>Staf / Official</span></a></li>
                        </ul>
                    </li>
                    <li class="<?php echo ($segment == 'contacts') ? "active" : " "; ?>"><a href="<?php echo BASE_URL; ?>contacts"><span>Hubungi Kami</span></a></li>
                </ul>
            </div>       
        </nav>
    </div>
</div>
<!--MAIN MENU WRAP END-->