<?php   include "session_out.php";
        if($_GET) $pesan = $_GET['message'];
        include "header.php"; ?>
<title>Login</title>

<body>
    <main id="login">
        <div class="container-fluid">
            <div class="row vh-100">
                <div id="halaman_kiri" class="col-md-5 bg-info d-flex justify-content-center align-items-center bg-opacity-50">
                    <img id="icon" src="assets/login.png" alt="">
                </div>
                <div id="halaman_kanan" class="col-md-7 bg-white d-flex justify-content-center align-items-center flex-column">
                    <div id="sudah" class="position-absolute top-0 my-5 right">
                        <p class="d-inline-block">Belum punya akun?</p>
                        <a href="registrasi.php" class="btn btn btn-outline-info">Daftar</a>
                    </div>
                    <div id="form-login" class="container">
                        <div class="mx-auto p-3 col-md-6 text-center">
                            <div class="login-header my-2 text-start">
                                <h1 class="text-info mb-3 display-8">Login</h1>
                            </div>
                            <div class="form">
                                <form method="POST" action="proses/login_proses.php">
                                    <div class="d-flex">
                                        <div id="garis" class="bg-info"></div>
                                        <input type="email" name="email" class="input form-control p-2 my-3" placeholder="Masukkan Email" required>
                                    </div>
                                    <div class="d-flex">
                                        <div id="garis" class="bg-info"></div>
                                        <input type="password" name="password" class="input form-control p-2 my-3" placeholder="Masukkan Password" required>
                                    </div>
                                    <div class="click d-flex mt-3 mb-5 justify-content-between">
                                        <div class="remember">
                                            <input id="ingat" type="checkbox" class="form-check-input"><label class="d-inline text-secondary" for="ingat">&nbsp;Ingat Saya</label>
                                        </div>
                                        <div class="register">
                                            <a href="#">Lupa Password</a>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button id="login" class="btn btn-info text-white fw-bold mb-4 py-2 shadow-lg" type="submit">LOGIN</button>
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