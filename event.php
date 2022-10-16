<?php
session_start();
include 'layout/header.php';
$data_event = select('SELECT * FROM tb_event');

if (!isset($_SESSION['login'])) {
    echo " <script>
        document.location.href = 'login.php'
    </script>";
    exit;
}


?>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">

                <h6 class="font-weight-bolder text-white mb-0">Event</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <!-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div> -->
                <ul class="navbar-nav  justify-content-end">

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data Event</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <a href="tambah-event.php" class="btn bg-gradient-primary my-2 mx-4">Tambah</a>
                        <a href="import.php" class="btn bg-gradient-primary my-2 mx-4">Import Data</a>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Penyelenggara</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_event as $data) : ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-3">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">
                                                            <?= $data['judul']; ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0"><?= $data['penyelenggara']; ?></p>
                                            </td>
                                            <td class=" ">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <?= $data['tanggal']; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="">
                                                    <?= $data['status']; ?>
                                                </span>
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                <a href="ubah-event.php?id=<?= $data['id'] ?>" class="btn bg-gradient-warning">Edit</a>
                                                <a href="hapus-event.php?id=<?= $data['id'] ?>" class="btn bg-gradient-danger" onclick="return confirm('Apakah yakin data event akan dihapus?')">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>