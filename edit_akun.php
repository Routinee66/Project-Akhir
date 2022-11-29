<?php   include "session.php";
        include "header.php"; ?>
<title>Edit Akun</title>

<body>
    <main id="akun-rekening">
        <div class="container-fluid">
            <div class="row">
                <div id="kiri" class="col-md-1 bg-info bg-opacity-50">
                </div>
                <div id="kanan" class="col-md-10 mx-auto">
                    <div id="head" class="p-2 text-center bg-opacity-50">
                        <p class="pt-3 h3 fw-bolder text-uppercase">Edit Akun</p>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="container" style="font-size: larger">
                                <?php
                                include('koneksi.php');

                                $rekening = $_SESSION['rekening'];
                                $sql    = "SELECT * FROM rekening WHERE nomor_rekening = '$rekening'";
                                $query    = mysqli_query($connect, $sql);

                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="form">
                                        <form method="POST" action="proses/edit_akun_proses.php">
                                            <input type="hidden" name="id_rekening" value="<?= $rekening; ?>">
                                            <div id="nama" class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div id="garis" class="bg-info"></div>
                                                        <input name="nama_depan" type="text" class="input form-control p-2 my-2" placeholder="Nama Depan *" value="<?= $data['nama_depan']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div id="garis" class="bg-info"></div>
                                                        <input name="nama_blkg" type="text" class="input form-control p-2 my-2" placeholder="Nama Belakang *" value="<?= $data['nama_blkg']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="lahir" class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div id="garis" class="bg-info"></div>
                                                        <input name="tempat_L" type="text" class="input form-control p-2 my-2" placeholder="Tempat Lahir *" value="<?= $data['tempat_L']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-4 d-flex align-items-center justify-cotent-end">
                                                            <label id="label_tanggal" for="tanggal-lahir" class="fs-6 ms-3">Tanggal Lahir * </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="d-flex">
                                                                <div id="garis" class="bg-info"></div>
                                                                <input name="tanggal_L" type="date" id="tanggal-lahir" class="input form-control p-2 my-2" placeholder="Tanggal Lahir" value="<?= $data['tanggal_L']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="identitas" class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div id="garis" class="bg-info"></div>
                                                        <select name="jenis_id" class="form-select input p-2 my-2" aria-label="Default select example">
                                                            <option value="<?= $data['jenis_id']; ?>" disabled selected hidden><?= $data['jenis_id']; ?></option>
                                                            <option value="KTP">KTP</option>
                                                            <option value="SIM">SIM</option>
                                                            <option value="Akta Kelahiran">Akta Kelahiran</option>
                                                            <option value="Paspor">Paspor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div id="garis" class="bg-info"></div>
                                                        <input name="nomor_id" type="text" class="input form-control p-2 my-2" placeholder="Nomor Identitas *" value="<?= $data['nomor_id']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="alamat" class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div id="garis" class="bg-info"></div>
                                                        <textarea name="alamat" id="" cols="30" rows="2" class="input form-control p-2 my-2" placeholder="Alamat *"><?= $data['alamat']; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div id="garis" class="bg-info"></div>
                                                        <input name="kode_pos" type="text" class="input form-control p-2 my-2" placeholder="Kode Pos *" value="<?= $data['kode_pos']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="penghasilan" class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div id="garis" class="bg-info"></div>
                                                        <select name="penghasilan" class="form-select input p-2 my-2" aria-label="Default select example">
                                                            <option value="<?= $data['penghasilan']; ?>" disabled selected hidden><?= $data['penghasilan']; ?></option>
                                                            <option value="< 2 Juta">
                                                                < 2 Juta</option>
                                                            <option value="2 - 5 Juta">2 - 5 Juta</option>
                                                            <option value="5 - 10 Juta">5 - 10 Juta</option>
                                                            <option value="> 10 Juta">> 10 Juta</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div id="garis" class="bg-info"></div>
                                                        <select name="pekerjaan" class="form-select input p-2 my-2" aria-label="Default select example">
                                                            <option value="<?= $data['pekerjaan']; ?>" disabled selected hidden><?= $data['pekerjaan']; ?></option>
                                                            <option value="Karyawan">Karyawan</option>
                                                            <option value="Wirausaha">Wirausaha</option>
                                                            <option value="PNS / TNI / Polri">PNS / TNI / Polri</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="telepon" class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div id="garis" class="bg-info"></div>
                                                        <input name="no_telp1" type="tel" class="input form-control p-2 my-2" placeholder="No. Telepon 1 *" value="<?= $data['no_telp1']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div id="garis" class="bg-info"></div>
                                                        <input name="no_telp2" type="tel" class="input form-control p-2 my-2" placeholder="No. Telepon 2" value="<?= $data['no_telp2']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 mt-2" style="margin-left: 40%">
                                                <button id="login" class="btn btn-info fw-bold mb-4 py-3 px-5" type="submit">UPDATE</button>
                                            </div>
                                        </form>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>