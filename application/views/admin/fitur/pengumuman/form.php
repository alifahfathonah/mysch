<?=form_open_multipart('admin/pengumuman/process');?>
    <input type="hidden" name="id" value="<?=$row->id_pengumuman?>">
    <div class="row">
        <div class="col-lg-6 form-group">
            <label>Judul Pengumuman *</label>
            <input type="text" name="p_judul" value="<?=$row->judul_pengumuman?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Sumber Informasi Pengumuman *</label>
            <input type="text" name="p_sumber" value="<?=$row->sumber_pengumuman?>" class="form-control" required>
        </div>
        <div class="col-lg-12 form-group">
            <label>Isi Pengumuman *</label>
            <textarea name="p_isi" id="editor1" class="form-control"> <?=$row->isi_pengumuman?> </textarea>
        </div>
       
        <div class="col-lg-12 mt-4 ">
            <button type="submit" name="<?=$this->uri->segment(3)?>" class="btn btn-success btn-sm float-right"><i class="fa fa-plus"></i><?=$this->uri->segment(3) =='add' ? 'Tambah' : 'Update'?></button>
        </div>
    </div>

<?=form_close()?>

