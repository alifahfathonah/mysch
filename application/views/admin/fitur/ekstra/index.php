<div class="col-lg-12 text-right">
    <a href="<?=site_url('admin/ekstrakulikuler/add')?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-pencil-alt"></i> Add </a>
</div>
<div class="table-responsive">
    <table class="table table-hover dataTable" id="dataTable" width="100%" style="color: black; font-size: 14px">
        <thead>
            <tr >
                <th>#</th>
                <th>Nama Kegiatan</th>
                <th>Pembina Kegitan</th>
                <th>Jadwal Kegiatan</th>
                <th>Jam Kegiatan</th>
                <th width="20%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach ($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data->kegiatan_ekstra?></td>
                        <td><?=$data->pembina_ekstra?></td>
                        <td><?=$data->jadwal_ekstra?></td>
                        <td><?=$data->jam_ekstra?></td>
                        <td>
                            <a href="<?=site_url('admin/ekstrakulikuler/edit/'.$data->id_ekstra)?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Update </a>
                            <button type="submit" class="btn btn-danger btn-sm remove"><i class="fa fa-trash"></i> Delete</button>
                            <input type="hidden" id="id" value="<?=$data->id_ekstra?>">
                            <input type="hidden" id="name" value="<?=$data->kegiatan_ekstra?>">
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
                                            window.location= './ekstrakulikuler/del/'+id;
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
       


              