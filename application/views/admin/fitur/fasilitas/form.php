<?=form_open_multipart('admin/fasilitas/process');?>
    <input type="hidden" name="id" value="<?=$row->id_fasilitas?>">
    <div class="row">
        <div class="col-lg-6">
            <?php if($this->uri->segment(3) == 'add'){ ?>
                <label><b style="font-size: 16px; color: black"> Gambar Fasilitas * </b></label>
                <input type="file" name="image" class="form-control" required>
            <?php }else{ ?>
                <center>
                    <label for="img">
                        <i style="color: red"> * Klik gambar untuk mengupload</i><br>
                        <?php 
                            if($row->image_fasilitas != null){ ?>
                                <img src='<?=base_url()?>assets/admin/img/fasilitas/<?=$row->image_fasilitas?>' style="width: 100%; height: 350px">
                        <?php }else{ ?>
                                <img src='<?=base_url()?>assets/admin/img/fasilitas/default.png' style="width: 100%; height: 350px">
                        <?php } ?>
                    </label>
                    <input type="file" name="image" id="img" hidden <?=$this->uri->segment(3) == 'add' ? 'required' : null?>>
                </center>
            <?php } ?>
        </div>
        <hr>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <label><b style="font-size: 16px; color: black"> Nama Fasilitas * </b></label>
                    <input type="text" name="f_nama" value="<?=$row->nama_fasilitas;?>" class="form-control" required>
                </div>
                <div class="col-lg-12 mt-3">
                    <button type="submit" name="<?=$this->uri->segment(3) == 'add' ? 'add' : 'edit' ?>" class="btn btn-success btn-sm float-right"><i class="fa fa-edit"></i> <?=$this->uri->segment(3) == 'add' ? 'add' : 'update' ?> </button>
                </div>
            </div>
        </div>
    </div>

<?=form_close()?>

