<?php


function timer()
{

    // mengatur time zone untuk WIB.
    date_default_timezone_set("Asia/Jakarta");
    $date1 = mktime() +  time() + (60 * 60 * 2);
    $date2 = mktime(date('H'), date('i'), date('s'), date('n'), date('j'), date('Y'));
    // mencari mktime untuk tanggal 1 Januari 2011 00:00:00 WIB
    $selisih1 =  mktime(0, 0, 0, 1, 1, 2024);
    // mencari mktime untuk current time
    $selisih2 = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));

    // mencari selisih detik antara kedua waktu

    // proses mencari jumlah hari
    $a = floor($delta / 86400);

    // proses mencari jumlah jam
    $sisa = $delta % 86400;
    $b  = floor($sisa / 3600);
    // cekvar($b);

    // proses mencari jumlah menit
    $sisa = $sisa % 3600;
    $c = floor($sisa / 60);

    // proses mencari jumlah detik
    $sisa = $sisa % 60;
    $d = floor($sisa / 1);

    //  "Waktu saat ini: " . date("d-m-Y H:i:s") . "<br>";
    $salam =  "Masih: " . $a . " hari " . $b . " jam " . $c . " menit " . $d . " detik lagi, menuju tahun baru 1 Januari 2023";
    return $salam;
}
