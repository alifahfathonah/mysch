<div class="col-lg-12 text-right">
    <a href="<?=site_url('admin/kependidikan/add')?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-pencil-alt"></i> Add </a>
</div>
<div class="table-responsive">
    <table class="table table-hover dataTable" id="dataTable" width="100%" style="color: black; font-size: 14px">
        <thead>
            <tr >
                <th>#</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Keilmuan</th>
                <th>Pendidikan</th>
                <th>Jabatan</th>
                <th>Image</th>
                <th width="10%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach ($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data->nip_staff?></td>
                        <td><?=$data->nama_staff?></td>
                        <td><?=$data->keilmuan_staff?></td>
                        <td><?=$data->pendidikan_staff?></td>
                        <td><?=$data->jabatan_staff?></td>
                        <td>
                            <?php 
                                $directory = base_url().'assets/admin/img/kependidikan';
                            if($data->image_staff != null){ ?>
                                <a href="<?=$directory.'/'.$data->image_staff?>" target="_blank">
                                    <img src="<?=$directory.'/'.$data->image_staff?>" class="img-profile rounded-circle" style="width: 50px; height: 50px">
                                </a>
                            <?php }else{ ?>
                                <a href="<?=$directory.'/default.jpg'?>" target="_blank">
                                    <img src="<?=$directory.'/default.jpg'?>" class="img-profile rounded-circle" style="width: 50px">
                                </a>
                            <?php } ?>
                        </td>
                        <td>
                            <a href="<?=site_url('admin/kependidikan/edit/'.$data->id_staff)?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                            <button type="submit" class="btn btn-danger btn-sm remove"><i class="fa fa-trash"></i></button>
                            <input type="hidden" id="id" value="<?=$data->id_staff?>">
                            <input type="hidden" id="name" value="<?=$data->nama_staff?>">
                            <script>
                                $(".remove").click(function(){
                                    var id = document.getElementById("id").value;
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
                                            window.location= './kependidikan/del/'+id;
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
                        </td>
                    </tr>
           <?php } ?>
        </tbody>
    </table>
</div>
       


              