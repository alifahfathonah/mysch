<div class="col-lg-12 text-right">
    <a href="<?=site_url('admin/siswa/add')?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-pencil-alt"></i> Add </a>
</div>
<div class="table-responsive">
    <table class="table table-hover dataTable" id="dataTable" width="100%" style="color: black; font-size: 14px">
        <thead>
            <tr >
                <th>#</th>
                <th>Nama Kelas</th>
                <th>Wali Kelas</th>
                <th>Laki-laki</th>
                <th>Perempuan</th>
                <th>Total</th>
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
                        <td><?=$data->nama_kelas?></td>
                        <td><?=$data->wali_kelas?></td>
                        <td><?=$data->jumlah_laki.' Orang'?></td>
                        <td><?=$data->jumlah_perempuan.' Orang'?></td>
                        <td><?=$data->jumlah_laki + $data->jumlah_perempuan .' Orang'?></td>
                        <td>
                            <a href="<?=site_url('admin/siswa/edit/'.$data->id_siswa)?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                            <button type="submit" class="btn btn-danger btn-sm remove"><i class="fa fa-trash"></i></button>
                            <input type="hidden" id="id" value="<?=$data->id_siswa?>">
                            <input type="hidden" id="name" value="<?=$data->nama_kelas?>">
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
                                            window.location= './siswa/del/'+id;
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
                        <?php $count = $count + ($data->jumlah_laki + $data->jumlah_perempuan)?>
                    </tr>
           <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5"><b  class="float-right">Total Seluruh Siswa</b></td>
                <td colspan="2" ><b ><?=$count.' Orang' ?></b></td>
            </tr>
        </tfoot>
    </table>
</div>
       


              