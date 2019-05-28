<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="<?php echo base_url() ?>assets/css/profil.css" rel="stylesheet" />
    <div class="container-fluid p-5 mt-5">
        <div class="user-profle">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-primary">
                            <h5 class="title">Edit Profile</h5>
                        </div>
                        <div class="card-body">
                            <form class="p-2" action="<?= base_url('admin/cek_profile')?>">
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label>ID Pelabuhan</label>
                                            <input type="text" class="form-control" disabled="" placeholder="Company"
                                                value="Nanti isinya sesuai yang diinputnya pas daftar">
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-1">
                                        <div class="form-group">
                                            <label>Pelabuhan</label>
                                            <input type="text" class="form-control" placeholder="Pelabuhan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" placeholder="Email" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label>
                                            <input type="text" class="form-control" placeholder="Status" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Agama</label>
                                            <input type="text" class="form-control" placeholder="Status" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="Home Address"
                                                value="Jalan Tengku Meulagu Tibang Kecamatan Syiah Kuala Banda Aceh"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Negara</label>
                                            <input type="text" class="form-control" placeholder="Agama"
                                                value="Indonesia" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>No Hp/Telp</label>
                                            <input type="number" class="form-control" placeholder="No Hp/Telp"
                                                value="081264563223" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Kode Pos</label>
                                            <input type="number" class="form-control" placeholder="1234567">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea rows="4" cols="80" class="form-control"
                                                placeholder="Ceritakan deskripsimu"
                                                value="Mike">Saya adalah nelayan yang sangat ceria dan baik hati</textarea>
                                        </div>
                                    </div>
                                </div>                            
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
                                <div class="form-group shadow-none " rel="tooltip"
                                    title="Klik di  sini untuk mengganti foto profil" data-placement="top">
                                    <input type="file"><img type="file" class="avatar border-gray rounded-circle"
                                        src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="...">
                                    <h5 class="title text-primary">Maulana Ihsan Ahmad</h5>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="<?= base_url('admin/cek_profile')?>" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </div>
                        </form>
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
                
            </div>
        </div>
    </div>
 <!-- /content -->