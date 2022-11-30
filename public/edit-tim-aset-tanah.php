<?php
if($_SESSION['login']!=false):
$id = isset($_GET['id'])&&($_GET['id']!==null) ? (int) $_GET['id'] : header('Location: /tim-aset-tanah');
$q = $db->query("SELECT * FROM tim_inventarisasi WHERE id_tim=$id");
$rows = $q->fetch_all(MYSQLI_ASSOC);$row = $rows[0];
include 'components/header.php'?>

				<h1 class="app-page-title">Perbarui Tim Aset Tanah</h1>
				<hr class="mb-4">
				<div class="row g-4 settings-section">
          <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
					    
					    <div class="app-card-body">
						    <form class="form-tanah" method="post" action="/proses/tim-aset-tanah/edit">
								    <input type="hidden" name="id_tim" value="<?=$row['id_tim']?>">
							    <div class="mb-3">
								    <label for="f1" class="form-label">Nama</label>
								    <input type="text" class="form-control" id="f1" name="nama_tim" placeholder="Nama Lengkap" value="<?=$row['nama_tim']?>" required="required">
									</div>
							    <div class="mb-3">
								    <label for="f2" class="form-label">Alamat</label>
								    <textarea class="form-control" id="f2" type="text" name="alamat" placeholder="Alamat" style="height: 5rem;"><?=$row['alamat']?></textarea>
									</div>
							    <div class="mb-3">
								    <label for="f3" class="form-label">Kontak</label>
								    <input type="text" class="form-control" id="f3" name="kontak" placeholder="Kontak" value="<?=$row['kontak']?>" required="required">
									</div>
								<input type="hidden" class="form-control" name="aset_kategori" value="Tanah">
							    <div class="mb-3">
								    <label for="f5" class="form-label">No.Reg(NUP)</label>
								    <input type="text" class="form-control" list="listNUP" id="f5" name="no_pengajuan" value="<?=$row['no_pengajuan']?>" required="required">
								    <datalist id="listNUP">
                            	        <?php $nups = $db->query("SELECT nup FROM aset_tanah GROUP BY NUP");
                            	        foreach($nups->fetch_all(MYSQLI_ASSOC) as $nup): ?>
                                            <option value="<?=$nup['nup']?>">
                    			        <?php endforeach; ?>
                                    </datalist>
									</div>
								<button type="submit" class="btn app-btn-primary">Perbarui</button>
						    </form>
					    </div><!--//app-card-body-->
					    
					</div><!--//app-card-->
        </div>
        <div class="col-12 col-md-4">
          <h3 class="section-title mb-3">Pembentukan Tim Inventarisasi Aset Desa</h3>
          <div class="section-intro">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Membentuk dan mengesahkan tim inventarisasi aset desa meliputi verifikasi/validasi data aset desa, pemeliharaan, pelaporan dan pertanggungjawaban.</li>
              <li class="list-group-item">Melakukan koordinasi dalam pelaksanaan inventarisasi aset desa.</li>
              <li class="list-group-item">Hasil inventarisasi aset desa yang telah dilaksanakan dilaporkan dengan waktu yang di tentukan.</li>
            </ul>
          </div>
          <h3 class="section-title my-3">Petunjuk pengisian Formulir pendaftaran tim</h3>
          <div class="section-intro">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Isi sesuai dengan kategori aset desa yang di ikut sertakan</li>
              <li class="list-group-item">Isi Nama Lengkap sesuai KTP</li>
              <li class="list-group-item">Isi Alamat Lengkap sesuai KTP</li>
              <li class="list-group-item">Isi Kontak dengan nomor yang dapat dihubungi</li>
              <li class="list-group-item">Masukan No. Registrasi sesuai dengan Permohonan Aset yang sedang di ajukan.</li>
            </ul>
          </div>
        </div>

      </div>

<?php include 'components/footer.php';
else:
    header('Location: /masuk');
endif;
?>
