<?php

include 'config/app.php';

$id = (int)$_GET['id'];



if (delete_event($id) > 0) {
    echo "<script> 
                alert('Data Event Berhasil Dihapus');
                document.location.href = 'event.php'
            </script>";
} else {
    echo "<script> 
                alert('Data Event Gagal Dihapus');
                document.location.href = 'event.php'
            </script>";
}
