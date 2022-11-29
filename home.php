<?php   include "session.php";
        include "header.php"; ?>
<title>Bank Makmur</title>

<body>
    <?php $home = "active bg-info fw-bold bg-opacity-50";
    include "navbar.php"; ?>
    <main id="main" class="h-100 d-flex align-items-center justify-content-center mt-4 mb-5">
        <section class="menu">
            <div class="container">
                <div class="row">
                    <div class="col d-flex">
                        <div id="dream" class="card d-flex">
                            <div id="main-feature" class="card-body d-flex align-items-center bg-info bg-opacity-50">
                                <div class="d-flex flex-column text-center tes">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div id="img" style="background-image: url(assets/plan.png)"></div>
                                    </div>
                                    <div class="mt-5">
                                        <h5 class="card-title white">Dream Saver</h5>
                                        <p class="card-text px-3">
                                            Mewujudkan setiap mimpimu dengan fitur autodebet</p>
                                    </div>
                                    <a href="dream.php" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column">
                            <div id="rekening"class="card">
                                <div class="card-body">
                                    <div class="row d-flex align-items-center">
                                        <div class="col p-4">
                                            <div id="img" style="background-image: url(assets/acount.png)"></div>
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title">Cek Rekening</h5>
                                            <p class="card-text">Some quick example text to build on the</p>
                                        </div>
                                        <a href="rekening.php" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                            <div id="pinjaman" class="card">
                                <div class="card-body">
                                    <div class="row  d-flex align-items-center">
                                        <div class="col p-4">
                                            <div id="img" style="background-image: url(assets/loan.png)"></div>
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title">Pinjaman</h5>
                                            <p class="card-text">Some quick example text to build on the</p>
                                        </div>
                                        <a href="pinjaman.php" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col me-3">
                        <div class="d-flex flex-column">
                            <div id="transaksi" class="card">
                                <div class="card-body">
                                    <div class="row d-flex align-items-center">
                                        <div class="col p-4">
                                            <div id="img" style="background-image: url(assets/transfer.png)"></div>
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title">Transaksi</h5>
                                            <p class="card-text">Some quick example text to build on the</p>
                                        </div>
                                        <a href="transaksi.php" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                            <div id="investasi" class="card">
                                <div class="card-body">
                                    <div class="row d-flex align-items-center">
                                        <div class="col p-4">
                                            <div id="img" style="background-image: url(assets/register.png)"></div>
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title">Investasi</h5>
                                            <p class="card-text">Some quick example text to build on the</p>
                                        </div>
                                        <a href="investasi.php" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>