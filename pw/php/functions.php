<?php

function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "prakweb_a_203040057_pw");

  return $conn;
}
// function untuk melakukan query dan memasukkannya ke dalam ARRAY
function query($sqL)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sqL);
  $buku = [];
  while ($bk = mysqli_fetch_assoc($result)) {
    $buku[] = $bk;
  }
  return  $buku;
}
