<?php   include "session.php";
        include "header.php"; ?>
<title>Edit Dream</title>

<body>
    <?php include "navbar.php"; ?>
    <main id="main" class="mt-4 mb-5">
        <section class="container">
            <div class="row">
                <div id="form-dream" class="col-md-6 mx-auto p-3 bg-info bg-opacity-50 rounded-3" style="margin-bottom:5%">
                    <div class="container">
                        <div id="form-head" class="text-center mb-4">
                            <h1 class="h3 fw-bolder">Edit Rencana</h1>
                            <p class="">Ubah isi data dari rencanamu</p>
                            <hr>
                        </div>
                        <?php
                        include('koneksi.php');

                        $id_dream = $_GET['id'];
                        $sql    = "SELECT * FROM dream WHERE id_dream = '$id_dream'";
                        $query    = mysqli_query($connect, $sql);

                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <div class="form">
                                <form method="POST" action="edit_rencana_proses.php">
                                    <input type="hidden" name="id_dream" value="<?= $data['id_dream']; ?>">
                                    <!-- <label class="" for="">Rencana</label> -->
                                    <input name="rencana" type="text" class="input form-control my-1" placeholder="Rencana *" value="<?= $data['rencana']; ?>">
                                    <!-- <label class="" for="">Biaya</label> -->
                                    <input name="biaya" type="number" min="0" step="10000" class="input form-control my-3" placeholder="Biaya *" value="<?= $data['jumlah_uang']; ?>">
                                    <!-- <label class="" for="">Biaya per Bulan</label> -->
                                    <input name="tabungan_bulan" type="number" min="0" step="10000" class="input form-control my-3" placeholder="Biaya per Bulan *" value="<?= $data['tabungan_bulan']; ?>">
                                    <!-- <label class="" for="">Setoran Awal</label> -->
                                    <input name="setoran_awal" type="number" min="0" step="10000" class="input form-control my-3" placeholder="Setoran Awal *" value="<?= $data['dana_terkumpul']; ?>">
                                    <!-- <label class="" for="">Tenor</label> -->
                                    <input name="tenor" type="number" min="0" class="input form-control my-3" placeholder="Tenor (Bulan) *" value="<?= $data['tenor']; ?>">
                                    <!-- <label class="" for="">Keterangan</label> -->
                                    <textarea name="keterangan" cols="30" rows="3" class="input form-control my-1" placeholder="Keterangan (opsional)"><?= $data['keterangan']; ?></textarea>
                                    <div class="p-1 mt-2">
                                        <button id="login" class="btn btn-info fw-bold py-1 px-3" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>