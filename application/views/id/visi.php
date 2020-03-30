<div class="col-lg-12 mt-3 mb-3">
    <div class="card card-body">
        <h4 >Visi Misi <?=$this->sistem->profil()->nama_sekolah?></h4>
        <hr>
        <div class="row mt-2">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <center>
                    <h3>Visi Sekolah</h3>
                    <hr width="50%">
                    <p style="color: black"><?=$row->visi_sekolah?></p>
                </center>
            </div>
            <div class="col-lg-12"></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-10 mt-4">
                <center>
                    <h3>Misi Sekolah</h3>
                    <hr width="50%">
                </center>
                <p style="color: black"><?=$row->misi_sekolah?></p>
            </div>
        </div>
    </div>
</div>