<?=form_open_multipart('admin/ekstrakulikuler/process');?>
    <input type="hidden" name="id" value="<?=$row->id_ekstra?>">
    <div class="row">
        <div class="col-lg-6 form-group">
            <label>Kegiatan Ekstrakulikuler *</label>
            <input type="text" name="e_ekstra" value="<?=$row->kegiatan_ekstra?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Hari Ekstrakulikuler *</label>
            <input type="text" name="e_jadwal" value="<?=$row->jadwal_ekstra?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Jam Ekstrakulikuler *</label>
            <input type="text" name="e_jam" value="<?=$row->jam_ekstra?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Pembina Ekstrakulikuler *</label>
            <input type="text" name="e_pembina" value="<?=$row->pembina_ekstra?>" class="form-control" required>
        </div>
        <div class="col-lg-12 mt-4 ">
            <button type="submit" name="<?=$this->uri->segment(3)?>" class="btn btn-success btn-sm float-right"><i class="fa fa-plus"></i><?=$this->uri->segment(3) =='add' ? 'Tambah' : 'Update'?></button>
        </div>
    </div>

<?=form_close()?>

