<?php   include "session.php";
        include "header.php"; 
        $id_user   = $_SESSION['id_user']; 
?>
<title>Cek Rekening</title>

<body>
    <?php $rekening = "active bg-info fw-bold bg-opacity-50";
    include "navbar.php"; ?>
    <main id="cek-rekening" class="mt-4 mb-5">
        <section class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <table id="info" class="table table-borderless table-sm">
                            <?php
                            include('koneksi.php');
                                $rekening   = $_SESSION['rekening'];
                            
                            $sql        = "SELECT * FROM rekening WHERE nomor_rekening = '$rekening'";
                            $query      = mysqli_query($connect, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <th class="w-25">No. Rekening</th>
                                    <td>: <?= $data['nomor_rekening']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama</td>
                                    <td>: <?= $data['nama_depan']; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</td>
                                    <td>: <?= $data['alamat']; ?></td>
                                </tr>
                                <tr>
                                    <th>No. HP</th>
                                    <td>: <?= $data['no_telp1']; ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-end">
                        <div id="table-head" class="container me-4">
                            <div class="table-title rounded-3">
                                <div class="row justify-content-between">
                                    <div class="col-sm-5 d-flex align-items-center">
                                        <h2>Mutasi <b>Rekening</b></h2>
                                    </div>
                                    <div class="col-sm-7">
                                        <div id="tanggal" class="form-control text-center text-secondary">
                                            <div class="row">
                                                <div class="col-md-1 d-flex justify-content-center align-items-center">
                                                    <i class="ps-3 fa-solid fa-calendar-days"></i>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" id="btnStart" class="jsDate form-control" placeholder="Input" required />
                                                </div>
                                                <div class="col-md-1 d-flex justify-content-center align-items-center">
                                                    <span> - </span>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" id="btnEnd" class="jsDate form-control" placeholder="Input" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            if(isset($_GET['dari']) && isset($_GET['sampai'])):
                $dari = $_GET['dari'];
                $sampai = $_GET['sampai'];
                $sql2    = "SELECT * FROM `mutasi` WHERE id_user = $id_user AND tanggal >= '$dari' AND tanggal <= '$sampai'";
            ?>
                <div id="read" class="container mt-2">
                    <table class="table table-striped table-hover text-center">
                        <thead>
                            <tr>
                                <th style="width: 18%">Tanggal</th>
                                <th>Keterangan</th>
                                <th>Debet</th>
                                <th>Kredit</th>
                                <th>Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include('koneksi.php');
                        
                        $query2    = mysqli_query($connect, $sql2);

                        while ($data = mysqli_fetch_array($query2)) {
                        ?>
                                <tr>
                                    <td><?= $data['tanggal']; ?></td>
                                    <td class="text-start"><?= $data['keterangan']; ?></td>
                                    <td><?php
                                        if ($data['jenis'] == 'K') {
                                            echo $data['jumlah_uang'];
                                        } else {
                                            echo "-";
                                        } ?>
                                    </td>
                                    <td><?php
                                        if ($data['jenis'] == 'M') {
                                            echo $data['jumlah_uang'];
                                        } else {
                                            echo "-";
                                        } ?>
                                    </td>
                                    <td><?php
                                        if ($data['jenis'] == 'K') {
                                            echo $data['jumlah_uang'] -= $data['jumlah_uang'];
                                        } else {
                                            echo $data['jumlah_uang'] += $data['jumlah_uang'];
                                        } ?></td></b></td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </section>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>