<?php   include "session.php";
        include "header.php"; 
        $id_user   = $_SESSION['id_user']; 
?>
<title>Pinjaman</title>

<body>
    <?php $pinjaman = "active bg-info fw-bold bg-opacity-50";
    include "navbar.php"; ?>
    <main id="main" class="mt-4 mb-5">
        <section class="container">
            <div class="row">
                <div class="col-md-8 pe-4">
                    <div id="read" class="container">
                        <div class="table-wrapper">
                            <div class="table-title rounded-3">
                                <h2>Riwayat <b>Pinjaman</b></h2>
                            </div>
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Pinjaman</th>
                                        <th>Jumlah Uang</th>
                                        <th>Tenor<br>(Tahun)</th>
                                        <th>Suku Bunga</th>
                                        <th class="w-25">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include('koneksi.php');
                                $sql    = "SELECT * FROM pinjaman WHERE id_user = $id_user";
                                $query    = mysqli_query($connect, $sql);
                                $i = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $data['jenis_pinjaman']; ?></td>
                                            <td><?= $data['jumlah_uang']; ?></td>
                                            <td><?= $data['tenor']; ?></td>
                                            <td><?= $data['suku_bunga']; ?></td>
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
                            <h1 class="h3 fw-bolder">Ajukan Pinjaman</h1>
                            <p class="">Isi data untuk pinjaman baru</p>
                            <hr>
                        </div>
                        <div class="form">
                            <form method="POST" action="proses/tambah_pinjaman.php">
                                <select name="jenis_pinjaman" class="custom-select input form-control my-3" id="rekening" required>
                                    <option value="" hidden selected>Pilih Jenis Pinjaman</option>
                                    <option data-uang-min="5000000" data-uang-max="100000000" data-tenor-min="1" data-tenor-max="5" value="KUR">
                                        KUR (5 - 100 Juta, 1 - 5 Tahun, Suku Bunga 6%)
                                    </option>
                                    <option data-uang-min="10000000" data-uang-max="999000000" data-tenor-min="1" data-tenor-max="20" value="KPR">
                                        KPR (10 - 999 Juta, 1 - 20 Tahun, Suku Bunga 5%)
                                    </option>
                                    <option data-uang-min="1000000" data-uang-max="250000000" data-tenor-min="1" data-tenor-max="5" value="KTA">
                                        KTA (1 - 250 Juta, 1 - 5 Tahun, Suku Bunga 8%)
                                    </option>
                                </select>
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
                                <div id="lama-pinjaman" class="input-group my-3">
                                    <span class="input-group-btn mx-2">
                                        <button type="button" class="kurang-bulan btn btn-outline-dark" data-type="minus" data-field="">
                                            <span><i class="fa-solid fa-minus"></i></span>
                                        </button>
                                    </span>
                                    <input type="number" id="tenor" name="tenor" class="input form-control" placeholder="Lama Pinjaman *" min="1" required /><span class="pt-2 ps-2"> Tahun</span>
                                    <span class="input-group-btn mx-2">
                                        <button type="button" class="tambah-tenor btn btn-outline-dark" data-type="plus" data-field="">
                                            <span><i class="fa-solid fa-plus"></i></span>
                                        </button>
                                    </span>
                                </div>
                                <textarea name="keterangan" cols="30" rows="3" class="input form-control my-1" placeholder="Keterangan (opsional)"></textarea>
                                <div class="mt-4">
                                    <input type="checkbox" id="setuju" class="input form-check-input" required /><span class="ps-1"><label for="setuju">Saya menyetujui syarat dan ketentuan</label></span>
                                </div>
                                <div class="p-1 mt-2">
                                    <button id="login" type="submit" class="btn btn-info fw-bold py-1 px-3">
                                        Ajukan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "footer.php"; ?>
    <script>
        $(document).ready(function() {
            var qty_uang = 0;
            $('.tambah-uang').click(function(e) {
                e.preventDefault();
                var quantity = parseInt($('#uang').val());
                if ($('#uang').val() == "") {
                    $('#uang').val(1000000);
                } else $('#uang').val(quantity + 1000000);
            });

            $('.kurang-uang').click(function(e) {
                e.preventDefault();
                var quantity = parseInt($('#uang').val());
                if (quantity >= 1000000) {
                    $('#uang').val(quantity - 1000000);
                }
            });

            var bulan = 0;
            $('.tambah-tenor').click(function(e) {
                e.preventDefault();
                var quantity = parseInt($('#tenor').val());
                if ($('#tenor').val() == "") {
                    $('#tenor').val(1);
                } else $('#tenor').val(quantity + 1);
            });

            $('.kurang-bulan').click(function(e) {
                e.preventDefault();
                var quantity = parseInt($('#tenor').val());
                if (quantity >= 1) {
                    $('#tenor').val(quantity - 1);
                }
            });

        });

        $('select').change(function() {
            $('#uang').attr('min', $(this).find(":selected").data('uang-min'));
            $('#uang').attr('max', $(this).find(":selected").data('uang-max'));
            $('#tenor').attr('min', $(this).find(":selected").data('tenor-min'));
            $('#tenor').attr('max', $(this).find(":selected").data('tenor-max'));
        });
    </script>

</body>

</html>