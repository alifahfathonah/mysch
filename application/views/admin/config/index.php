<style>
    td{
        font-size: 14px;
    }
</style>
<form action="<?=site_url('msc/process')?>" method="POST">
    <div class="row">
        <div class="col-lg-12">
            <table class="" style="color: black;">
                <tr><th colspan="3"><b><i>Informasi Sistem</i></b></th></tr>
                <tr><td width="15%">Vendor Sistem</td><td> : </td><td><?=$_SERVER['HTTP_USER_AGENT']?></td></tr>
                <tr><td>Bahasa Sistem</td><td> : </td><td><?=$_SERVER['HTTP_ACCEPT_LANGUAGE']?></td></tr>
                <tr><td>OS Server</td><td> : </td><td><?=$this->agent->platform()?></td></tr>
                <tr><td>Server Sistem</td><td> : </td><td><?=$_SERVER['SERVER_SOFTWARE']?></td></tr>
                <tr><td>Nama Server</td><td> : </td><td><?=$_SERVER['SERVER_NAME']?></td></tr>
                <tr><td>Alamat IP </td><td> : </td><td><?=$_SERVER['SERVER_ADDR']?></td></tr>
            </table>
        </div>
        <div class="col-lg-12">
            <hr>
        </div>
            <div class="col-lg-12 form-group mt-3">
                <div class="row">
                    <div class="col-lg-6">
                        <input type="hidden" name="id" value="<?=$row->id_sistem?>">
                        <input type="text" name="s_name" class="form-control" value="<?=$row->name_sistem?>" style="color: black">
                    </div>
                    <div class="col-lg-6">
                        <input type="password" name="s_pass" class="form-control" placeholder="Password Sistem *" style="color: black">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <h6><b>Maintenance Mode Sistem</b></h6>
                        <label class="switch">
                            <input type="checkbox" name="mm_mode" value="2" <?=$row->mode_sistem == 2 ? 'checked' : null?>>
                            <div class="slider round"></div>
                        </label>
                    </div>
                    <div class="col-lg-6 text-center">
                        <h6><b>Off Mode Sistem</b></h6>
                        <label class="switch">
                            <input type="checkbox" name="off_mode" value="3" <?=$row->mode_sistem == 3 ? 'checked' : null?>>
                            <div class="slider"></div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" name="up" class="btn btn-info btn-sm float-right"> Update </button>
            </div>
    </div>
</form>