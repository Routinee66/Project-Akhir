<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand p-1 fw-bolder" href="home.php">
            <i class="fa-solid fa-building-columns"></i>
            &nbsp;Bank Makmur
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link p-3 <?= $home; ?>" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3 <?= $rekening; ?>" href="rekening.php">Cek Rekening</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3 <?= $transaksi; ?>" href="transaksi.php">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3 <?= $pinjaman; ?>" href="pinjaman.php">Pinjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3 <?= $investasi; ?>" href="investasi.php">Investasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3 <?= $dream; ?>" href="dream.php">Dream Saver</a>
                </li>
            </ul>
            <div class="btn-group me-4">
                <button type="button" class="btn text-white btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php include "koneksi.php";
                        $id_user = $_SESSION['id_user'];
                        $sql = "SELECT * FROM user WHERE id_user = $id_user";
                        $querry = mysqli_query($connect, $sql);
                        while($data = mysqli_fetch_array($querry)){
                            echo $data['email'];
                        } ?> 
                        <i class="fa-solid fa-circle-user" style="scale: 1.3"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end bg-info">
                    <?php
                    include('koneksi.php');

                    $sql    = "SELECT * FROM rekening";
                    $query    = mysqli_query($connect, $sql);

                    $data = mysqli_fetch_array($query)
                    ?>
                    <li><button onclick="window.location.href='edit_akun.php'" class="dropdown-item text-white" type="button"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit Akun</button></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><button onclick="window.location.href='logout.php'" class="dropdown-item text-white" type="button"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</button></li>
                </ul>
            </div>
        </div>
    </div>
</nav>