<?=form_open_multipart('admin/sambutan/update');?>
    <input type="hidden" name="id" value="<?=$row->id_sambutan?>">
    <div class="col-lg-12">
        <center>
            <label for="img">
                <i style="color: red"> * Klik gambar untuk mengupload</i><br>
                <?php 
                    if($row->image_sambutan != null){ ?>
                        <img src='<?=base_url()?>assets/admin/img/sambutan/<?=$row->image_sambutan?>' style="width: 60%; height: 350px">
                <?php }else{ ?>
                        <img src='<?=base_url()?>assets/admin/img/sambutan/default.png' style="width: 60%; height: 350px">
                <?php } ?>
            </label>
            <input type="file" name="image" id="img" hidden <?=$this->uri->segment(3) == 'add' ? 'required' : null?>>
        </center>
    </div>
    <hr>
    <div class="col-lg-12">
        <center><label><b style="font-size: 20px; color: black"> Isi Sambutan * </b></label></center>
        <textarea name="s_isi" id="editor1" class="form-control"> <?=$row->isi_sambutan?> </textarea>
    </div>
    <div class="col-lg-12 mt-2">
        <button type="submit" name="update" class="btn btn-success btn-sm float-right"><i class="fa fa-edit"></i> Update </button>
    </div>

<?=form_close()?>
