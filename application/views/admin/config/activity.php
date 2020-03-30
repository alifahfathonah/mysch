<div class="table-responsive">
    <table class="table table-hover dataTable" id="dataTable" width="100%" style="color: black; font-size: 14px">
        <thead>
            <tr >
                <th>#</th>
                <th>IP Address</th>
                <th>MAC Address</th>
                <th>Nama Perangkat</th>
                <th>Browser </th>
                <th>Sistem Operasi</th>
                <th>Waktu Akses</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach ($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data->ip_viwer?></td>
                        <td><?=$data->macadd_viwer?></td>
                        <td><?=$data->user_name?></td>
                        <td><?=$data->browser_viwer?></td>
                        <td><?=$data->os_viwer?></td>
                        <td><?=$data->created_viwer?></td>
                    </tr>
           <?php } ?>
        </tbody>
    </table>
</div>