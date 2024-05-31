<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DATA MAHASISWA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-tachometer-alt"></i> HOME</a></li>
                        <li class="breadcrumb-item active">DATA MAHASISWA</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <a href="index.php?page=tambah-mahasiswa" class="btn btn-primary" role="button" title="Tambah Data">
                            <i class="fas fa-plus"></i> Tambah
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="mahasiswa" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIM</th>
                                    <th>NAMA</th>
                                    <th>KELAS</th>
                                    <th>JURUSAN</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include "conf/conn.php";
                                    $no = 0;
                                    $query = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC");
                                    while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo ++$no; ?></td>
                                    <td><?php echo $row['nim']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['kelas']; ?></td>
                                    <td><?php echo $row['jurusan']; ?></td>
                                    <td>
                                        <a href="index.php?page=ubah-mahasiswa&id=<?php echo $row['id_mahasiswa']; ?>" class="btn btn-success" role="button" title="Ubah Data">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="pages/mahasiswa/hapus-mahasiswa.php?id=<?php echo $row['id_mahasiswa']; ?>" class="btn btn-danger" role="button" title="Hapus Data">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
