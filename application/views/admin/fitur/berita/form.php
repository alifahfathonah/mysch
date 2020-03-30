<?=form_open_multipart('admin/berita/process');?>
    <input type="hidden" name="id" value="<?=$row->id_berita?>">
    <div class="row">
        <div class="col-lg-12">
            <?php if($this->uri->segment(3) == 'add'){ ?>
                <label><b style="font-size: 16px; color: black"> Gambar Berita </b></label>
                <input type="file" name="image" class="form-control" >
            <?php }else{ ?>
                <center>
                    <label for="img">
                        <i style="color: red"> * Klik gambar untuk mengupload</i><br>
                        <?php 
                            if($row->image_berita != null){ ?>
                                <img src='<?=base_url()?>assets/admin/img/berita/<?=$row->image_berita?>' style="width: 100%; height: 350px">
                        <?php }else{ ?>
                                <img src='<?=base_url()?>assets/admin/img/berita/default.png' style="width: 100%; height: 350px">
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
                    <label><b style="font-size: 16px; color: black"> Judul Berita * </b></label>
                    <input type="text" name="b_judul" value="<?=$row->judul_berita;?>" class="form-control" required>
                </div>
                <div class="col-lg-12">
                    <label><b style="font-size: 16px; color: black"> Isi Berita * </b></label>
                    <textarea name="b_isi" rows="5" id="editor1" class="form-control" required><?=$row->isi_berita;?></textarea>
                </div>
                <div class="col-lg-12 mt-3">
                    <button type="submit" name="<?=$this->uri->segment(3) == 'add' ? 'add' : 'edit' ?>" class="btn btn-success btn-sm float-right"><i class="fa fa-edit"></i> <?=$this->uri->segment(3) == 'add' ? 'add' : 'update' ?> </button>
                </div>
            </div>
        </div>
    </div>

<?=form_close()?>

