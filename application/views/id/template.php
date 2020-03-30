<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$this->sistem->profil()->nama_sekolah?></title>
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url().'assets/admin/img/logo/'.$this->sistem->profil()->logo_sekolah?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Unicat project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/landing/')?>styles/bootstrap4/bootstrap.min.css">
        <link href="<?=base_url('assets/landing/')?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/landing/')?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/landing/')?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/landing/')?>plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/landing/')?>styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/landing/')?>styles/responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Aladin|Ceviche+One|Days+One|Germania+One&display=swap" rel="stylesheet">
    </head>
<body>

<div class="super_container">
	<header class="header">
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="header_content d-flex flex-row align-items-center justify-content-start responsive">
							<table width="45%" border="0" class="main_nav_contaner">
                                <tr>
                                    <td width="10%">
                                        <center>
                                            <a href="<?=site_url()?>">
                                                <img src="<?=base_url().'assets/admin/img/logo/'.$this->sistem->profil()->logo_sekolah?>" style="width: 50px">
                                            </a>
                                        </center>
                                    </td>
                                    <td width="70%">
                                        <a href="<?=site_url()?>">
                                            <span style="font-family: 'Aladin', cursive; font-size: 28px; color: black; padding-top: 10px; font-height: 10px; padding-left: 10px">
                                                <?php
                                                    if (!$this->agent->is_mobile()) {
                                                        echo ucfirst($this->sistem->profil()->inisial_sekolah);
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                   </td>
                                </tr>
                            </table>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
                                    <li class="<?=$this->uri->segment(2) == '' ? 'active' : null?>"><a href="<?=site_url()?>" >Home</a></li>
                                    <li class="<?=$this->uri->segment(2) == 'sambutan' || 
                                                $this->uri->segment(2) == 'visi' ? 'active' : null?>"><a href="<?=site_url()?>" >
                                        <a href="#" data-toggle="dropdown">Profil</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                                            <a class="dropdown-item" href="<?=site_url('id/sambutan')?>" style="font-size: 15px">Sambutan Kepala</a>
                                            <a class="dropdown-item" href="<?=site_url('id/visi')?>" style="font-size: 15px">Visi Misi</a>
                                            <a class="dropdown-item" href="<?=site_url('id/struktur')?>" style="font-size: 15px">Struktur Organisasi</a>
                                            <a class="dropdown-item" href="<?=site_url('id/sarana')?>" style="font-size: 15px">Sarana Prasarana</a>
                                            <a class="dropdown-item" href="<?=site_url('id/sekolah')?>" style="font-size: 15px">Data Sekolah</a>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="dropdown">Akademik</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                                            <a class="dropdown-item" href="#" style="font-size: 15px">Kurikulum</a>
                                            <a class="dropdown-item" href="#" style="font-size: 15px">Kalender</a>
                                            <a class="dropdown-item" href="#" style="font-size: 15px">Jadwal Pelajaran</a>
                                            <a class="dropdown-item" href="#" style="font-size: 15px">Jadwal Ujian</a>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="dropdown">Sekolah</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                                            <a class="dropdown-item" href="#" style="font-size: 15px">Tenaga Pendidik</a>
                                            <a class="dropdown-item" href="#" style="font-size: 15px">Tenaga Kependidikan</a>
                                            <a class="dropdown-item" href="#" style="font-size: 15px">Peserta Didik</a>
                                            <a class="dropdown-item" href="#" style="font-size: 15px">Ekstrakulikuler</a>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="dropdown">Kegiatan</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                                            <a class="dropdown-item" href="#" style="font-size: 15px">Agenda</a>
                                            <a class="dropdown-item" href="#" style="font-size: 15px">Galeri</a>
                                            <a class="dropdown-item" href="#" style="font-size: 15px">Pengumuman</a>
                                        </ul>
                                    </li>
									<li><a href="#">Berita</a></li>
								</ul>
								<!-- Hamburger -->
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->
	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
                <li><a href="<?=site_url()?>" >Home</a></li>
                <li>
                    <a href="#" data-toggle="dropdown">Profil</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                        <a class="dropdown-item" href="#" style="font-size: 15px">Sambutan Kepala</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Visi Misi</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Struktur Organisasi</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Sarana Prasarana</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Data Sekolah</a>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown">Akademik</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                        <a class="dropdown-item" href="#" style="font-size: 15px">Kurikulum</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Kalender</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Jadwal Pelajaran</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Jadwal Ujian</a>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown">Sekolah</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                        <a class="dropdown-item" href="#" style="font-size: 15px">Tenaga Pendidik</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Tenaga Kependidikan</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Peserta Didik</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Ekstrakulikuler</a>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown">Kegiatan</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                        <a class="dropdown-item" href="#" style="font-size: 15px">Agenda</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Galeri</a>
                        <a class="dropdown-item" href="#" style="font-size: 15px">Pengumuman</a>
                    </ul>
                </li>
                <li><a href="#">Berita</a></li>
			</ul>
		</nav>
	</div>
    
    <div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title"></h2>
						<div class="section_subtitle"><hr></div>
					</div>
				</div>
			</div>
			<div class="row news_row">
				<div class="col-lg-12 news_col mt-5">
                    <div class="row">
                        <?=$contents?>
                    </div>
				</div>
			</div>
		</div>

	<footer class="footer">
		<div class="footer_background" style="background-image:url(<?=base_url('assets/landing/images/footer_background.png')?>)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">
							<div class="col-lg-4 footer_col">
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
                                        <center>
                                            <a href="<?=site_url()?>">
                                                <img src="<?=base_url().'assets/admin/img/logo/'.$this->sistem->profil()->logo_sekolah?>" style="width: 100px">
                                            </a>
                                        </center>
									</div>
									<div class="footer_about_text text-center">
										<p><?=$this->sistem->profil()->desc_sekolah?></p>
									</div>
								</div>
                            </div>

							<div class="col-lg-3 footer_col mt-5">
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Hubungi Kami</div>
									<div class="footer_contact_info">
										<ul class="mt-5">
                                            <li>E-Mail : <?=$this->sistem->profil()->email_sekolah?></li>
                                            <li>Phone : <?=$this->sistem->profil()->telp_sekolah?></li>
                                            <li><?=$this->sistem->profil()->alamat_sekolah?></li>
                                        </ul>
                                        <div class="footer_social">
                                            <ul>
                                                <li><a href="https://facebook.com/<?=$this->sistem->profil()->fb_sekolah?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="https://youtube.com/<?=$this->sistem->profil()->ytb_sekolah?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                <li><a href="https://instagram.com/<?=$this->sistem->profil()->ig_sekolah?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="https://twitter.com/<?=$this->sistem->profil()->tw_sekolah?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
									</div>
								</div>
                            </div>
                            
                            <div class="col-lg-5 mt-5" style="font-size: 10px">
                                <div class="footer_title">Kritik Saran</div>
                                <form action="<?=$this->sistem->insert_krisar();?>" method="POST" class="mt-4">
                                    <?php 
                                        if (@$respon) {
                                            echo '<i style="color: red; font-size: 13px"> * Respon berhasil dikirim</i>';
                                        }
                                    ?>
                                    <div class="form-group">
                                        <input type="text" name="nama" placeholder=" Nama Anda (Opsional) " class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="nomor" placeholder=" Nomor Telepon Anda (Opsional) " class="form-control">
                                    </div>
                                    <textarea name="isi" rows="3" placeholder="Kritik Saran Komentar anda disini ... " class="form-control"></textarea>
                                    <div class="col-lg-12 mt-1">
                                        <button type="submit" name="krisar" class="btn btn-primary btn-sm float-right"> <i class="fa fa-plane"></i> Kirim</button>
                                    </div>
                                </form>
                            </div> 

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text">
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> 
                                All rights reserved | by <a href="#" target="_blank"><b><i>Mabes Developer .inc</i></b></a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?=base_url('assets/landing/')?>js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url('assets/landing/')?>styles/bootstrap4/popper.js"></script>
<script src="<?=base_url('assets/landing/')?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?=base_url('assets/landing/')?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?=base_url('assets/landing/')?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?=base_url('assets/landing/')?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?=base_url('assets/landing/')?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?=base_url('assets/landing/')?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?=base_url('assets/landing/')?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?=base_url('assets/landing/')?>plugins/easing/easing.js"></script>
<script src="<?=base_url('assets/landing/')?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?=base_url('assets/landing/')?>js/custom.js"></script>
</body>
</html>