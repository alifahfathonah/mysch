<?=form_open_multipart('admin/galeri/process');?>
    <input type="hidden" name="id" value="<?=$row->id_galeri?>">
    <div class="row">
        <div class="col-lg-12">
            <?php if($this->uri->segment(3) == 'add'){ ?>
                <label><b style="font-size: 16px; color: black"> Foto Galeri *</b></label>
                <input type="file" name="image" class="form-control" >
            <?php }else{ ?>
                <center>
                    <label for="img">
                        <i style="color: red"> * Klik gambar untuk mengupload</i><br>
                        <?php 
                            if($row->foto_galeri != null){ ?>
                                <img src='<?=base_url()?>assets/galeri/<?=$row->foto_galeri?>' style="width: 100%; height: 350px">
                        <?php }else{ ?>
                                <img src='<?=base_url()?>assets/galeri/default.jpg' style="width: 100%; height: 350px">
                        <?php } ?>
                    </label>
                    <input type="file" name="image" id="img" hidden>
                </center>
            <?php } ?>
        </div>
        <hr>
        <div class="col-lg-12 mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <label><b style="font-size: 16px; color: black"> Judul Foto * </b></label>
                    <input type="text" name="a_judul" value="<?=$row->judul_galeri;?>" class="form-control" required>
                </div>
                <div class="col-lg-12 mt-3">
                    <button type="submit" name="<?=$this->uri->segment(3) == 'add' ? 'add' : 'edit' ?>" class="btn btn-success btn-sm float-right"><i class="fa fa-edit"></i> <?=$this->uri->segment(3) == 'add' ? 'add' : 'update' ?> </button>
                </div>
            </div>
        </div>
    </div>

<?=form_close()?>

