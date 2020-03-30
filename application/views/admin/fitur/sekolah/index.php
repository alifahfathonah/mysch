<?=form_open_multipart('admin/sekolah/process')?>
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?=site_url('admin/sekolah/logo')?>" class="btn btn-info btn-sm"><i class="fa fa-border-all"></i> Logo Sekolah</a>
        </div>
        <div class="col-lg-12 form-group">
            <label>Nama Sekolah *</label>
            <input type="text" name="s_nama" value="<?=$row->nama_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-12 form-group">
            <label>Inisal Sekolah *</label><small> (Nama Sebutan atau nama Populer Sekolah) </small>
            <input type="text" name="s_inisial" value="<?=$row->inisial_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Nomor Pokok Sekolah Nasional (NPSN) *</label>
            <input type="number" name="s_npsn" value="<?=$row->npsn_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-6 form-group">
            <label>Kepala Sekolah *</label>
            <input type="text" name="s_kepala" value="<?=$row->kepala_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-4 form-group">
            <label>Akreditasi Sekolah *</label>
            <select name="s_akreditasi" class="form-control" required>
                <option value="">- pilih -</option>
                <option value="A" <?=$row->akreditasi_sekolah == 'A' ? 'selected' : null ?>>Akreditasi A</option>
                <option value="B" <?=$row->akreditasi_sekolah == 'B' ? 'selected' : null ?>>Akreditasi B</option>
                <option value="C" <?=$row->akreditasi_sekolah == 'C' ? 'selected' : null ?>>Akreditasi C</option>
                <option value="T" <?=$row->akreditasi_sekolah == 'T' ? 'selected' : null ?>>Terakreditasi</option>
                <option value="TT" <?=$row->akreditasi_sekolah == 'TT' ? 'selected' : null ?>> - </option>
            </select>
        </div>
        <div class="col-lg-4 form-group">
            <label>Kurikulum Sekolah *</label>
            <input type="text" name="s_kurikulum" value="<?=$row->kurikulum_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-4 form-group">
            <label>Tahun Ajaran Sekolah *</label>
            <input type="text" name="s_ta" value="<?=$row->ta_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-4 form-group">
            <label>Semester Sekolah *</label>
            <select name="s_semester" class="form-control" required>
                <option value="Ganjil" <?=$row->semester_sekolah == 'Ganjil' ? 'selected' : null?>> Semester Ganjil</option>
                <option value="Genap" <?=$row->semester_sekolah == 'Genap' ? 'selected' : null?>> Semester Genap</option>
            </select>
        </div>
        <div class="col-lg-4 form-group">
            <label>Telepon Sekolah *</label>
            <input type="text" name="s_telp" value="<?=$row->telp_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-4 form-group">
            <label>E-Mail Sekolah *</label>
            <input type="email" name="s_mail" value="<?=$row->email_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-3 form-group">
            <label>Akun Facebook *</label>
            <input type="text" name="s_fb" value="<?=$row->fb_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-3 form-group">
            <label>Akun Instagram *</label>
            <input type="text" name="s_ig" value="<?=$row->ig_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-3 form-group">
            <label>Akun Tweeter *</label>
            <input type="text" name="s_tw" value="<?=$row->tw_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-3 form-group">
            <label>Channel Youtube *</label>
            <input type="text" name="s_ytb" value="<?=$row->ytb_sekolah?>" class="form-control" required>
        </div>
        <div class="col-lg-12 form-group">
            <label>Deksripsi Sekolah *</label>
            <textarea name="s_desc" rows="3" class="form-control" required><?=$row->desc_sekolah?></textarea>
        </div>
        <div class="col-lg-6 form-group">
            <label>Alamat Lengkap Sekolah *</label>
            <textarea name="s_alamat" rows="5" class="form-control" required><?=$row->alamat_sekolah?></textarea>
        </div>
        <div class="col-lg-6 form-group">
            <label>Embed A Maps (Lihat di Google Maps) *</label>
            <textarea name="s_embed" rows="5" class="form-control" required><?=$row->embed_sekolah?></textarea>
        </div>
        <div class="col-lg-12 form-group text-right">
            <button type="submit" name="profil" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Update </button>
        </div>
    </div>
<?=form_close()?>