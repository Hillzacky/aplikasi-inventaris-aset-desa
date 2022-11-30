<?php

switch($url[0]){
  case 'aset-tanah':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-aset-tanah.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-aset-tanah.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='filter'){
      $route = VIEW.'/filter-aset-tanah.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='print'){
      $route = VIEW.'/print-aset-tanah.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='status'){
      $route = VIEW.'/status-aset-tanah.php';
    } else {
      $route = VIEW.'/aset-tanah.php';
    }
    break;
  case 'aset-kendaraan':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-aset-kendaraan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-aset-kendaraan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='filter'){
      $route = VIEW.'/filter-aset-kendaraan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='print'){
      $route = VIEW.'/print-aset-kendaraan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='status'){
      $route = VIEW.'/status-aset-kendaraan.php';
    } else {
      $route = VIEW.'/aset-kendaraan.php';
    }
    break;
  case 'aset-peralatan':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-aset-peralatan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-aset-peralatan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='filter'){
      $route = VIEW.'/filter-aset-peralatan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='print'){
      $route = VIEW.'/print-aset-peralatan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='status'){
      $route = VIEW.'/status-aset-peralatan.php';
    } else {
      $route = VIEW.'/aset-peralatan.php';
    }
    break;
  case 'aset-bangunan':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-aset-bangunan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-aset-bangunan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='filter'){
      $route = VIEW.'/filter-aset-bangunan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='print'){
      $route = VIEW.'/print-aset-bangunan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='status'){
      $route = VIEW.'/status-aset-bangunan.php';
    } else {
      $route = VIEW.'/aset-bangunan.php';
    }
    break;
  case 'aset-irigasi':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-aset-irigasi.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-aset-irigasi.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='filter'){
      $route = VIEW.'/filter-aset-irigasi.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='print'){
      $route = VIEW.'/print-aset-irigasi.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='status'){
      $route = VIEW.'/status-aset-irigasi.php';
    } else {
      $route = VIEW.'/aset-irigasi.php';
    }
    break;
  case 'aset-tetap':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-aset-tetap.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-aset-tetap.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='filter'){
      $route = VIEW.'/filter-aset-tetap.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='print'){
      $route = VIEW.'/print-aset-tetap.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='status'){
      $route = VIEW.'/status-aset-tetap.php';
    } else {
      $route = VIEW.'/aset-tetap.php';
    }
    break;
  case 'aset-tidak-diketahui':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-aset-unknown.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-aset-unknown.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='filter'){
      $route = VIEW.'/filter-aset-unknown.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='print'){
      $route = VIEW.'/print-aset-unknown.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='status'){
      $route = VIEW.'/status-aset-unknown.php';
    } else {
      $route = VIEW.'/aset-unknown.php';
    }
    break;
  case 'tim-aset-tanah':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-tim-aset-tanah.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-tim-aset-tanah.php';
    } else {
      $route = VIEW.'/tim-aset-tanah.php';
    }
    break;
  case 'tim-aset-kendaraan':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-tim-aset-kendaraan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-tim-aset-kendaraan.php';
    } else {
      $route = VIEW.'/tim-aset-kendaraan.php';
    }
    break;
  case 'tim-aset-peralatan':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-tim-aset-peralatan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-tim-aset-peralatan.php';
    } else {
      $route = VIEW.'/tim-aset-peralatan.php';
    }
    break;
  case 'tim-aset-bangunan':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-tim-aset-bangunan.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-tim-aset-bangunan.php';
    } else {
      $route = VIEW.'/tim-aset-bangunan.php';
    }
    break;
  case 'tim-aset-irigasi':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-tim-aset-irigasi.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-tim-aset-irigasi.php';
    } else {
      $route = VIEW.'/tim-aset-irigasi.php';
    }
    break;
  case 'tim-aset-tetap':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-tim-aset-tetap.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-tim-aset-tetap.php';
    } else {
      $route = VIEW.'/tim-aset-tetap.php';
    }
    break;
  case 'tim-aset-tidak-diketahui':
    if (array_key_exists(1,$url) && $url[1]=='tambah'){
      $route = VIEW.'/tambah-tim-aset-unknown.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/edit-tim-aset-unknown.php';
    } else {
      $route = VIEW.'/tim-aset-unknown.php';
    }
    break;
  case 'users':
    if (array_key_exists(1,$url) && $url[1]=='add'){
      $route = VIEW.'/register.php';
    } elseif (array_key_exists(1,$url) && $url[1]=='edit'){
      $route = VIEW.'/users-edit.php';
    } else {
      $route = VIEW.'/users.php';
    }
    break;
  case 'help':
    $route = VIEW.'/petunjuk.php';
    break;
  case 'dashboard':
    $route = VIEW.'/dashboard.php';
    break;
  case 'pengaturan':
    $route = VIEW.'/settings.php';
    break;
  case 'pengguna':
    $route = VIEW.'/account.php';
    break;
  case 'daftar':
    $route = VIEW.'/register.php';
    break;
  case 'masuk':
    $route = VIEW.'/login.php';
    break;
  case 'keluar':
    session_destroy();
    header('Location: /');
    break;
  case 'proses':
    $route = VIEW.'/process.php';
    break;
  default:
    $route = VIEW.'/index.php';
    break;
}