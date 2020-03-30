<div class="col-lg-12 text-right">
    <a href="<?=site_url('admin/prestasi/add')?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-pencil-alt"></i> Add </a>
</div>
<div class="table-responsive">
    <table class="table table-hover dataTable" id="dataTable" width="100%" style="color: black; font-size: 14px">
        <thead>
            <tr >
                <th>#</th>
                <th>Nama Kegiatan</th>
                <th>Nama Peserta</th>
                <th>Perolehan Juara</th>
                <th>Tingkat</th>
                <th>Tahun</th>
                <th width="10%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                $count = 0;
                foreach ($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data->nama_kegiatan?></td>
                        <td><?=$data->nama_peserta?></td>
                        <td><?=$data->perolehan_juara?></td>
                        <td><?=$data->tingkat_prestasi?></td>
                        <td><?=$data->tahun_prestasi?></td>
                        <td>
                            <a href="<?=site_url('admin/prestasi/edit/'.$data->id_prestasi)?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                            <button type="submit" class="btn btn-danger btn-sm remove"><i class="fa fa-trash"></i></button>
                            <input type="hidden" id="id" value="<?=$data->id_prestasi?>">
                            <input type="hidden" id="name" value="<?=$data->nama_kegiatan?>">
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
                                            window.location= './prestasi/del/'+id;
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
       


              