<?php   include "session.php";
        include "header.php"; 
        $id_user   = $_SESSION['id_user']; 
?>
<title>Dream Saver</title>

<body>
    <?php $dream = "active bg-info fw-bold bg-opacity-50";
    include "navbar.php"; ?>
    
    <main id="main" class="mt-4 mb-5">
        <section class="container">
            <div class="row">
                <div class="col-md-8 pe-4">
                    <div id="read" class="container">
                        <div class="table-wrapper">
                            <div class="table-title rounded-3">
                                <h2>Dream <b>Saver</b></h2>
                            </div>
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Rencana</th>
                                        <th>Biaya</th>
                                        <th>Tabungan<br>per Bulan</th>
                                        <th>Estimasi<br>Dana Terkumpul</th>
                                        <th>Waktu<br>Menabung</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include('koneksi.php');
                                $sql    = "SELECT * FROM dream WHERE id_user = $id_user";
                                $query    = mysqli_query($connect, $sql);
                                $i = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $data['rencana']; ?></td>
                                            <td><?= $data['jumlah_uang']; ?></td>
                                            <td><?= $data['tabungan_bulan']; ?></td>
                                            <td><?= $data['dana_terkumpul']; ?></td>
                                            <td><?= $data['tenor']; ?></td>
                                            <td>
                                                <a href="edit_rencana.php?id=<?= $data['id_dream']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                <a href="proses/hapus_rencana.php?id=<?= $data['id_dream']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="form-dream" class="col-md-4 p-3 bg-info bg-opacity-50 rounded-3" style="margin-bottom:5%">
                    <div class="container">
                        <div id="form-head" class="text-center mb-4">
                            <h1 class="h3 fw-bolder">Tambah Rencana</h1>
                            <p class="">Isi data untuk rencana baru</p>
                            <hr>
                        </div>
                        <div class="form">
                            <form method="POST" action="proses/tambah_dream.php">
                                <input name="rencana" type="text" class="input form-control my-1" placeholder="Rencana *" required>
                                <input name="jumlah_uang" type="number" min="0" step="10000" class="input form-control my-3" placeholder="Biaya *" required>
                                <input name="tabungan_bulan" type="number" min="0" step="10000" class="input form-control my-3" placeholder="Biaya per Bulan *" required>
                                <input name="setoran_awal" type="number" min="0" step="10000" class="input form-control my-3" placeholder="Setoran Awal *" required>
                                <textarea name="keterangan" cols="30" rows="3" class="input form-control my-1" placeholder="Keterangan (opsional)"></textarea>
                                <div class="p-1 mt-2">
                                    <button id="login" class="btn btn-info fw-bold py-1 px-3" type="submit">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>