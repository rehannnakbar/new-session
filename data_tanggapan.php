<div class="container">
<div class="row">
    <div class="col-md-12 mt-3">
    <div class="card">
    <div class="card-header">
        DATA TANGGAPAN
    </div>
<div class="card-body">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.dataTables.min.css">

    <table class="table table-striped" id="datatable">
        <thead>
            <tr>
                <th>NO</th>
                <th>TANGGAL</th>
                <th>NIK</th>
                <th>JUDUL</th>
                <th>TANGGAPAN</th>
                <th>STATUS</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../config/koneksi.php';
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT a.*,b.* FROM tanggapan a INNER JOIN pengaduan b ON a.id_pengaduan=b.id_pengaduan");
            while ($data = mysqli_fetch_array($query)) { ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data ['tgl_tanggapan'] ?></td>
                <td><?php echo $data ['nik'] ?></td>
                <td><?php echo $data ['judul_laporan'] ?></td>
                <td><?php echo $data ['tanggapan'] ?></td>
                <td>
                <?php
                    if ($data['status'] == 'proses') {
                        echo "<span class='badge bg-warning'>Proses</span>";
                    } elseif ($data['status'] == 'selesai') {
                        echo "<span class='badge bg-success'>Selesai</span>";
                    } else {
                        echo "<span class='badge bg-danger'>Menunggu</span>";
                    }
                ?>
                
                </td>
                <td>
                                  <a href="" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_pengaduan']?>"><i class="bi bi-trash-fill"></i></a>
                    <!-- Modal hapus-->
                    <div class="modal fade" id="hapus<?php echo $data['id_pengaduan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog"> 
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="edit_data.php" method="POST">
                            <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $data['id_pengaduan']?>">
                           <p>apakah anda yakin akan menghapus data <br><?php  echo $data['judul_laporan'] ?></p>
                            <div class="modal-footer">
                            <button type="submit" name="hapus_pengaduan" class="btn btn-primary">HAPUS</button>
                        </div>
                        </form>

                            </div>
                            </div>
                            <div>
                                </td>
                                </tr>
                            <?php } ?>       
                        </tbody>
                    </table>
               </div>
            </div>
        </div>
            </div>
            </div>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

                
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>     
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
<script src="script.js"></script>