<?php
if (array_key_exists(1,$url) && $url[1]=='cek-kode'):
    $p = explode('-',$_POST['type']);
    $kode = $_POST['kode'];$select = 'kode_'.$p[1];$from = implode('_',$p);
	$ac = $db->query("SELECT $select FROM $from WHERE $select='$kode'");
	$output = ($ac->num_rows > 0) ? json_encode(['exist'=>true]) : json_encode(['exist'=>false]);
	$ac->free_result();
	$db->close();
	echo $output;
elseif (array_key_exists(1,$url) && $url[1]=='auth'):
	if ($url[2]=='register'):
		$name = $_POST['signup-name'];
		$user = $_POST['signup-username'];
		$pass = md5($_POST['signup-password']);
		$reg = $db->query("INSERT INTO pengguna (nama_admin, namapengguna, katasandi) VALUES ('$name','$user','$pass')");
		$reg ? header('Location: '.host().'/?msg=success') : header('Location: '.host().'/?msg=failed');
	elseif ($url[2]=='login'):
		$user = $_POST['signin-username'];
		$pass = md5($_POST['signin-password']);
		$cek = $db->query("SELECT * FROM pengguna WHERE katasandi='$pass' AND namapengguna='$user'");
		if ($cek->num_rows > 0){
		    $row = $cek->fetch_assoc();
		    $_SESSION['id_admin'] = $row['id_admin'];
		    $_SESSION['nama'] = $row['nama_admin'];
		    $_SESSION['login'] = true;
    		$cek->free_result();
    		$db->close();
		    header('Location: /dashboard?msg=success');
		}else{
		    header('Location: /masuk?msg=failed');
		}
	elseif ($url[2]=='users'):
		$usr = $db->query("SELECT id_admin, nama_admin, namapengguna, katasandi FROM pengguna");
		$output = ($usr!=false) ? json_encode($usr->fetch_assoc(), false) : json_encode(['msg'=>404]);
		$usr->free_result();
		$db->close();
		echo $output;
	elseif ($url[2]=='update'):
		$idadm = $_POST['id_admin'];
		$name = $_POST['nama_admin'];
		$user = $_POST['namapengguna'];
		$pass = md5($_POST['katasandi']);
		$edt = $db->query("UPDATE pengguna SET nama_admin='$name',namapengguna='$user',katasandi='$pass' WHERE id_admin='$idadm'");
		$del ? header('Location: '.host().'/users?msg=success') : header('Location: '.host().'/users?msg=failed');
	elseif ($url[2]=='delete'):
		$id = $_GET['id'];
		$del = $db->query("DELETE FROM pengguna WHERE id_admin='$id'");
		$del ? header('Location: '.host().'/users?msg=success') : header('Location: '.host().'/users?msg=failed');
	elseif ($url[2]=='user'):
		$usr = $db->query("SELECT id_admin, nama_admin, namapengguna FROM pengguna WHERE id_admin={$_GET['id']}");
		$output = $usr ? json_encode($usr->fetch_assoc()) : json_encode(['msg'=>404]);
		echo $output;
	endif;
	
//ASET TANAH
elseif (array_key_exists(1,$url) && $url[1]=='aset-tanah'):
	if ($url[2]=='tambah'):
		$kode = $_POST['kode_tanah'];
		$jenis = $_POST['jenis_tanah'];
		$nup = $_POST['nup'];
		$luas = $_POST['luas'];
		$tahun = $_POST['tahun_perolehan'];
		$bukti = $_POST['bukti_kepemilikan'];
		$nilai = $_POST['nilai_perolehan'];
		$ket = $_POST['keterangan'];
		$adm = $_SESSION['id_admin'];
		$status = $_POST['status'];
		$act = $db->query("INSERT INTO aset_tanah (kode_tanah,jenis_tanah,nup,luas,tahun_perolehan,bukti_kepemilikan,nilai_perolehan,keterangan,id_admin,status) 
		                    VALUES ('$kode','$jenis','$nup','$luas','$tahun','$bukti','$nilai','$ket','$adm','$status')");
		$act ? header('Location: '.host().'/aset-tanah?msg=success') : header('Location: '.host().'/aset-tanah?msg=failed');
	elseif ($url[2]=='edit'):
		$idtanah = $_POST['id_tanah'];
		$kode = $_POST['kode_tanah'];
		$jenis = $_POST['jenis_tanah'];
		$nup = $_POST['nup'];
		$luas = $_POST['luas'];
		$tahun = $_POST['tahun_perolehan'];
		$bukti = $_POST['bukti_kepemilikan'];
		$nilai = $_POST['nilai_perolehan'];
		$ket = $_POST['keterangan'];
		$adm = $_SESSION['id_admin'];
		$status = $_POST['status'];
		$act = $db->query("UPDATE aset_tanah SET kode_tanah='$kode',jenis_tanah='$jenis',nup='$nup',luas='$luas',tahun_perolehan='$tahun',bukti_kepemilikan='$bukti',nilai_perolehan='$nilai',keterangan='$ket',id_admin='$adm',status='$status' WHERE id_tanah='$idtanah'");
		$act ? header('Location: '.host().'/aset-tanah?msg=success') : header('Location: '.host().'/aset-tanah?msg=failed');
	elseif ($url[2]=='hapus'):
		$idtanah = $_GET['id'];
	    $act = $db->query("DELETE FROM aset_tanah WHERE id_tanah='$idtanah'");
	    $act ? header('Location: '.host().'/aset-tanah?msg=success') : header('Location: '.host().'/aset-tanah?msg=failed');
	elseif ($url[2]=='status'):
		$nup = $_POST['nup'];
		$status = $_POST['status'];
	    $act = $db->query("UPDATE aset_tanah SET status='$status' WHERE nup='$nup'");
	    $act ? header('Location: '.host().'/aset-tanah?msg=success') : header('Location: '.host().'/aset-tanah?msg=failed');
	endif;
//END ASET TANAH

//ASET BANGUNAN
elseif (array_key_exists(1,$url) && $url[1]=='aset-bangunan'):
	if ($url[2]=='tambah'):
		$kode = $_POST['kode_bangunan'];
		$jenis = $_POST['jenis_bangunan'];
		$nup = $_POST['nup'];
		$luas = $_POST['luas'];
		$tahun = $_POST['tahun_perolehan'];
		$type = $_POST['type_bangunan'];
		$nilai = $_POST['nilai'];
		$ket = $_POST['keterangan'];
		$adm = $_SESSION['id_admin'];
		$status = $_POST['status'];
		$act = $db->query("INSERT INTO aset_bangunan (kode_bangunan,jenis_bangunan,nup,luas,tahun_perolehan,type_bangunan,nilai,keterangan,id_admin,status) 
		                    VALUES ('$kode','$jenis','$nup','$luas','$tahun','$type','$nilai','$ket','$adm','$status')");
		$act ? header('Location: '.host().'/aset-bangunan?msg=success') : header('Location: '.host().'/aset-bangunan?msg=failed');
	elseif ($url[2]=='edit'):
		$idbangunan = $_POST['id_bangunan'];
		$kode = $_POST['kode_bangunan'];
		$jenis = $_POST['jenis_bangunan'];
		$nup = $_POST['nup'];
		$luas = $_POST['luas'];
		$tahun = $_POST['tahun_perolehan'];
		$type = $_POST['type_bangunan'];
		$nilai = $_POST['nilai'];
		$ket = $_POST['keterangan'];
		$adm = $_SESSION['id_admin'];
		$status = $_POST['status'];
		$act = $db->query("UPDATE aset_bangunan SET kode_bangunan='$kode',jenis_bangunan='$jenis',nup='$nup',luas='$luas',tahun_perolehan='$tahun',type_bangunan='$type',nilai='$nilai',keterangan='$ket',id_admin='$adm',status='$status' WHERE id_bangunan='$idbangunan'");
		$act ? header('Location: '.host().'/aset-bangunan?msg=success') : header('Location: '.host().'/aset-bangunan?msg=failed');
	elseif ($url[2]=='hapus'):
		$idbangunan = $_GET['id'];
	    $act = $db->query("DELETE FROM aset_bangunan WHERE id_bangunan='$idbangunan'");
	    $act ? header('Location: '.host().'/aset-bangunan?msg=success') : header('Location: '.host().'/aset-bangunan?msg=failed');
	elseif ($url[2]=='status'):
		$nup = $_POST['nup'];
		$status = $_POST['status'];
	    $act = $db->query("UPDATE aset_bangunan SET status='$status' WHERE nup='$nup'");
	    $act ? header('Location: '.host().'/aset-bangunan?msg=success') : header('Location: '.host().'/aset-bangunan?msg=failed');
	endif;
//END ASET BANGUNAN

//ASET IRIGASI
elseif (array_key_exists(1,$url) && $url[1]=='aset-irigasi'):
	if ($url[2]=='tambah'):
		$kode = $_POST['kode_irigasi'];
		$jenis = $_POST['jenis_irigasi'];
		$nup = $_POST['nup'];
		$ukuran = $_POST['ukuran'];
		$tahun = $_POST['tahun_perolehan'];
		$type = $_POST['type'];
		$nilai = $_POST['nilai'];
		$ket = $_POST['keterangan'];
		$adm = $_SESSION['id_admin'];
		$status = $_POST['status'];
		$act = $db->query("INSERT INTO aset_irigasi (kode_irigasi,jenis_irigasi,nup,ukuran,tahun_perolehan,type,nilai,keterangan,id_admin,status) 
		                    VALUES ('$kode','$jenis','$nup','$ukuran','$tahun','$type','$nilai','$ket','$adm','$status')");
		$act ? header('Location: '.host().'/aset-irigasi?msg=success') : header('Location: '.host().'/aset-irigasi?msg=failed');
	elseif ($url[2]=='edit'):
		$idirigasi = $_POST['id_irigasi'];
		$kode = $_POST['kode_irigasi'];
		$jenis = $_POST['jenis_irigasi'];
		$nup = $_POST['nup'];
		$ukuran = $_POST['ukuran'];
		$tahun = $_POST['tahun_perolehan'];
		$type = $_POST['type'];
		$nilai = $_POST['nilai'];
		$ket = $_POST['keterangan'];
		$adm = $_SESSION['id_admin'];
		$status = $_POST['status'];
		$act = $db->query("UPDATE aset_irigasi SET kode_irigasi='$kode',jenis_irigasi='$jenis',nup='$nup',ukuran='$ukuran',tahun_perolehan='$tahun',type='$type',nilai='$nilai',keterangan='$ket',id_admin='$adm',status='$status' WHERE id_irigasi='$idirigasi'");
		$act ? header('Location: '.host().'/aset-irigasi?msg=success') : header('Location: '.host().'/aset-irigasi?msg=failed');
	elseif ($url[2]=='hapus'):
		$idirigasi = $_GET['id'];
	    $act = $db->query("DELETE FROM aset_irigasi WHERE id_irigasi='$idirigasi'");
	    $act ? header('Location: '.host().'/aset-irigasi?msg=success') : header('Location: '.host().'/aset-irigasi?msg=failed');
	elseif ($url[2]=='status'):
		$nup = $_POST['nup'];
		$status = $_POST['status'];
	    $act = $db->query("UPDATE aset_irigasi SET status='$status' WHERE nup='$nup'");
	    $act ? header('Location: '.host().'/aset-irigasi?msg=success') : header('Location: '.host().'/aset-irigasi?msg=failed');
	endif;
//END ASET IRIGASI

//ASET KENDARAAN
elseif (array_key_exists(1,$url) && $url[1]=='aset-kendaraan'):
	if ($url[2]=='tambah'):
		$kode = $_POST['kode_kendaraan'];
		$nama = $_POST['nama_kendaraan'];
		$nup = $_POST['nup'];
		$type = $_POST['merk_type'];
		$tahun = $_POST['tahun_perolehan'];
		$no = $_POST['nomor_identitas'];
		$nilai = $_POST['nilai_perolehan'];
		$kondisi = $_POST['kondisi_barang'];
		$ket = $_POST['keterangan'];
		$adm = $_SESSION['id_admin'];
		$status = $_POST['status'];
		$act = $db->query("INSERT INTO aset_kendaraan (kode_kendaraan,nama_kendaraan,nup,merk_type,tahun_perolehan,nomor_identitas,nilai_perolehan,kondisi_barang,keterangan,id_admin,status) 
		                    VALUES ('$kode','$nama','$nup','$type','$tahun','$no','$nilai','$kondisi','$ket','$adm','$status')");
		$act ? header('Location: '.host().'/aset-kendaraan?msg=success') : header('Location: '.host().'/aset-kendaraan?msg=failed');
	elseif ($url[2]=='edit'):
		$idkendaraan = $_POST['id_kendaraan'];
		$kode = $_POST['kode_kendaraan'];
		$nama = $_POST['nama_kendaraan'];
		$nup = $_POST['nup'];
		$type = $_POST['merk_type'];
		$tahun = $_POST['tahun_perolehan'];
		$no = $_POST['nomor_identitas'];
		$nilai = $_POST['nilai_perolehan'];
		$kondisi = $_POST['kondisi_barang'];
		$ket = $_POST['keterangan'];
		$adm = $_SESSION['id_admin'];
		$status = $_POST['status'];
		$act = $db->query("UPDATE aset_kendaraan SET kode_kendaraan='$kode',nama_kendaraan='$nama',nup='$nup',merk_type='$type',tahun_perolehan='$tahun',nomor_identitas='$no',nilai_perolehan='$nilai',kondisi_barang='$kondisi',keterangan='$ket',id_admin='$adm',status='$status' WHERE id_kendaraan='$idkendaraan'");
		$act ? header('Location: '.host().'/aset-kendaraan?msg=success') : header('Location: '.host().'/aset-kendaraan?msg=failed');
	elseif ($url[2]=='hapus'):
		$idkendaraan = $_GET['id'];
	    $act = $db->query("DELETE FROM aset_kendaraan WHERE id_kendaraan='$idkendaraan'");
	    $act ? header('Location: '.host().'/aset-kendaraan?msg=success') : header('Location: '.host().'/aset-kendaraan?msg=failed');
	elseif ($url[2]=='status'):
		$nup = $_POST['nup'];
		$status = $_POST['status'];
	    $act = $db->query("UPDATE aset_kendaraan SET status='$status' WHERE nup='$nup'");
	    $act ? header('Location: '.host().'/aset-kendaraan?msg=success') : header('Location: '.host().'/aset-kendaraan?msg=failed');
	endif;
//END ASET KENDARAAN


//ASET PERALATAN
elseif (array_key_exists(1,$url) && $url[1]=='aset-peralatan'):
	if ($url[2]=='tambah'):
		$kode = $_POST['kode_peralatan'];
		$nama = $_POST['nama_peralatan'];
		$nup = $_POST['nup'];
		$type = $_POST['merk_type'];
		$tahun = $_POST['tahun_perolehan'];
		$nilai = $_POST['nilai_perolehan'];
		$kondisi = $_POST['kondisi_barang'];
		$ket = $_POST['keterangan'];
		$adm = $_SESSION['id_admin'];
		$status = $_POST['status'];
		$act = $db->query("INSERT INTO aset_peralatan (kode_peralatan,nama_peralatan,nup,merk_type,tahun_perolehan,nilai_perolehan,kondisi_barang,keterangan,id_admin,status) 
		                    VALUES ('$kode','$nama','$nup','$type','$tahun','$nilai','$kondisi','$ket','$adm','$status')");
		$act ? header('Location: '.host().'/aset-peralatan?msg=success') : header('Location: '.host().'/aset-peralatan?msg=failed');
	elseif ($url[2]=='edit'):
		$idperalatan = $_POST['id_peralatan'];
		$kode = $_POST['kode_peralatan'];
		$nama = $_POST['nama_peralatan'];
		$nup = $_POST['nup'];
		$type = $_POST['merk_type'];
		$tahun = $_POST['tahun_perolehan'];
		$nilai = $_POST['nilai_perolehan'];
		$kondisi = $_POST['kondisi_barang'];
		$ket = $_POST['keterangan'];
		$adm = $_SESSION['id_admin'];
		$status = $_POST['status'];
		$act = $db->query("UPDATE aset_peralatan SET kode_peralatan='$kode',nama_peralatan='$nama',nup='$nup',merk_type='$type',tahun_perolehan='$tahun',nilai_perolehan='$nilai',kondisi_barang='$kondisi',keterangan='$ket',id_admin='$adm',status='$status' WHERE id_peralatan='$idperalatan'");
		$act ? header('Location: '.host().'/aset-peralatan?msg=success') : header('Location: '.host().'/aset-peralatan?msg=failed');
	elseif ($url[2]=='hapus'):
		$idperalatan = $_GET['id'];
	    $act = $db->query("DELETE FROM aset_peralatan WHERE id_peralatan='$idperalatan'");
	    $act ? header('Location: '.host().'/aset-peralatan?msg=success') : header('Location: '.host().'/aset-peralatan?msg=failed');
	elseif ($url[2]=='status'):
		$nup = $_POST['nup'];
		$status = $_POST['status'];
	    $act = $db->query("UPDATE aset_peralatan SET status='$status' WHERE nup='$nup'");
	    $act ? header('Location: '.host().'/aset-peralatan?msg=success') : header('Location: '.host().'/aset-peralatan?msg=failed');
	endif;
//END ASET PERALATAN


//TIM INVENTARISASI
    //TIM ASET TANAH
elseif (array_key_exists(1,$url) && $url[1]=='tim-aset-tanah'):
	if ($url[2]=='tambah'):
		$nama = $_POST['nama_tim'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['kontak'];
		$cat = $_POST['aset_kategori'];
		$reg = $_POST['no_pengajuan'];
		$act = $db->query("INSERT INTO tim_inventarisasi (nama_tim,alamat,kontak,aset_kategori,no_pengajuan) 
		                    VALUES ('$nama','$alamat','$telp','$cat','$reg')");
		$act ? header('Location: '.host().'/tim-aset-tanah?msg=success') : header('Location: '.host().'/tim-aset-tanah?msg=failed');
	elseif ($url[2]=='edit'):
		$idtim = $_POST['id_tim'];
		$nama = $_POST['nama_tim'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['kontak'];
		$cat = $_POST['aset_kategori'];
		$reg = $_POST['no_pengajuan'];
		$act = $db->query("UPDATE tim_inventarisasi SET nama_tim='$nama',alamat='$alamat',kontak='$telp',aset_kategori='$cat',no_pengajuan='$reg' WHERE id_tim='$idtim'");
		$act ? header('Location: '.host().'/tim-aset-tanah?msg=success') : header('Location: '.host().'/tim-aset-tanah?msg=failed');
	elseif ($url[2]=='hapus'):
		$idtim = $_GET['id'];
	    $act = $db->query("DELETE FROM tim_inventarisasi WHERE id_tim='$idtim'");
	    $act ? header('Location: '.host().'/tim-aset-tanah?msg=success') : header('Location: '.host().'/tim-aset-tanah?msg=failed');
	endif;
    //END TIM ASET TANAH

    //TIM ASET BANGUNAN
elseif (array_key_exists(1,$url) && $url[1]=='tim-aset-bangunan'):
	if ($url[2]=='tambah'):
		$nama = $_POST['nama_tim'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['kontak'];
		$cat = $_POST['aset_kategori'];
		$reg = $_POST['no_pengajuan'];
		$act = $db->query("INSERT INTO tim_inventarisasi (nama_tim,alamat,kontak,aset_kategori,no_pengajuan) 
		                    VALUES ('$nama','$alamat','$telp','$cat','$reg')");
		$act ? header('Location: '.host().'/tim-aset-bangunan?msg=success') : header('Location: '.host().'/tim-aset-bangunan?msg=failed');
	elseif ($url[2]=='edit'):
		$idtim = $_POST['id_tim'];
		$nama = $_POST['nama_tim'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['kontak'];
		$cat = $_POST['aset_kategori'];
		$reg = $_POST['no_pengajuan'];
		$act = $db->query("UPDATE tim_inventarisasi SET nama_tim='$nama',alamat='$alamat',kontak='$telp',aset_kategori='$cat',no_pengajuan='$reg' WHERE id_tim='$idtim'");
		$act ? header('Location: '.host().'/tim-aset-bangunan?msg=success') : header('Location: '.host().'/tim-aset-bangunan?msg=failed');
	elseif ($url[2]=='hapus'):
		$idtim = $_GET['id'];
	    $act = $db->query("DELETE FROM tim_inventarisasi WHERE id_tim='$idtim'");
	    $act ? header('Location: '.host().'/tim-aset-bangunan?msg=success') : header('Location: '.host().'/tim-aset-bangunan?msg=failed');
	endif;
    //END TIM ASET BANGUNAN

    //TIM ASET IRIGASI
elseif (array_key_exists(1,$url) && $url[1]=='tim-aset-irigasi'):
	if ($url[2]=='tambah'):
		$nama = $_POST['nama_tim'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['kontak'];
		$cat = $_POST['aset_kategori'];
		$reg = $_POST['no_pengajuan'];
		$act = $db->query("INSERT INTO tim_inventarisasi (nama_tim,alamat,kontak,aset_kategori,no_pengajuan) 
		                    VALUES ('$nama','$alamat','$telp','$cat','$reg')");
		$act ? header('Location: '.host().'/tim-aset-irigasi?msg=success') : header('Location: '.host().'/tim-aset-irigasi?msg=failed');
	elseif ($url[2]=='edit'):
		$idtim = $_POST['id_tim'];
		$nama = $_POST['nama_tim'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['kontak'];
		$cat = $_POST['aset_kategori'];
		$reg = $_POST['no_pengajuan'];
		$act = $db->query("UPDATE tim_inventarisasi SET nama_tim='$nama',alamat='$alamat',kontak='$telp',aset_kategori='$cat',no_pengajuan='$reg' WHERE id_tim='$idtim'");
		$act ? header('Location: '.host().'/tim-aset-irigasi?msg=success') : header('Location: '.host().'/tim-aset-irigasi?msg=failed');
	elseif ($url[2]=='hapus'):
		$idtim = $_GET['id'];
	    $act = $db->query("DELETE FROM tim_inventarisasi WHERE id_tim='$idtim'");
	    $act ? header('Location: '.host().'/tim-aset-irigasi?msg=success') : header('Location: '.host().'/tim-aset-irigasi?msg=failed');
	endif;
    //END TIM ASET IRIGASI


    //TIM ASET KENDARAAN
elseif (array_key_exists(1,$url) && $url[1]=='tim-aset-kendaraan'):
	if ($url[2]=='tambah'):
		$nama = $_POST['nama_tim'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['kontak'];
		$cat = $_POST['aset_kategori'];
		$reg = $_POST['no_pengajuan'];
		$act = $db->query("INSERT INTO tim_inventarisasi (nama_tim,alamat,kontak,aset_kategori,no_pengajuan) 
		                    VALUES ('$nama','$alamat','$telp','$cat','$reg')");
		$act ? header('Location: '.host().'/tim-aset-kendaraan?msg=success') : header('Location: '.host().'/tim-aset-kendaraan?msg=failed');
	elseif ($url[2]=='edit'):
		$idtim = $_POST['id_tim'];
		$nama = $_POST['nama_tim'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['kontak'];
		$cat = $_POST['aset_kategori'];
		$reg = $_POST['no_pengajuan'];
		$act = $db->query("UPDATE tim_inventarisasi SET nama_tim='$nama',alamat='$alamat',kontak='$telp',aset_kategori='$cat',no_pengajuan='$reg' WHERE id_tim='$idtim'");
		$act ? header('Location: '.host().'/tim-aset-kendaraan?msg=success') : header('Location: '.host().'/tim-aset-kendaraan?msg=failed');
	elseif ($url[2]=='hapus'):
		$idtim = $_GET['id'];
	    $act = $db->query("DELETE FROM tim_inventarisasi WHERE id_tim='$idtim'");
	    $act ? header('Location: '.host().'/tim-aset-kendaraan?msg=success') : header('Location: '.host().'/tim-aset-kendaraan?msg=failed');
	endif;
    //END TIM ASET KENDARAAN


    //TIM ASET PERALATAN
elseif (array_key_exists(1,$url) && $url[1]=='tim-aset-peralatan'):
	if ($url[2]=='tambah'):
		$nama = $_POST['nama_tim'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['kontak'];
		$cat = $_POST['aset_kategori'];
		$reg = $_POST['no_pengajuan'];
		$act = $db->query("INSERT INTO tim_inventarisasi (nama_tim,alamat,kontak,aset_kategori,no_pengajuan) 
		                    VALUES ('$nama','$alamat','$telp','$cat','$reg')");
		$act ? header('Location: '.host().'/tim-aset-peralatan?msg=success') : header('Location: '.host().'/tim-aset-peralatan?msg=failed');
	elseif ($url[2]=='edit'):
		$idtim = $_POST['id_tim'];
		$nama = $_POST['nama_tim'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['kontak'];
		$cat = $_POST['aset_kategori'];
		$reg = $_POST['no_pengajuan'];
		$act = $db->query("UPDATE tim_inventarisasi SET nama_tim='$nama',alamat='$alamat',kontak='$telp',aset_kategori='$cat',no_pengajuan='$reg' WHERE id_tim='$idtim'");
		$act ? header('Location: '.host().'/tim-aset-peralatan?msg=success') : header('Location: '.host().'/tim-aset-peralatan?msg=failed');
	elseif ($url[2]=='hapus'):
		$idtim = $_GET['id'];
	    $act = $db->query("DELETE FROM tim_inventarisasi WHERE id_tim='$idtim'");
	    $act ? header('Location: '.host().'/tim-aset-peralatan?msg=success') : header('Location: '.host().'/tim-aset-peralatan?msg=failed');
	endif;
    //END TIM ASET PERALATAN
//END TIM INVENTARISASI
else:
	header('Location: /dashboard');
endif;

