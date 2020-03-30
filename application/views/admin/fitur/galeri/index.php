<form action="" method="POST">
    <div class="row">
        <div class="col-lg-6">
            <a href="<?=site_url('admin/galeri/add')?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-pencil-alt"></i> Add </a>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-9">
                    <div class="text-left form-group">
                        <input type="text" name="key" id="key" value="<?=$this->input->post('key')?>" placeholder="Cari Gambar disini..." class="form-control" >
                        <button type="submit" name="search" value="TRUE" class="btn btn-info ml-3" hidden><i class="fa fa-search" ></i></button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="<?=site_url('admin/galeri')?>" class="btn btn-primary mb-3"><i class="fa fa-sync"></i> Reset</a>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="col-lg-12 table-responsive mt-2">
    <div class="row">
        <?php
            $no = 1;
            if ($row->num_rows() == 0) {
                echo' 
                    Data Tidak Ditemukan, Silahkan melakukan refresh halaman <br>
                    <a href="'.site_url('admin/galeri').'" class="btn btn-primary mb-3"><i class="fa fa-sync"></i></a>
                    ';
            }
            foreach ($row->result() as $key => $data) { ?>
                    <div class="col-lg-3 flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <?php if ($data->foto_galeri) { ?>
                                    <img src="<?=base_url().'assets/galeri/'.$data->foto_galeri?>" style="height: 150px; width: 200px">
                                <?php }else{ ?>
                                    <img src="<?=base_url().'assets/galeri/default.jpg'?>" style="height: 150px; width: 200px">
                                <?php } ?>
                            </div>
                            <div class="flip-card-back">
                                <a href="<?=site_url('admin/galeri/edit/'.$data->id_galeri)?>" class="btn btn-warning btn-sm mt-2"><i class="fa fa-edit"></i> Update</a>
                                <button type="submit" class="btn btn-danger btn-sm mt-2 remove"><i class="fa fa-trash"></i> Delete</button>
                                <center>
                                    <i><b><?=$data->judul_galeri?></b></i>
                                </center>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="id_galeri" value="<?=$data->id_galeri?>">
                    <input type="hidden" id="name" value="<?=$data->judul_galeri?>">
                    <script>
                        $(".remove").click(function(){
                            var id = document.getElementById("id_galeri").value;
                            var name = document.getElementById("name").value; 

                            Swal.fire({
                                title: 'Yakin menghapus <br>'+name+'?',
                                text: "data akan hilang dari sistem !",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ya, hapus data!'
                                }).then((result) => {
                                if (result.value) {
                                    window.location= './galeri/del/'+id;
                                }else{
                                    Swal.fire(
                                        'Batal !',
                                        'Penghapusan data dibatalkan.',
                                        'success'
                                    )
                                }
                            });
     
                        });
                    </script>
        <?php } ?>
    </div>
</div>



