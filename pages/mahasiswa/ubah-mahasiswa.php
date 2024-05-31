<?php
    include "conf/conn.php";
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id_mahasiswa='" . $_GET['id'] . "'");
    $row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>UBAH MAHASISWA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-tachometer-alt"></i> HOME</a></li>
                        <li class="breadcrumb-item active">UBAH MAHASISWA</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Ubah Mahasiswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="pages/mahasiswa/ubah-mahasiswa-proses.php">
                        <div class="card-body">
                            <input type="hidden" name="id" value="<?php echo $row['id_mahasiswa']; ?>">
                            <div class="form-group">
                                <label for="nim">Nim</label>
                                <input type="text" name="nim" class="form-control" id="nim" placeholder="Nim" value="<?php echo $row['nim']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="<?php echo $row['nama']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select class="form-control" name="kelas" id="kelas">
                                    <option value="">Pilih</option>
                                    <option value="Pagi" <?= $row['kelas'] == "Pagi" ? 'selected' : '' ?>>Pagi</option>
                                    <option value="Siang" <?= $row['kelas'] == "Siang" ? 'selected' : '' ?>>Siang</option>
                                    <option value="Malam" <?= $row['kelas'] == "Malam" ? 'selected' : '' ?>>Malam</option>
                                    <option value="Karyawan" <?= $row['kelas'] == "Karyawan" ? 'selected' : '' ?>>Karyawan</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" name="jurusan" id="jurusan">
                                    <option value=""> Pilih </option>
                                    <option value="Manajemen Informatika" <?= $row['jurusan'] == "Manajemen Informatika" ? 'selected' : '' ?>>Manajemen Informatika</option>
                                    <option value="Sistem Informasi" <?= $row['jurusan'] == "Sistem Informasi" ? 'selected' : '' ?>>Sistem Informasi</option>
                                    <option value="Teknik Informatika" <?= $row['jurusan'] == "Teknik Informatika" ? 'selected' : '' ?>>Teknik Informatika</option>
                                    <option value="Sistem Komputer" <?= $row['jurusan'] == "Sistem Komputer" ? 'selected' : '' ?>>Sistem Komputer</option>
                                    <option value="Akutansi" <?= $row['jurusan'] == "Akutansi" ? 'selected' : '' ?>>Akutansi</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
