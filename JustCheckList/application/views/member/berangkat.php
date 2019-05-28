<<<<<<< HEAD
<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <div class="container-fluid p-5 mt-5">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-schedule-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Keberangkatan</h1>
                    <hr>
                  </div>
                  <form class="user" action="<?= base_url('home/preview')?>">
                    <label for="">ID Kapal</label>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="idKapal"
                        aria-describedby="emailHelp" placeholder="Masukkan ID Kapal ..." readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Keberangkatan</label>
                      <input type="text" class="form-control date-picker" placeholder="Masukkan Jadwal..."
                        data-datepicker-color="primary" required>
                    </div>
                    <div class="form-group">
                      <label for="">Tiba</label>
                      <input type="text" class="form-control date-picker" placeholder="Masukkan Jadwal..."
                        data-datepicker-color="primary" required>
                    </div>
                    <div class="form-group">
                      <label for="">Daftar Anggota</label>
                      <input type="text" class="form-control search" placeholder="Masukkan Daftar Anggota..." required>
                    </div>
                    <div class="table-wrapper">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>
                              <img class="gambar" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" srcset="" />
                            </td>
                            <td>Maulana Ihsan Ahmad</td>
                            <td>
                              <a href="#hapusAnggota" class="delete" data-toggle="modal"><i class="material-icons"
                                  data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td><img class="gambar" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" srcset="" />
                            </td>
                            <td>Dominique Perrier</td>
                            <td>
                              <a href="#hapusAnggota" class="delete" data-toggle="modal"><i class="material-icons"
                                  data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block btn-round">
                      Submit
                    </button>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Hapus Data Anggota Modal -->
        <div id="hapusAnggota" class="modal fade">
          <div class="modal-dialog" style="max-width:400px;">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title">Hapus Angota</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Anda yakin ingin menghapus data anggota?</p>
                  <p class="text-warning"><small>Keputusan tidak dapat diulang.</small></p>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                  <input type="submit" class="btn btn-danger" value="Hapus">
                </div>
              </form>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
=======
<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <div class="container-fluid p-5 mt-5">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-schedule-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Keberangkatan</h1>
                    <hr>
                  </div>
                  <form class="user" action="<?= base_url('home/preview')?>">
                    <label for="">ID Kapal</label>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="idKapal"
                        aria-describedby="emailHelp" placeholder="Masukkan ID Kapal ..." readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Keberangkatan</label>
                      <input type="text" class="form-control date-picker" placeholder="Masukkan Jadwal..."
                        data-datepicker-color="primary" required>
                    </div>
                    <div class="form-group">
                      <label for="">Tiba</label>
                      <input type="text" class="form-control date-picker" placeholder="Masukkan Jadwal..."
                        data-datepicker-color="primary" required>
                    </div>
                    <div class="form-group">
                      <label for="">Daftar Anggota</label>
                      <input type="text" class="form-control search" placeholder="Masukkan Daftar Anggota..." required>
                    </div>
                    <div class="table-wrapper">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>
                              <img class="gambar" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" srcset="" />
                            </td>
                            <td>Maulana Ihsan Ahmad</td>
                            <td>
                              <a href="#hapusAnggota" class="delete" data-toggle="modal"><i class="material-icons"
                                  data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td><img class="gambar" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" srcset="" />
                            </td>
                            <td>Dominique Perrier</td>
                            <td>
                              <a href="#hapusAnggota" class="delete" data-toggle="modal"><i class="material-icons"
                                  data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block btn-round">
                      Submit
                    </button>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Hapus Data Anggota Modal -->
        <div id="hapusAnggota" class="modal fade">
          <div class="modal-dialog" style="max-width:400px;">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title">Hapus Angota</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Anda yakin ingin menghapus data anggota?</p>
                  <p class="text-warning"><small>Keputusan tidak dapat diulang.</small></p>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                  <input type="submit" class="btn btn-danger" value="Hapus">
                </div>
              </form>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
>>>>>>> atika
<!-- /content -->