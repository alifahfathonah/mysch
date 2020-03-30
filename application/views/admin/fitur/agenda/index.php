<div class="col-lg-12 text-right">
    <a href="<?=site_url('admin/agenda/add')?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-pencil-alt"></i> Add </a>
</div>
<div class="col-lg-12 table-responsive">
    <table class="table table-hover dataTable" id="dataTable" width="100%" style="color: black; font-size: 14px">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Agenda</th>
                <th>Pelaksana</th>
                <th>Tanggal Pelaksanaan</th>
                <th width="20%">Pamflet Agenda</th>
                <th width="20%">Action</th>
            </tr>
        </thead>
        <tbody>
           <?php 
                $no = 1;
                foreach ($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data->nama_agenda?></td>
                        <td><?=$data->pelaksana_agenda?></td>
                        <td><?=$data->tanggal_agenda?></td>
                        <td>
                            <?php if($data->pamflet_agenda != null){ ?>
                                <a href="<?=base_url().'assets/admin/img/agenda/'.$data->pamflet_agenda?>"  target="_blank" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Lihat </a>
                            <?php }?>
                        </td>
                        <td>
                            <a href="<?=site_url('admin/agenda/edit/'.$data->id_agenda)?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Update </a>
                            <button type="submit" onclick="return confirm_delete()" class="btn btn-danger btn-sm remove"><i class="fa fa-trash"></i> Delete</a>
                            
                            <input type="hidden" id="id_agenda" value="<?=$data->id_agenda?>">
                            <input type="hidden" id="name" value="<?=$data->nama_agenda?>">
                            <script>
                                $(".remove").click(function(){
                                    var id = document.getElementById("id_agenda").value;
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
                                            window.location= './agenda/del/'+id;
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