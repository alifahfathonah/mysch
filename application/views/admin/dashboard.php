<link href="https://fonts.googleapis.com/css?family=Audiowide|Berkshire+Swash|Righteous&display=swap" rel="stylesheet" hidden>
<div class="col-lg-12 text-center">
    <img src="<?=base_url().'assets/admin/img/logo/'.$this->sistem->profil()->logo_sekolah?>" style="width: 20%">
    <div class="mt-3">
        <h4 style="font-family: 'Berkshire Swash', cursive;"><b>Administrator Web Profile Sekolah</b></h4>
        <h3 style="font-family: 'Audiowide', cursive;"><b>" <?=$this->sistem->profil()->nama_sekolah?> "</b></h3>
    </div>
    <hr>
</div>
<div class="row mt-5">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pengunjung</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$this->sistem->visitor();?> </div>
            </div>
            <div class="col-auto">
                <a href="<?=site_url('msc/activity')?>"><i class="fas fa-users fa-2x text-gray-300"></i></a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">TA - Semester</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 14px">
                    <?=$this->sistem->profil()->ta_sekolah.' - '.$this->sistem->profil()->semester_sekolah?>
                </div>
            </div>
            <div class="col-auto">
                <a href="<?=site_url('admin/sekolah')?>"><i class="fas fa-clock fa-2x text-gray-300"></i></a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Agenda</div>
                    <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        <?php $count = $this->sistem->get_agenda()->num_rows();?>
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$count;?></div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
            <a href="<?=site_url('admin/agenda')?>"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kritik Saran</div>
                    <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        <?php $count = $this->sistem->get_krisar()->num_rows();?>
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$count?></div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <a href="<?=site_url('admin/krisar')?>"><i class="fas fa-comments fa-2x text-gray-300"></i></a>
            </div>
            </div>
        </div>
        </div>
    </div>

   
</div>