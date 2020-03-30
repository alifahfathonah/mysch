<div class="table-responsive">
    <table class="table table-hover dataTable" id="dataTable" width="100%" style="color: black; font-size: 14px">
        <thead>
            <tr >
                <th>#</th>
                <th>User</th>
                <th>Ip Address</th>
                <th>Isi Kritik Saran</th>
                <th>Tanggal </th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach ($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data->user_krisar?></td>
                        <td><?=$data->ip_krisar?></td>
                        <td><?=$data->isi_krisar?></td>
                        <td><?=$data->created_krisar?></td>
                    </tr>
           <?php } ?>
        </tbody>
    </table>
</div>