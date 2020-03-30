<div class="col-lg-12 text-right">
    <a href="<?=site_url('admin/pengumuman/add')?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-pencil-alt"></i> Add </a>
</div>
<div class="table-responsive">
    <table class="table table-hover dataTable" id="dataTable" width="100%" style="color: black; font-size: 14px">
        <thead>
            <tr >
                <th>#</th>
                <th>Judul Pengumuman</th>
                <th>Isi Pengumuman</th>
                <th>Sumber Pengumuman</th>
                <th>Tanggal Publikasi</th>
                <th width="10%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach ($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data->judul_pengumuman?></td>
                        <td><?=substr($data->isi_pengumuman,0,50)?></td>
                        <td><?=$data->sumber_pengumuman?></td>
                        <td><?=$data->created_pengumuman?></td>
                        <td>
                            <a href="<?=site_url('admin/pengumuman/edit/'.$data->id_pengumuman)?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                            <button type="submit" class="btn btn-danger btn-sm remove"><i class="fa fa-trash"></i> Delete</button>
                            <input type="hidden" id="id" value="<?=$data->id_pengumuman?>">
                            <input type="hidden" id="name" value="<?=$data->judul_pengumuman?>">
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
                                            window.location= './pengumuman/del/'+id;
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
       


              