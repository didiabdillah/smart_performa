<?php
defined('BASEPATH') or exit('No direct script access allowed');
if (!function_exists('tanggal_indo')) {
    function tanggal_indo($tanggal, $cetak_hari = false)
    {
        $hari = array(
            1 => 'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        );

        $bulan = array(
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $split_jam =  explode(' ', $tanggal);
        $split = explode('-', $split_jam[0]);
        $tgl_indo = $split[2] . ' ' . $bulan[(int) $split[1]] . ' ' . $split[0];

        if ($cetak_hari) {
            $num = date('N', strtotime($tanggal));
            return $hari[$num] . ', ' . $tgl_indo;
        }
        return $tgl_indo;
    }
    function bulan_indo($tanggal)
    {
        $bulan = array(
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $split_jam =  explode(' ', $tanggal);
        $split = explode('-', $split_jam[0]);
        $tgl_indo = $bulan[(int) $split[1]];

        return $tgl_indo;
    }
}
