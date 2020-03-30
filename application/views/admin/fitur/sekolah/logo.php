<?=form_open_multipart('admin/sekolah/process');?>
    <div class="col-lg-12">
        <center>
            <label for="img">
                <i style="color: red"> * Klik gambar untuk mengupload</i><br>
                <?php 
                    if($row->logo_sekolah != null){ ?>
                        <img src='<?=base_url()?>assets/admin/img/logo/<?=$row->logo_sekolah?>' style="width: 60%">
                <?php }else{ ?>
                        <img src='<?=base_url()?>assets/admin/img/logo/default.png' style="width: 60%">
                <?php } ?>
            </label>
            <input type="file" name="image" id="img" hidden <?=$this->uri->segment(3) == 'add' ? 'required' : null?>>
        </center>
    </div>
    <div class="col-lg-12 mt-3">
        <button type="submit" name='logo' class="btn btn-success btn-sm float-right"><i class="fa fa-edit"></i> Update</button>
    </div>


<?=form_close()?>