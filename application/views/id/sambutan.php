<div class="col-lg-5 mt-3 mb-3">
    <div class="card card-body">
        <center>
            <img src="<?=base_url().'assets/admin/img/sambutan/'.$row->image_sambutan?>" style="width: 400px">
            <div class="team_title mt-3">
                <a style="color: black"><?=$this->sistem->profil()->kepala_sekolah?></a>
                <div class="col-lg-8">
                    <hr>
                </div>
            </div>
            <div class="social_list">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </center>
    </div>
</div>
<div class="col-lg-7 mt-3 mb-3">
    <div class="card card-body">
        <h4 >Sambutan Kepala Sekolah</h4>
        <hr>
        <p><?=$row->isi_sambutan?></p>
    </div>
</div>