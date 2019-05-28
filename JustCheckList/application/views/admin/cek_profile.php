<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="<?php echo base_url() ?>assets/css/profil.css" rel="stylesheet" />
    <div class="container-fluid p-5 mt-5">
        <div class="user-profle">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header pb-4 pt-4 text-info">
                            <h5 class="title">My Profile</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group ">
                                            <label>ID Pelabuhan</label>
                                            <p class="profile-list">Nanti isinya sesuai yang diinputnya pas daftar</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-1">
                                        <div class="form-group">
                                            <label>Pelabuhan</label>
                                            <p class="profile-list">Lampulo</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <p class="profile-list">Maulana Ihsan Ahmad</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <p class="profile-list">maulanaihsanpress@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label>
                                            <p class="profile-list">Menikah</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Agama</label>
                                            <p class="profile-list">Islam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <p class="profile-list">Jalan Tengku Meulagu Tibang Kecamatan Syiah Kuala
                                                Banda Aceh</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group text-warning">
                                            <label>Negara</label>
                                            <p class="profile-list">Indonesia</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group text-warning">
                                            <label>No Hp/Telp</label>
                                            <p class="profile-list">081264563223</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group text-warning">
                                            <label>Kode Pos</label>
                                            <p class="profile-list">1234567</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <p class="profile-list">Saya adalah nelayan yang bahagia baik hati dan rajin
                                                menabung.</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="belakang">
                            <img src="<?php echo base_url() ?>assets/img/header.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="author">

                                <img class="avatar border-gray rounded-circle" src="<?php echo base_url() ?>assets/img/default-avatar.png"
                                    alt="...">
                                <h5 class="title text-primary">Maulana Ihsan Ahmad</h5>

                                <a href="<?php echo base_url() ?>admin/edit_profile">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Undang Anggota Modal -->
    <div id="undangAnggota" class="modal fade">
        <div class="modal-dialog" style="max-width:400px;">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Undang Anggota</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12 p-1">
                            <div class="form-group">
                                <p>Cari Anggota</p>
                                <input type="search" class="form-control" placeholder="Nama" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="OK">
                        <input type="button" class="btn btn-danger" data-dismiss="modal" value="Batal">
                    </div>
                </form>
            </div>
        </div>
    </div>
 <!-- /content -->