<?php
if($_SESSION['login']!=false):
include 'components/header-datepicker.php'?>
<h1 class="app-page-title">Saring Data Aset Peralatan &amp; Mesin</h1>
		<hr class="mb-4">
		<div class="row g-4 settings-section">
          <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
			    <div class="app-card-body">
				    <form class="form-peralatan" method="POST" action="/aset-peralatan/print">
					    <div class="mb-3" data-provide="datepicker" data-date-format="yyyy-mm-dd">
						    <label for="f1" class="form-label">Tgl. Awal</label>
						    <input type="text" class="form-control datepicker" id="f1" name="startdate" placeholder="YYYY/MM/DD" required="required">
						</div>
					    <div class="mb-3" data-provide="datepicker" data-date-format="yyyy-mm-dd">
						    <label for="f2" class="form-label">Tgl. Akhir</label>
						    <input type="text" class="form-control datepicker" id="f2" name="enddate" placeholder="YYYY/MM/DD" required="required">
						</div>
                	    <div class="mb-3">
                		    <label for="f3" class="form-label">NUP</label>
						    <input type="text" class="form-control" list="listNUP" id="f3" name="nup" placeholder="Nomor Urut Pendaftaran (Nomor Registrasi)" required="required">
						    <datalist id="listNUP">
                    	        <?php $nups = $db->query("SELECT nup FROM aset_peralatan GROUP BY NUP");
                    	        foreach($nups->fetch_all(MYSQLI_ASSOC) as $nup): ?>
                                    <option value="<?=$nup['nup']?>">
            			        <?php endforeach; ?>
                            </datalist>
                		</div>
					    <div class="mb-3">
						    <label for="f4" class="form-label">Status</label>
				            <select class="form-select" id="f4" aria-label="Status" name="status">
				                <option value="1">Pengajuan</option>
				                <option value="2">Diterima</option>
				                <option value="3">Ditolak</option>
				            </select>
						</div>
						<button type="submit" class="btn app-btn-primary"><i class="bi bi-printer"></i> Print</button>
					</form>
				</div>
			</div>
		  </div>
          <div class="col-12 col-md-4">
            <h3 class="section-title">Keterangan</h3>
            <div class="section-intro mb-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Saring Tanggal Berdasarkan Tgl.Input</li>
                  <li class="list-group-item">Saring berdasarkan Nomor Urut Pendaftaran Barang (Pengelompokan)</li>
                  <li class="list-group-item">Saring berdasarkan status barang</li>
                </ul>
            </div>
            <h3 class="section-title">Hasil cetak</h3>
            <div class="section-intro">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Nomor Berita Acara</li>
                  <li class="list-group-item">Tanggal Berita Acara</li>
                  <li class="list-group-item">Nomor Urut</li>
                  <li class="list-group-item">Jenis Barang</li>
                  <li class="list-group-item">Kode Barang Sesuai Kodefikasinya</li>
                  <li class="list-group-item">Nomor Urut Pendaftaran Barang Sesuai Buku Inventaris</li>
                  <li class="list-group-item">Luas Bangunan</li>
                  <li class="list-group-item">Tahun Perolehan</li>
                  <li class="list-group-item">Tipe (Permanen/Semi Permanen)</li>
                  <li class="list-group-item">Nilai Perolehan</li>
                  <li class="list-group-item">Keterangan Terkait Barang (Jumlah/asal perolehan yang di anggap perlu).</li>
                </ul>
            </div>
          </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?=host().'/public/assets/js/bootstrap-datepicker.js'?>"></script>
<?php include 'components/footer.php';
else:
    header('Location: /masuk');
endif;
?>