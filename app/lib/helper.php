<?php

function host(){
	return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];
}
function fullsite(){
	return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
function slug($str, $replace=array(), $delimiter='-') {
    if ( !empty($replace) ) {
        $str = str_replace((array)$replace, ' ', $str);
	}
	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	return $clean;
}

function status($s){
    if($s==1){
        return '<span class="badge bg-warning">Pengajuan</span>';
    }elseif($s==2){
        return '<span class="badge bg-success">Diterima</span>';
    }elseif($s==3){
        return '<span class="badge bg-danger">Ditolak</span>';
    }
}

function toRp($angka){
	$hasil_rupiah = "Rp" . number_format($angka,2,',','.');
	return $hasil_rupiah;
}

function dateID($date){
    return date_format(date_create($date),"d/m/Y");
}