<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?=$page?> - <?=$this->sistem->profil()->nama_sekolah?></title>
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url().'assets/admin/img/logo/'.$this->sistem->profil()->logo_sekolah?>">

        <!-- Custom fonts for this template-->
        <link href="<?=base_url()?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Acme|Josefin+Sans|Oswald|Roboto+Mono|Teko&display=swap" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?=base_url()?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/admin/css/flif_animate.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/admin/css/animate.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/admin/css/sb-toogle.css" rel="stylesheet">

        <!-- Data Tables for this template-->
        <link href="<?=base_url()?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <!-- Custom styles for this page -->
        <link href="<?=base_url()?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- Sweet Alert  -->
        <script src="<?=base_url()?>assets/admin/vendor/sweetalert/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?=base_url()?>assets/admin/vendor/sweetalert/dist/sweetalert2.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-text mx-3">My School</div>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider">
                
                <!-- Heading -->
                <div class="sidebar-heading mt-1">
                    Interface
                </div>

                <li class="nav-item <?=$this->uri->segment(2) == 'dashboard' ? 'active' : null ?>">
                    <a class="nav-link " href="<?=site_url('admin/dashboard')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-address-card"></i>
                        <span>Profil</span>
                    </a>
                    <div id="collapseOne" class="collapse <?=$this->uri->segment(2) == 'sambutan' || 
                                                            $this->uri->segment(2) == 'visi_misi' ||
                                                            $this->uri->segment(2) == 'struktur'  ||
                                                            $this->uri->segment(2) == 'sekolah'  ||
                                                            $this->uri->segment(2) == 'prestasi'  ||
                                                            $this->uri->segment(2) == 'fasilitas' ? 'show' : null ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded" >
                            <a class="collapse-item <?=$this->uri->segment(2) == 'sambutan' ? 'active' : null?>" href="<?=site_url('admin/sambutan')?>">Sambutan Kepala</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'visi_misi' ? 'active' : null?>" href="<?=site_url('admin/visi_misi')?>">Visi Misi</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'struktur' ? 'active' : null?>" href="<?=site_url('admin/struktur')?>">Struktur Organisasi</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'fasilitas' ? 'active' : null?>" href="<?=site_url('admin/fasilitas')?>">Fasilitas</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'sekolah' ? 'active' : null?>" href="<?=site_url('admin/sekolah')?>">Data Sekolah</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'prestasi' ? 'active' : null?>" href="<?=site_url('admin/prestasi')?>">Prestasi</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-book-reader"></i>
                    <span>Akademik</span>
                    </a>
                    <div id="collapseTwo" class="collapse <?= $this->uri->segment(2) == 'kurikulum' ||
                                                            $this->uri->segment(2) == 'kalender' ||
                                                            $this->uri->segment(2) == 'pelajaran' ||
                                                            $this->uri->segment(2) == 'ujian' ? 'show' : null ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?=$this->uri->segment(2) == 'kurikulum' ? 'active' : null?>" href="<?=site_url('admin/kurikulum')?>">Kurikulum</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'kalender' ? 'active' : null?>" href="<?=site_url('admin/kalender')?>">Kalender Akademik</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'pelajaran' ? 'active' : null?>" href="<?=site_url('admin/pelajaran')?>">Jadwal Pelajaran</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'ujian' ? 'active' : null?>" href="<?=site_url('admin/ujian')?>">Jadwal Ujian</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThre" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-building"></i>
                        <span>Sekolah</span>
                    </a>
                    <div id="collapseThre" class="collapse collapse <?= $this->uri->segment(2) == 'pendidik' ||
                                                            $this->uri->segment(2) == 'kependidikan' ||
                                                            $this->uri->segment(2) == 'siswa' ||
                                                            $this->uri->segment(2) == 'ekstrakulikuler'? 'show' : null ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?=$this->uri->segment(2) == 'pendidik' ? 'active' : null?>" href="<?=site_url('admin/pendidik')?>">Tenaga Pendidik</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'kependidikan' ? 'active' : null?>" href="<?=site_url('admin/kependidikan')?>">Tenaga Kependidikan</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'siswa' ? 'active' : null?>" href="<?=site_url('admin/siswa')?>">Siswa</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'ekstrakulikuler' ? 'active' : null?>" href="<?=site_url('admin/ekstrakulikuler')?>">Ekstrakulikuler</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-camera-retro"></i>
                        <span>Kegiatan</span>
                    </a>
                    <div id="collapseFour" class="collapse <?= $this->uri->segment(2) == 'agenda' ||
                                                            $this->uri->segment(2) == 'galeri' ||
                                                            $this->uri->segment(2) == 'pengumuman'  ? 'show' : null ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item <?=$this->uri->segment(2) == 'agenda' ? 'active' : null?>" href="<?=site_url('admin/agenda')?>">Agenda</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'galeri' ? 'active' : null?>" href="<?=site_url('admin/galeri')?>">Galeri</a>
                            <a class="collapse-item <?=$this->uri->segment(2) == 'pengumuman' ? 'active' : null?>" href="<?=site_url('admin/pengumuman')?>">Pengumuman</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item <?=$this->uri->segment(2) == 'berita' ? 'active' : null ?>">
                    <a class="nav-link" href="<?=site_url('admin/berita')?>">
                    <i class="fas fa-bullhorn"></i>
                    <span>Berita</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$this->session->userdata('name')?></span>
                                    <?php
                                        $image = $this->sistem->get_user()->image_user;
                                        if($image != null){
                                            echo '<img class="img-profile rounded-circle" src="'.base_url().'assets/admin/img/user/'.$image.'">';
                                        }else{
                                            echo '<img class="img-profile rounded-circle" src="'.base_url().'assets/admin/img/user/default.png">';
                                        }
                                    ?>
                                    
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#UpdateModal">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#SistemModal">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="<?=site_url('msc/activity')?>">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid" style="margin-bottom: 10px">
                        <?php $this->view('admin/messages'); ?>
                        <div class="card card-body"  style="margin: 10px; color:black">
                            <div class="col-lg-12">
                                <span style="font-size: 20px ;color: black"><b><?=$page?></b></span style="color: black">
                                <span class="float-right" style="font-size: 12px; color:black">
                                    <?=$this->uri->segment(2)?>
                                    <?php
                                        if($this->uri->segment(3) != null){
                                            echo " > ";
                                            echo $this->uri->segment(3);
                                        }else if($this->uri->segment(4) != null){
                                            echo " > ";
                                            echo $this->uri->segment(4);
                                        }
                                    ?>
                                </span>
                                <hr>
                                <?=$contents?>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                <footer class="bg-white" style="height: 40px; margin-top: 10px">
                    <div class="container">
                        <div class="copyright text-center">
                            <span style="margin-top: 16px; font-size: 12px">Copyright &copy; My School Powered by <b><i>Mabes Developer .inc</i></b></span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">Pastikan Semua data sudah disimpan untuk keluar dari sistem</div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href=<?=site_url('auth/logout')?>>Logout</a>
                </div>
            </div>
            </div>
        </div>

        <!-- Update Profile Modal-->
        <div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Profil User</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <?php $profil = $this->sistem->get_user() ?>
                <?=form_open_multipart('auth/update');?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name"> Nama User *</label>
                            <input type="hidden" name="id" value="<?=$profil->id_user?>">
                            <input type="text" name="u_name" id="name" value="<?=$profil->name_user?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="jabatan"> Jabatan User *</label>
                            <input type="text" name="u_jabatan" id="jabatan" value="<?=$profil->jabatan_user?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email User *</label>
                            <input type="email" name="u_mail" id="email" value="<?=$profil->email_user?>" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label for="username"> Username *</label>
                                <input type="text" name="u_username" id="username" value="<?=$profil->username?>" class="form-control">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="password"> Password </label>
                                <input type="password" name="u_password" id="password"  class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <center>
                                    <?php
                                        if($profil->image_user != null){
                                            echo '<img class="img-profile " src="'.base_url().'assets/admin/img/user/'.$profil->image_user.'" style="width: 100px; height: 100px; border-radius : 50%; border-style: solid"> ';
                                        }else{
                                            echo '<img class="img-profile " src="'.base_url().'assets/admin/img/user/default.png" style="width: 100px; height: 100px; border-radius : 50%; border-style: solid"> ';
                                        }
                                    ?>
                                </center>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label> Image User </label><br>

                                <div id="populate">
                                    <label for="image" class="btn btn-info btn-sm"><i class="fa fa-file-import"></i> Upload Image</label>
                                    <input type="file" name="image" id="image"  class="form-control" hidden><br>
                                </div>
                                <input type="checkbox" name="image_remove"> Hapus Image (Optional)
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                           <small>
                                <i style="color: red">
                                    * Kosongkan Password dan Gambar jika tidak diubah
                                </i>
                           </small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="update" class="btn btn-success"> Update </button>
                    </div>
                <?=form_close();?>
            </div>
            </div>
        </div>

         <!-- Logout Modal-->
        <div class="modal fade" id="SistemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="<?=site_url('msc/auth_sistem')?>" method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Authentication Sistem</h5>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-12">
                                <label><b><i> Password Untuk Masuk ke Sistem *</i></b></label>
                                <input type="password" name="s_pass" class="form-control" required >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="atuh" class="btn btn-primary"> Masuk </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#box").hover(function(){
                    $("#box").toggleClass("flipped");
                });
            });
        </script>

        <!-- Vendor Ck Editor  -->
        <script src="<?=base_url()?>assets/admin/vendor/ckeditor/ckeditor.js"></script>
        <script> CKEDITOR.replace('editor1');</script>
        <script> CKEDITOR.replace('editor2');</script>

        <!-- Bootstrap core JavaScript-->
        <script src="<?=base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?=base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?=base_url()?>assets/admin/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?=base_url()?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?=base_url()?>assets/admin/js/demo/datatables-demo.js"></script>
    </body>
</html>
