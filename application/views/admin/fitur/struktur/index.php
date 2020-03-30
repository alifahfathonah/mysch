<?=form_open_multipart('admin/struktur/update');?>
    <div class="col-lg-12">
        <center>
            <label for="img">
                <i style="color: red"> * Klik gambar untuk mengupload</i><br>
                <?php 
                    if($row->struktur_organisasi != null){ ?>
                        <img src='<?=base_url()?>assets/admin/img/struktur/<?=$row->struktur_organisasi?>' style="width: 60%; height: 350px">
                <?php }else{ ?>
                        <img src='<?=base_url()?>assets/admin/img/struktur/default.png' style="width: 100%; height: 350px">
                <?php } ?>
            </label>
            <input type="file" name="image" id="img" hidden <?=$this->uri->segment(3) == 'add' ? 'required' : null?>>
        </center>
    </div>
    <div class="col-lg-12 mt-3">
        <button type="submit" name='update' class="btn btn-success btn-sm float-right"><i class="fa fa-edit"></i> Update</button>
    </div>


<?=form_close()?>

