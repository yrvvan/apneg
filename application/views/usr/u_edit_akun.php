<h3 class="page-title">Edit Data Pengguna</h3>
<div class="row">
    <div class="col-md-12">
        <?php echo $status; ?>
        <div class="portlet box yellow ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> Form edit data diri anda
                </div>
            </div>
            <div class="portlet-body form">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>c_admin/update_user" method="post">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Lengkap</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nama" autofocus="true" required value="<?php echo $data_user->nm_user; ?>">
                                <span class="help-block">
                                    Nama lengkap termasuk gelar pendidikan pengguna </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Jabatan</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="jabatan" required value="<?php echo $data_user->jabatan; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Username</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo $data_user->username; ?>" name="username" required readonly="true">
                                <span class="help-block">
                                    Username ini dibutuhkan untuk login </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email Address</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" value="<?php echo $data_user->email; ?>" name="email" required>
                                </div>
                                <span class="help-block">
                                    Jika pengguna memiliki akun Google (Gmail), akan lebih baik untuk menginput alamat email google tersebut </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <span class="help-block">Jika tidak ingin mengganti password pengguna, tinggalkan kolom password diatas </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Ketik Ulang Password</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="repass" placeholder="Ketik Ulang Password" name="repass">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <select hidden="TRUE" name="privillege" required>
                            <?php if ($data_user->privillege == "common") { ?>
                                <option value="common">User Biasa</option>
                                <option value="superadmin">Admin</option>
                            <?php } else { ?>
                                <option value="superadmin">Admin</option>
                                <option value="common">User Biasa</option>
                            <?php } ?>
                        </select>
                        <div class="form-group">
                            <label for="exampleInputFile" class="col-md-3 control-label">Foto</label>
                            <div class="col-md-9">
                                <input type="file" id="exampleInputFile" name="foto">
                                <p class="help-block">
                                    Dianjurkan untuk memilih file dengan nama tanpa spasi atau simbol selain "_", ex: "avatar1.jpg" atau "avatar_1.png"
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <div class="radio-list">
                                    <?php if ($data_user->jenkel == "Laki-laki") { ?>
                                        <label class="radio-inline" required>
                                            <input type="radio" name="jenkel" id="optionsRadios25" value="Laki-laki" checked> Laki-laki </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="jenkel" id="optionsRadios26" value="Perempuan"> Perempuan </label>
                                    <?php } else { ?>
                                        <label class="radio-inline" required>
                                            <input type="radio" name="jenkel" id="optionsRadios25" value="Laki-laki"> Laki-laki </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="jenkel" id="optionsRadios26" value="Perempuan" checked> Perempuan </label>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>