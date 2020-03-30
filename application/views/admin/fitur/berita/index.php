<div class="col-lg-12 text-right">
    <a href="<?=site_url('admin/berita/add')?>" class="btn btn-success btn-sm mb-3"><i class="fa fa-pencil-alt"></i> Add </a>
</div>
<div class="col-lg-12 table-responsive">
    <table class="table table-hover dataTable" id="dataTable" width="100%" style="color: black; font-size: 14px">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul Berita</th>
                <th>Isi Berita</th>
                <th width="10%">Gambar Berita</th>
                <th width="20%">Action</th>
            </tr>
        </thead>
        <tbody>
           <?php 
                $no = 1;
                foreach ($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data->judul_berita?></td>
                        <td><?=substr($data->isi_berita,0,100)?> ...</td>
                        <td>
                            <?php if($data->image_berita != null){ ?>
                                <a href="<?=base_url().'assets/admin/img/berita/'.$data->image_berita?>"  target="_blank" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Lihat </a>
                            <?php }?>
                        </td>
                        <td>
                            <a href="<?=site_url('admin/berita/edit/'.$data->id_berita)?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Update </a>
                            <button type="submit" class="btn btn-danger btn-sm remove"><i class="fa fa-trash"></i> Delete</button>
                            <input type="hidden" id="id" value="<?=$data->id_berita?>">
                            <input type="hidden" id="name" value="<?=$data->judul_berita?>">
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
                                            window.location= './berita/del/'+id;
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