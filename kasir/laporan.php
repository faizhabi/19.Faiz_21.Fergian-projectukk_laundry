<?php
include '../layouts/header.php';
include '../layouts/navbar.php';
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Transaksi</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3>

                <div class="card-tools">
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"> Tambah Data</i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama Member</th>
                      <th>Jenis Paket</th>
                      <th>Nama Outlet</th>
                      <th>Berat Cucian</th>
                      <th>Total Bayar</th>
                      <th>Status</th>
                      <th>Ubah Status</th>
                      <th>Bayar Transaksi</th>
                      <th style="width: 160px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>Alamat Transaksi</td>
                      <td>Telepon</td>
                      <td>Telepon</td>
                      <td>Telepon</td>
                      <td>
                        <p class="btn btn-default btn-sm">Baru</p>
                        <p class="btn btn-warning btn-sm">Proses</p>
                        <p class="btn btn-primary btn-sm">Selesai</p>
                        <p class="btn btn-success btn-sm">Diambil</p>
                        <p class="btn btn-success btn-sm">Di Bayar</p>
                        <p class="btn btn-danger btn-sm">Belum Dibayar</p>
                      </td>
                      <td>
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-ubah-status"><i class="fas fa-edit"></i>Ubah</button>
                      </td>
                      <td>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-bayar"><i class="fas fa-edit"></i>Bayar</button>
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-batalkan"><i class="fas fa-times"></i>Batalkan</button>
                      </td>
                      <td>
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i>Edit</button>
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus"><i class="fas fa-trash"></i> Hapus</button>
                      </td>
                    </tr>

                    <div class="modal fade" id="modal-hapus">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Hapus Data Transaksi</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">                                    
                                    <p>Apakah anda yakin akan menghapus data ini...</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                <a href="hapus_transaksi.php" class="btn btn-primary">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-bayar">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Bayar Transaksi</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">                                    
                                    <p>Apakah anda sudah menerima dana transaksi sebesar <b>Jumlah Uang</b> dari <b>Nama Member</b>...?</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                <a href="hapus_transaksi.php" class="btn btn-primary">Bayar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-batalkan">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Batal Bayar Transaksi</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">                                    
                                    <p>Apakah anda sudah ingin membatalkan pembayaran ini sebesar <b>Jumlah Uang</b> dari <b>Nama Member</b>...?</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                <a href="hapus_transaksi.php" class="btn btn-primary">Simpan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-ubah-status">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Ubah Status Transaksi</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="edit_transaksi.php">
                                <div class="modal-body">                                    
                                <div class="form-group">
                                        <label>Pilih Status</label>
                                        <select class="form-control">
                                            <option>--- Silahkan Pilih Status ---</option>
                                            <option value="baru">Baru</option>
                                            <option value="proses">Proses</option>
                                            <option value="selesai">Selesai</option>
                                            <option value="diambil">Diambil</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-edit">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Data Transaksi</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="edit_transaksi.php">
                                <div class="modal-body">                                    
                                <div class="form-group">
                                        <label>Pilih Member</label>
                                        <select class="form-control">
                                            <option>--- Pilih Nama Outlet ---</option>
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Outlet</label>
                                        <select class="form-control">
                                            <option>--- Pilih Nama Outlet ---</option>
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Paket</label>
                                        <select class="form-control">
                                            <option>--- Pilih Nama Paket ---</option>
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Berat</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Berat Keterangan">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" name="" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modal-tambah">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Data Transaksi</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="tambah_transaksi.php">
                                <div class="modal-body">                                    
                                <div class="form-group">
                                        <label>Pilih Member</label>
                                        <select class="form-control">
                                            <option>--- Pilih Nama Outlet ---</option>
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Outlet</label>
                                        <select class="form-control">
                                            <option>--- Pilih Nama Outlet ---</option>
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Paket</label>
                                        <select class="form-control">
                                            <option>--- Pilih Nama Paket ---</option>
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Berat</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Berat Keterangan">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" name="" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
<?php
include '../layouts/footer.php';
?>