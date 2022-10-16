<?php

include 'layout/header.php';

if (isset($_POST['tambah-event'])) {
    if (create_event($_POST) > 0) {
        echo "<script> 
                alert('Data Event Berhasil Ditambahkan');
                document.location.href = 'event.php'
            </script>";
    } else {
        echo "<script> 
                alert('Data Event Gagal Ditambahkan');
                document.location.href = 'event.php'
            </script>";
    }
}

?>

<main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tambah Data Event</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="container">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="judul" class="form-control-label">Judul</label>
                                <input class="form-control" type="text" value="" id="judul" name="judul" required>
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Penyelenggara</label>
                                <input class="form-control" type="text" value="" id="penyelenggara" name="penyelenggara" required>
                            </div>
                            <div class="form-group">
                                <label for="example-date-input" class="form-control-label">Tanggal</label>
                                <input class="form-control" type="date" value="" id="example-date-input" name="tanggal" required>
                            </div>
                            <div class="form-group">
                                <label for="example-date-input" class="form-control-label">Status</label>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="status" id="customRadio1" value="Online" checked>
                                    <label class="custom-control-label" for="customRadio1">Online</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="customRadio2" value="Offline">
                                    <label class="custom-control-label" for="customRadio2">Offline</label>
                                </div>
                            </div>
                            <button type="submit" class="btn bg-gradient-primary btn-lg w-100" name="tambah-event">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>