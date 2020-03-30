<?=form_open_multipart('admin/kalender/process');?>
    <input type="hidden" name="id" value="<?=$row->id_kalender?>">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="col-lg-12 form-group">
                <label> Tahun Ajaran *</label>
                <?php $plaintext =  explode("/",$row->ta_kalender)?>
                <div class="row">
                    <div class="col-lg-5">
                        <input type="text" name="k_ta1" value="<?=$this->uri->segment(3) != 'add' ? $plaintext[0] : null?>" class="form-control">
                    </div>
                    <div class="col-lg-2">
                       <center><b style="font-size: 20px"> s.d. </b></center>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" name="k_ta2" value="<?=$this->uri->segment(3) != 'add' ? $plaintext[1] : null?>" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 form-group">
                <label> Semester *</label>
                <select name="k_semester" class="form-control">
                    <option value="Ganjil" <?=$row->semester_kalender == 'Ganjil' ? 'selected' : null?>> Ganjil </option>
                    <option value="Genap" <?=$row->semester_kalender == 'Genap' ? 'selected' : null?>> Genap </option>
                </select>
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

