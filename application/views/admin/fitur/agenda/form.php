<?=form_open_multipart('admin/agenda/process');?>
    <input type="hidden" name="id" value="<?=$row->id_agenda?>">
    <div class="row">
        <div class="col-lg-12">
            <?php if($this->uri->segment(3) == 'add'){ ?>
                <label><b style="font-size: 16px; color: black"> Pamflet Agenda *</b></label>
                <input type="file" name="image" class="form-control" >
            <?php }else{ ?>
                <center>
                    <label for="img">
                        <i style="color: red"> * Klik gambar untuk mengupload</i><br>
                        <?php 
                            if($row->pamflet_agenda != null){ ?>
                                <img src='<?=base_url()?>assets/admin/img/agenda/<?=$row->pamflet_agenda?>' style="width: 100%; height: 350px">
                        <?php }else{ ?>
                                <img src='<?=base_url()?>assets/admin/img/agenda/default.png' style="width: 100%; height: 350px">
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
                    <label><b style="font-size: 16px; color: black"> Nama Agenda * </b></label>
                    <input type="text" name="a_nama" value="<?=$row->nama_agenda;?>" class="form-control" required>
                </div>
                <div class="col-lg-12">
                    <label><b style="font-size: 16px; color: black"> Pelaksana Agenda * </b></label>
                    <input type="text" name="a_pelaksana" value="<?=$row->pelaksana_agenda;?>" class="form-control" required>
                </div>
                <div class="col-lg-12">
                    <label><b style="font-size: 16px; color: black"> Tanggal Pelaksanaan Agenda * </b></label>
                    <input type="date" name="a_tanggal" value="<?=$row->tanggal_agenda;?>" class="form-control" required>
                </div>
                <div class="col-lg-12 mt-3">
                    <button type="submit" name="<?=$this->uri->segment(3) == 'add' ? 'add' : 'edit' ?>" class="btn btn-success btn-sm float-right"><i class="fa fa-edit"></i> <?=$this->uri->segment(3) == 'add' ? 'add' : 'update' ?> </button>
                </div>
            </div>
        </div>
    </div>

<?=form_close()?>

