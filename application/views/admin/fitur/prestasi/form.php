<?=form_open_multipart('admin/prestasi/process');?>
    <input type="hidden" name="id" value="<?=$row->id_prestasi?>">
    <div class="row">
        <div class="col-lg-6 form-group">
            <label>Nama Kegiatan *</label>
            <input type="text" name="s_nama" value="<?=$row->nama_kegiatan?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Nama Peserta *</label>
            <input type="text" name="s_peserta" value="<?=$row->nama_peserta?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Perolehan Juara *</label>
            <input type="text" name="s_juara" value="<?=$row->perolehan_juara?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Tingkat Prestasi *</label>
            <input type="text" name="s_tingkat" value="<?=$row->tingkat_prestasi?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Tahun Prestasi *</label>
            <input type="text" name="s_tahun" value="<?=$row->tahun_prestasi?>" class="form-control" required>
        </div>
        <div class="col-lg-12 mt-3">
            <button type="submit" name="<?=$this->uri->segment(3)?>" class="btn btn-success btn-sm float-right"><i class="fa fa-plus"></i><?=$this->uri->segment(3) =='add' ? 'Tambah' : 'Update'?></button>
        </div>
    </div>

<?=form_close()?>

