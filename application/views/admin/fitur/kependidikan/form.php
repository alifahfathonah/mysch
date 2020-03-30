<?=form_open_multipart('admin/kependidikan/process');?>
    <input type="hidden" name="id" value="<?=$row->id_staff?>">
    <div class="row">
        <div class="col-lg-6 form-group">
            <label>NIP Staff *</label>
            <input type="number" name="p_nip" value="<?=$row->nip_staff?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Nama Staff *</label>
            <input type="text" name="p_nama" value="<?=$row->nama_staff?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Jabatan Staff *</label>
            <input type="text" name="p_jabatan" value="<?=$row->jabatan_staff?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Keilmuan Staff *</label>
            <input type="text" name="p_keilmuan" value="<?=$row->keilmuan_staff?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Pendidikan Staff *</label>
            <input type="text" name="p_pendidikan" value="<?=$row->pendidikan_staff?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Foto Staff <?=$this->uri->segment(3) == 'add' ? '*' : null ?></label>
            <input type="file" name="image" class="form-control" <?=$this->uri->segment(3) == 'add' ? 'required' : null ?>>
        </div>
        <div class="col-lg-12 mt-3">
            <button type="submit" name="<?=$this->uri->segment(3)?>" class="btn btn-success btn-sm float-right"><i class="fa fa-plus"></i><?=$this->uri->segment(3) =='add' ? 'Tambah' : 'Update'?></button>
        </div>
    </div>

<?=form_close()?>

