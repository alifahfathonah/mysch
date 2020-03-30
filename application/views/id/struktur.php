<div class="col-lg-12 mt-3 mb-3">
    <div class="card card-body">
        <h4 >Struktur Organisasi <?=$this->sistem->profil()->nama_sekolah?></h4>
        <hr>
        <div class="col-lg-12 mt-2">
            <img src="<?=base_url()?>assets/admin/img/struktur/<?=$row->struktur_organisasi == '' ? 'default.png' : $row->struktur_organisasi ?>" width="100%">
        </div>
    </div>
</div>