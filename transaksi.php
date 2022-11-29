<?php   include "session.php";
        include "header.php"; 
        $id_user   = $_SESSION['id_user']; 
?>
<title>Transaksi</title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })
</script>

<body>
    <?php $transaksi = "active bg-info fw-bold bg-opacity-50";
    include "navbar.php"; ?>
    <main id="main" class="mt-4 mb-5">
        <section class="container">
            <div class="row">
                <div class="col-md-8 pe-4">
                    <div id="read" class="container">
                        <div class="table-wrapper">
                            <div class="table-title rounded-3">
                                <h2>Riwayat <b>Transfer</b></h2>
                            </div>
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th class="w-25">Jumlah Uang</th>
                                        <th class="w-25">Rekening</th>
                                        <th class="w-50">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include('koneksi.php');

                                $sql    = "SELECT * FROM transaksi WHERE id_user = $id_user";
                                $query    = mysqli_query($connect, $sql);
                                $i = 1;

                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $data['jumlah_uang']; ?></td>
                                            <td><?= $data['rekening_tujuan']; ?></td>
                                            <td><?= $data['keterangan']; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="form-dream" class="col-md-4 p-3 bg-info bg-opacity-50 rounded-3">
                    <div class="container">
                        <div id="form-head" class="text-center mb-4">
                            <h1 class="h3 fw-bolder">Buat Transaksi</h1>
                            <p class="">Isi data untuk transaksi baru</p>
                            <hr>
                        </div>
                        <div class="form">
                            <form method="POST" action="proses/tambah_transaksi.php">
                                <div id="jumlah-pinjaman" class="input-group mb-3">
                                    <span class="input-group-btn mx-2">
                                        <button type="button" class="kurang-uang btn btn-outline-dark" data-type="minus" data-field="">
                                            <span><i class="fa-solid fa-minus"></i></span>
                                        </button>
                                    </span>
                                    <span class="pt-2 pe-2">Rp. </span><input type="number" id="uang" name="jumlah_uang" class="input form-control" placeholder="Jumlah Uang *" min="1" required />
                                    <span class="input-group-btn mx-2">
                                        <button type="button" class="tambah-uang btn btn-outline-dark" data-type="plus" data-field="">
                                            <span><i class="fa-solid fa-plus"></i></span>
                                        </button>
                                    </span>
                                </div>
                                <!-- <input name="jumlah_uang" type="number" min="10000" class="input form-control my-3" placeholder="Jumlah Uang *" required> -->
                                <div id="rekening-tujuan" class="input form-control my-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <select name="rekening_tujuan" class="input form-control bg-light" id="rekening" required>
                                                <option value="" hidden selected>Pilih Rekening</option>
                                            <?php
                                            include('koneksi.php');
                                            $sql2    = "SELECT * FROM daftar_rekening WHERE id_user = $id_user";
                                            $query2    = mysqli_query($connect, $sql2);
                                            while ($data = mysqli_fetch_array($query2)):?>
                                                <option value="<?= $data['nomor_rekening']; ?>" data-bank="<?= $data['bank']; ?>">
                                                    <?= $data['nomor_rekening']; ?> - <?= $data['nama']; ?>  (<?= $data['bank']; ?>)
                                                </option>
                                            <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 d-grid">
                                            <a href="#tambah-rekening" class="btn btn-info text-secondary fw-bolder text-white" data-bs-toggle="modal"><i class="material-icons">
                                                    &#xE147;</i> <span>Tambah</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="biaya-transfer">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p class="input form-control">Biaya Transfer: </p>
                                        </div>
                                        <div class="col-md-7">
                                            <input name="jumlah_uang" type="text" class="input form-control fw-bolder bg-black bg-opacity-50 text-white border-0" value="-" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!-- <label class="" for="">Keterangan</label> -->
                                <textarea name="keterangan" cols="30" rows="3" class="input form-control my-1" placeholder="Keterangan (opsional)"></textarea>
                                <div class="p-1 mt-2">
                                    <button id="login" class="btn btn-info fw-bold py-1 px-3" type="submit">
                                        Tambah
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div id="tambah-rekening" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="proses/tambah_daftar_rekening.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Daftar Rekening</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group my-3">
                            <label>Nomor Rekening</label>
                            <input name="nomor_rekening" type="number" class="input form-control" required>
                        </div>
                        <div class="form-group my-3">
                            <label>Nama</label>
                            <input name="nama" type="text" class="input form-control" required>
                        </div>
                        <div class="form-group my-3">
                            <label>Bank</label>
                            <input name="bank" type="text" class="input form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <script>
        $('#rekening').on("change", function() {
            var dataid = $("#rekening option:selected").attr('data-bank');
            if (dataid == "Makmur" || dataid == "makmur" || dataid == "MAKMUR") {
                var cek = "0";
            } else var cek = "5000";
            $("input:text").val(cek);
        });

        $(document).ready(function() {
            var qty_uang = 0;
            $('.tambah-uang').click(function(e) {
                e.preventDefault();
                var quantity = parseInt($('#uang').val());
                if ($('#uang').val() == "") {
                    $('#uang').val(100000);
                } else $('#uang').val(quantity + 100000);
            });

            $('.kurang-uang').click(function(e) {
                e.preventDefault();
                var quantity = parseInt($('#uang').val());
                if (quantity >= 100000) {
                    $('#uang').val(quantity - 100000);
                }
            });
        });
    </script>
</body>

</html>