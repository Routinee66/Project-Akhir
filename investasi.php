<?php   include "session.php";
        include "header.php"; 
        $id_user   = $_SESSION['id_user']; 
?>
<title>Investasi</title>

<body>
    <?php $investasi = "active bg-info fw-bold bg-opacity-50";
    include "navbar.php"; ?>
    <main id="main" class="mt-4 mb-5">
        <section class="container">
            <div class="row">
                <div class="col-md-8 pe-4">
                    <div id="read" class="container">
                        <div class="table-wrapper">
                            <div class="table-title rounded-3">
                                <h2>Riwayat <b>Investasi</b></h2>
                            </div>
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Jenis Investasi</th>
                                        <th>Jumlah Investasi</th>
                                        <th>Jangka Waktu</th>
                                        <th class="w-25">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include('koneksi.php');

                                $sql    = "SELECT * FROM investasi WHERE id_user = $id_user";
                                $query    = mysqli_query($connect, $sql);
                                $i = 1;

                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $data['jenis_investasi']; ?></td>
                                            <td><?= $data['jumlah_uang']; ?></td>
                                            <td><?= $data['jangka_waktu']; ?></td>
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
                            <h1 class="h3 fw-bolder">Buat Investasi</h1>
                            <p class="">Isi data untuk investasi baru</p>
                            <hr>
                        </div>
                        <div class="form">
                            <form action="proses/tambah_investasi.php" method="post">
                                <select name="jenis_investasi" class="custom-select input form-control my-3" id="rekening" required>
                                    <option value="" hidden selected>Pilih Jenis Investasi</option>
                                    <option data-uang-min="100000" value="Reksadana">Reksadana (Min: 100.000)
                                    </option>
                                    <option data-uang-min="100000" value="ORI & Sukuk Ritel">ORI & Sukuk Ritel (Min: 100.000)
                                    </option>
                                </select>
                                <div id="jumlah-investasi" class="input-group mb-3">
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
                                <div id="lama-investasi" class="input-group my-3">
                                    <select name="lama_investasi" class="custom-select input form-control" required>
                                        <option value="" hidden selected>Pilih Lama Investasi</option>
                                        <option value="1"> 1 Tahun </option>
                                        <option value="2"> 2 Tahun </option>
                                        <option value="3"> 3 Tahun </option>
                                    </select>
                                </div>
                                <textarea name="keterangan" cols="30" rows="3" class="input form-control my-1" placeholder="Keterangan (opsional)"></textarea>
                                <div class="mt-4">
                                    <input type="checkbox" id="setuju" class="input form-check-input" required /><span class="ps-1"><label for="setuju">Saya menyetujui syarat dan ketentuan</label></span>
                                </div>
                                <div class="p-1 mt-2">
                                    <button id="login" class="btn btn-info fw-bold py-1 px-3">
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

    $('select').change(function() {
        $('#uang').attr('min', $(this).find(":selected").data('uang-min'));
    });
    </script>
</body>

</html>