<?=form_open_multipart('admin/siswa/process');?>
    <input type="hidden" name="id" value="<?=$row->id_siswa?>">
    <div class="row">
        <div class="col-lg-6 form-group">
            <label>Nama Kelas *</label>
            <input type="text" name="s_nama" value="<?=$row->nama_kelas?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Wali Kelas *</label>
            <input type="text" name="s_wali" value="<?=$row->wali_kelas?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Total Siswa Laki-laki *</label>
            <input type="number" name="s_laki" value="<?=$row->jumlah_laki?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Total Siswa Perempuan *</label>
            <input type="number" name="s_perempuan" value="<?=$row->jumlah_perempuan?>" class="form-control" required>
        </div>
        <div class="col-lg-12 mt-3">
            <button type="submit" name="<?=$this->uri->segment(3)?>" class="btn btn-success btn-sm float-right"><i class="fa fa-plus"></i><?=$this->uri->segment(3) =='add' ? 'Tambah' : 'Update'?></button>
        </div>
    </div>

<?=form_close()?>

