<?php include 'components/header.php'?>
				<h1 class="app-page-title">Tambah Tim Aset Bangunan</h1>
				<hr class="mb-4">
				<div class="row g-4 settings-section">
          <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
					    
					    <div class="app-card-body">
						    <form class="form-bangunan" method="post" action="/proses/tim-aset-bangunan/tambah">
							    <div class="mb-3">
								    <label for="f1" class="form-label">Nama</label>
								    <input type="text" class="form-control" id="f1" name="nama_tim" placeholder="Nama Lengkap" required="required">
									</div>
							    <div class="mb-3">
								    <label for="f2" class="form-label">Alamat</label>
								    <textarea class="form-control" id="f2" type="text" name="alamat" placeholder="Alamat" style="height: 5rem;"></textarea>
									</div>
							    <div class="mb-3">
								    <label for="f3" class="form-label">Kontak</label>
								    <input type="text" class="form-control" id="f3" name="kontak" placeholder="Kontak" required="required">
									</div>
								<input type="hidden" class="form-control" name="aset_kategori" value="Bangunan">
							    <div class="mb-3">
								    <label for="f5" class="form-label">No.Reg(NUP)</label>
								    <input type="text" class="form-control" list="listNUP" id="f5" name="no_pengajuan" placeholder="Nomor Urut Pendaftaran (Nomor Registrasi)" required="required">
								    <datalist id="listNUP">
                            	        <?php $nups = $db->query("SELECT nup FROM aset_bangunan GROUP BY NUP");
                            	        foreach($nups->fetch_all(MYSQLI_ASSOC) as $nup): ?>
                                            <option value="<?=$nup['nup']?>">
                    			        <?php endforeach; ?>
                                    </datalist>
									</div>
								<button type="submit" class="btn app-btn-primary">Simpan</button>
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
<?php include 'components/footer.php'?>
