<!-- content -->
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
                            <form class="p-2" action="<?= base_url('home/cek_profle') ?>">
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label>ID Kapal</label>
                                            <input type="text" class="form-control" disabled="" placeholder="Company"
                                                value="Nanti isinya sesuai yang diinputnya pas daftar">
                                        </div>
                                    </div>
                                    <div class="col-md-3  pr-1">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" placeholder="Email" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" class="form-control" placeholder="Status">
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-1">
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input type="text" class="form-control" placeholder="Agama" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>No HP/Telp</label>
                                            <input type="number" class="form-control" placeholder="No HP/Telp" required>
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
                                            <input type="text" class="form-control" placeholder="Negara">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Kota/Kabupaten</label>
                                            <input type="text" class="form-control" placeholder="Kota/Kabupaten">
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
                                    <a href="<?php echo base_url('home/cek_profile') ?>" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /content -->