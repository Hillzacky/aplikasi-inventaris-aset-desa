<?php
$sd = $_POST['startdate'];
$ed = $_POST['enddate'];
$nup = $_POST['nup'];
$stat = $_POST['status'];

$asets = $db->query("SELECT * FROM aset_kendaraan WHERE nup='$nup' AND status='$stat' AND tgl_input BETWEEN '$sd' AND '$ed'");
$tims = $db->query("SELECT * FROM tim_inventarisasi WHERE aset_kategori='Kendaraan Bermotor' AND no_pengajuan='$nup'");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print</title>
    <link rel="stylesheet" href="<?=host().'/public/assets/css/bootstrap-5.2.0.min.css'?>">
    <link rel="stylesheet" href="<?=host().'/public/assets/css/bootstrap-icons.css'?>">
    <style type="text/css" media="print">
      @page {
        size: A4 landscape;
        margin: 0mm;
      }
      @page :header {
          display: none;
      }
      @page :footer {
          display: none;
      }
    </style>
  </head>
  <body class="p-2">
    
    <div>
      <span>Lampiran : Berita Acara Inventarisasi Aset Desa</span><br>
      <span>Nomor : <?=$nup?></span><br>
      <span>Status : <?=status($stat)?></span><br>
      <span>Tanggal : <?=dateID($sd).' s/d '.dateID($ed)?></span><br>
    </div>

    <div>
      <h3 class="text-center">
          <?php if($stat==1){
                echo "Rekap Permintaan Aset Desa (RPA)<br>Berupa Kendaraan Bermotor";
              }elseif($stat==2){
                echo "Laporan Hasil Inventarisasi (LHI) Aset Desa<br>Berupa Kendaraan Bermotor";
              }elseif($stat==3){
                echo "Rekap Permintaan Aset Desa Berupa Kendaraan Bermotor<br>Yang Tidak Terealisasi";
          }?>
      </h3>
    </div>

    <div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col" align="center">No.</th>
              <th scope="col">Kode</th>
              <th scope="col">Nama</th>
              <th scope="col">Merk/Tipe</th>
              <th scope="col">Tahun</th>
              <th scope="col">No. Identitas</th>
              <th scope="col">Nilai (Rp)</th>
              <th scope="col">Kondisi Barang</th>
              <th scope="col">Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1;$nilai=0;foreach($asets->fetch_all(MYSQLI_ASSOC) as $aset): $nilai+=$aset['nilai_perolehan'];?>
            <tr>
              <th scope="row" align="center"><?=$no++?></th>
              <td><?=$aset['kode_kendaraan']?></td>
              <td><?=$aset['nama_kendaraan']?></td>
              <td><?=$aset['merk_type']?></td>
              <td><?=$aset['tahun_perolehan']?></td>
              <td><?=$aset['nomor_identitas']?></td>
              <td><?=toRp($aset['nilai_perolehan'])?></td>
              <td><?=$aset['kondisi_barang']?></td>
              <td><?=$aset['keterangan']?></td>
            </tr>
            <?php endforeach;?>
            <tr>
              <th scope="row"></th>
              <td colspan="4">Jumlah : <?=$no-1?></td>
              <td></td>
              <td><?=toRp($nilai)?></td>
              <td colspan="2"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div>
      <h6>Tim Inventarisasi:</h6>
      <div class="row row-cols-3">
        <?php foreach($tims->fetch_all(MYSQLI_ASSOC) as $tim):?>
        <div class="col">
          <div class="border-bottom"><i class="bi bi-dot"></i><?=$tim['nama_tim']?></div>
        </div>
        <?php endforeach;?>
      </div>
    </div>

    <script src="<?=host().'/public/assets/css/bootstrap-5.2.0.min.js'?>"></script>
    <script>
        const app = {
            load(fn) { (document.readyState !== 'complete') ? window.addEventListener('load', fn) : fn() },
        }
        app.load(window.print);
        window.onafterprint =(e)=> { alert("Kembali ke Halaman sebelumnya?");history.go(-2); };
    </script>
  </body>
</html>
