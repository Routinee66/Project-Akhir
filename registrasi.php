<?php   include "session_out.php";
        if($_GET) $pesan = $_GET['message'];
        include "header.php"; ?>
<title>Registrasi</title>

<body>
    <main id="login">
        <div class="container-fluid">
            <div class="row vh-100">
                <div id="halaman_kiri" class="col-md-5 bg-info d-flex justify-content-center align-items-center bg-opacity-50">
                    <img id="icon" src="assets/register.png" alt="">
                </div>
                <div id="halaman_kanan" class="col-md-7 bg-white d-flex justify-content-center align-items-center flex-column">
                    <div id="sudah" class="position-absolute top-0 my-5 right">
                        <p class="d-inline-block">Sudah punya akun?</p>
                        <a href="login.php" class="btn btn btn-outline-info">Login</a>
                    </div>
                    <div id="form-login" class="container">
                        <div class="mx-auto p-3 col-md-8 text-center">
                            <div class="login-header mt-5 mb-3 text-start">
                                <h2 class="text-info mb-3">Registrasi Akun</h2>
                                <p class="text-secondary">Buat akun sekarang juga, untuk menikmati beragam kemudahan di <span class="text-info fw-bolder">Bank Makmur</span></p>
                            </div>
                            <div class="form">
                                <form method="POST" action="proses/registrasi_proses.php">
                                    <div class="d-flex">
                                        <div id="garis" class="bg-info"></div>
                                        <input type="email" name="email" class="input form-control p-2 my-3" placeholder="Masukkan Email" required>
                                    </div>
                                    <div class="d-flex">
                                        <div id="garis" class="bg-info"></div>
                                        <input type="password" name="password" class="input form-control p-2 my-3" placeholder="Masukkan Password" required>
                                    </div>
                                    <div class="d-grid gap-2 my-4">
                                        <button id="login" class="btn btn-info text-white fw-bold mb-4 py-2 shadow-lg" type="submit">DAFTAR</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>