<<<<<<< HEAD
<!-- content -->
    <div class="container-fluid pl-5 pr-5 pt-5 mt-5">
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Keberangkatan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">10 <span>Kapal</span></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-ship" style="font-size:35px; color: gainsboro;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Nelayan
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">100 <span>Orang</span> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users" style="font-size:35px; color: gainsboro;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Keterlambatan
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">10 <span>Kapal</span></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clock" style="font-size:35px; color: gainsboro;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pl-5 pr-5 ">
        <div class="card shadow mb-4">
            <div class="card-header" style="background: #435d7d; border-radius: 5px; ">
                <h4 class="ml-4 font-weight-bold text-light"><i class="fas fa-ship"
                        style="font-size:30px; color:white;"></i> KEBERANGKATAN</h4>

            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid pl-5 pr-5">
        <div class="card shadow mb-4">
            <div class="card-header" style="background: #435d7d; border-radius: 5px; ">
                <h4 class="ml-4 font-weight-bold text-light"><i class="fas fa-users"
                        style="font-size:30px; color: white;"></i> JUMLAH NELAYAN</h4>

            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid pl-5 pr-5">
        <div class="card shadow mb-4">
            <div class="card-header" style="background: #435d7d; border-radius: 5px; ">
                <h4 class="ml-4 font-weight-bold text-light"><i class="fas fa-clock"
                        style="font-size:30px; color:white;"></i> KETERLAMBATAN</h4>

            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart2"></canvas>
                </div>

            </div>
        </div>
    </div>

    </div>
    <div class="container-fluid pl-5 pr-5">
        <div class="table-wrapper shadow-lg ">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>TABEL <b>JADWAL</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>ID Kapal</th>
                        <th>Keberangkatan</th>
                        <th>Tiba</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td>1</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                <label for="checkbox2"></label>
                            </span>
                        </td>
                        <td>2</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                <label for="checkbox3"></label>
                            </span>
                        </td>
                        <td>3</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox4" name="options[]" value="1">
                                <label for="checkbox4"></label>
                            </span>
                        </td>
                        <td>4</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                <label for="checkbox5"></label>
                            </span>
                        </td>
                        <td>5</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
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
=======
<!-- content -->
    <div class="container-fluid pl-5 pr-5 pt-5 mt-5">
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Keberangkatan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">10 <span>Kapal</span></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-ship" style="font-size:35px; color: gainsboro;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Nelayan
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">100 <span>Orang</span> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users" style="font-size:35px; color: gainsboro;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Keterlambatan
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">10 <span>Kapal</span></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clock" style="font-size:35px; color: gainsboro;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pl-5 pr-5 ">
        <div class="card shadow mb-4">
            <div class="card-header" style="background: #435d7d; border-radius: 5px; ">
                <h4 class="ml-4 font-weight-bold text-light"><i class="fas fa-ship"
                        style="font-size:30px; color:white;"></i> KEBERANGKATAN</h4>

            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid pl-5 pr-5">
        <div class="card shadow mb-4">
            <div class="card-header" style="background: #435d7d; border-radius: 5px; ">
                <h4 class="ml-4 font-weight-bold text-light"><i class="fas fa-users"
                        style="font-size:30px; color: white;"></i> JUMLAH NELAYAN</h4>

            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid pl-5 pr-5">
        <div class="card shadow mb-4">
            <div class="card-header" style="background: #435d7d; border-radius: 5px; ">
                <h4 class="ml-4 font-weight-bold text-light"><i class="fas fa-clock"
                        style="font-size:30px; color:white;"></i> KETERLAMBATAN</h4>

            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart2"></canvas>
                </div>

            </div>
        </div>
    </div>

    </div>
    <div class="container-fluid pl-5 pr-5">
        <div class="table-wrapper shadow-lg ">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>TABEL <b>JADWAL</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>ID Kapal</th>
                        <th>Keberangkatan</th>
                        <th>Tiba</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td>1</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                <label for="checkbox2"></label>
                            </span>
                        </td>
                        <td>2</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                <label for="checkbox3"></label>
                            </span>
                        </td>
                        <td>3</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox4" name="options[]" value="1">
                                <label for="checkbox4"></label>
                            </span>
                        </td>
                        <td>4</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                <label for="checkbox5"></label>
                            </span>
                        </td>
                        <td>5</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
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
>>>>>>> atika
