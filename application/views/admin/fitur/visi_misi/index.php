<form action="<?=site_url( 'admin/visi_misi/update')?>" method="POST">  
    <input type="hidden" name="id" value="<?=$row->id_visi?>">
    <div class="col-lg-12 form-group">
        <label><b style="color: black">Visi Sekolah *</b></label>
        <textarea name="s_visi" id="editor1" rows="10" class="form-control"><?=$row->visi_sekolah?> </textarea>
    </div>
    <hr>
    <div class="col-lg-12 form-group">
        <label><b style="color: black">Misi Sekolah *</b></label>
        <textarea name="s_misi" id="editor2" rows="10" class="form-control"><?=$row->misi_sekolah?> </textarea>
    </div>
    <div class="col-lg-12 mt-2">
        <button type="submit" name="update2" class="btn btn-success btn-sm float-right"><i class="fa fa-edit"></i> Update </button>
    </div>

</form>
