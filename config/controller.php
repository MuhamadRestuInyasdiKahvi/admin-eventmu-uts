<?php

function select($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] =  $row;
    }

    return $rows;
}

function create_event($post)
{
    global $conn;

    $judul = $post['judul'];
    $penyelenggara = $post['penyelenggara'];
    $tanggal = $post['tanggal'];
    $status = $post['status'];

    $query = "INSERT INTO tb_event VALUES(null, '$judul', '$penyelenggara', '$tanggal', '$status')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function update_event($post)
{
    global $conn;

    $id = $post['id'];
    $judul = $post['judul'];
    $penyelenggara = $post['penyelenggara'];
    $tanggal = $post['tanggal'];
    $status = $post['status'];

    $query = "UPDATE tb_event SET judul = '$judul', penyelenggara = '$penyelenggara', tanggal= '$tanggal', status = '$status' WHERE id = $id ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete_event($id)
{
    global $conn;

    $query = "DELETE FROM tb_event WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
