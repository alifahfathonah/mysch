<?=form_open_multipart('admin/ujian/process');?>
    <input type="hidden" name="id" value="<?=$row->id_jadwal?>">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="col-lg-12 form-group">
                <label> Keterangan *</label>
                <textarea name="u_ket" class="form-control" rows="10"><?=$row->keterangan_jadwal?></textarea>
            </div>
            <div class="col-lg-12 form-group">
                <label> File Jadwal *</label>
                <input type="file" name="image" class="form-control" <?=$this->uri->segment(3) == 'add' ? 'required' : null?>>
            </div>
            <div class="col-lg-12 form-group text-center mt-5">
               <button type="submit" name="<?=$this->uri->segment(3)?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> <?=$this->uri->segment(3) == 'add' ? 'Tambah' : 'Update'?></button>
            </div>
        </div>
    </div>

<?=form_close()?>

