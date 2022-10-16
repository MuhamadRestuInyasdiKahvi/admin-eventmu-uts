<?php

include 'layout/header.php';

$id = (int)$_GET['id'];

$event = select("SELECT * FROM tb_event WHERE id = $id")[0];

if (isset($_POST['update-event'])) {
    if (update_event($_POST) > 0) {
        echo "<script> 
                alert('Data Event Berhasil Diupdate');
                document.location.href = 'event.php'
            </script>";
    } else {
        echo "<script> 
                alert('Data Event Gagal Diupdate');
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
                    <h6>Update Data Event</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="container">
                        <form action="" method="post">
                            <input class="form-control" type="hidden" value="<?= $event['id'] ?>" id="id" name="id" required>
                            <div class="form-group">
                                <label for="judul" class="form-control-label">Judul</label>
                                <input class="form-control" type="text" value="<?= $event['judul'] ?>" id="judul" name="judul" required>
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Penyelenggara</label>
                                <input class="form-control" type="text" value="<?= $event['penyelenggara'] ?>" id="penyelenggara" name="penyelenggara" required>
                            </div>
                            <div class="form-group">
                                <label for="example-date-input" class="form-control-label">Tanggal</label>
                                <input class="form-control" type="date" value="<?= $event['tanggal'] ?>" id="example-date-input" name="tanggal" required>
                            </div>
                            <div class="form-group">
                                <label for="example-date-input" class="form-control-label">Status</label>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="status" id="customRadio1" value="Online" <?php if ($event['status'] == 'Online') echo 'checked' ?>>
                                    <label class="custom-control-label" for="customRadio1">Online</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="customRadio2" value="Offline" <?php if ($event['status'] == 'Offline') echo 'checked' ?>>
                                    <label class="custom-control-label" for="customRadio2">Offline</label>
                                </div>
                            </div>
                            <button type="submit" class="btn bg-gradient-primary btn-lg w-100" name="update-event">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>