	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?=base_url('assets/landing/images/about_1.jpg')?>)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title" style="font-size: 50px"><?=$this->sistem->profil()->nama_sekolah?></div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?=base_url('assets/landing/images/about_2.jpg')?>)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?=base_url('assets/landing/images/about_3.jpg')?>)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>
	<style rel="stylesheet">
		.sty {
			background-color: #55efc4;
			color: white;
			text-align: center;
		}
		.sty:hover {
			background-color: #fed330;
			color: black;
			-webkit-transform: scale(1.18);
  			transform: scale(1.18);
		}
		.img_hv:hover{
			-webkit-transform: scale(1.08);
  			transform: scale(1.08);
		}
	</style>
	<div class="features mt-5">
		<div class="container" >
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Selamat Datang di Official Website</h2>
						<h3 class="section_subtitle"><?=$this->sistem->profil()->nama_sekolah?></h3>
						<hr>
					</div>
				</div>
			</div>
			<div class="row features_row">		
				<!-- Features Item -->
				<div class="col-lg-3 feature_col" >
					<div class="feature text-center trans_400 sty">
						<div class="feature_icon"><h1> <b><?=$this->sistem->profil()->akreditasi_sekolah?></b></h1></div>
						<h3 class="mt-2">AKREDITASI</h3>
						<div class=""><p>Terakreditasi Oleh BAN-PT</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400 sty" >
						<div class="feature_icon"><h1><b><?=$this->sistem->get_siswa()?></b></h1></div>
						<h3 class="mt-2">PESERTA DIDIK</h3>
						<div class=""><p>Peserta Didik Dari Seluruh Kelas </p></div>
						
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400 sty" >
						<div class="feature_icon"><h1><b><?=$this->sistem->get_guru()->num_rows()?></b></h1></div>
						<h3 class="mt-2">TENAGA PENDIDIK</h3>
						<div class=""><p> Tenaga Pendidik Professional</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400 sty">
						<div class="feature_icon"><h1><b><?=$this->sistem->get_prestasi()->num_rows()?></b></h1></div>
						<h3 class="mt-2">PRESTASI</h3>
						<div class="" ><p> Prestasi Berbagai Bidang</p></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="news">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Berita Terbaru</h2>
						<div class="section_subtitle">
							Dapatkan Berita terbaru dan ter Update tentang <?=$this->sistem->profil()->nama_sekolah?> disini ...
						</div>
						<hr>
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach($this->sistem->get_berita()->result() as $key => $data){ 
					if($key < 3 ){ ?>
					<div class="col-lg-4">
						<div class="course">
							<div class="course_image img_hv">
								<img src="<?=base_url()?>assets/admin/img/berita/<?=$data->image_berita != '' ? $data->image_berita : 'default.png'?>" style="width: 100%; height: 200px">
							</div> 
						</div>
						<div class="course_body">
							<h3 class="course_title"><a href=""><?=$data->judul_berita?></a></h3>
							<div class="course_text">
								<p><?=substr($data->isi_berita, 0, 200)?></p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info" >
									<i class="fa fa-user" aria-hidden="true"></i>
									<span>ADMIN | <i style="color: #b2bec3">Posting : <?=date('d F Y H:i',strtotime($data->created_berita))?></i></span>
								</div>
							</div>
						</div>
					</div>
				<?php } } ?>
			</div>
    </div>