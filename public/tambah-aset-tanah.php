<?php
if($_SESSION['login']!=false):
include 'components/header.php'?>

				<h1 class="app-page-title">Tambah Aset Tanah</h1>
				<hr class="mb-4">
				<div class="row g-4 settings-section">
          <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
					    
					    <div class="app-card-body">
						    <form class="form-tanah" method="post" action="/proses/aset-tanah/tambah">
							    <div class="mb-3">
								    <label for="f1" class="form-label">Kode Tanah</label>
								    <input type="text" class="form-control" id="f1" name="kode_tanah" placeholder="Kode Tanah" required="required">
									</div>
							    <div class="mb-3">
								    <label for="f2" class="form-label">Jenis Tanah</label>
								    <input type="text" class="form-control" id="f2" name="jenis_tanah" placeholder="Jenis Tanah" required="required">
									</div>
							    <div class="mb-3">
								    <label for="f3" class="form-label">NUP</label>
								    <input type="text" list="listNUP" class="form-control" id="f3" name="nup" placeholder="NUP" required="required">
								    <datalist id="listNUP">
                            	        <?php $nups = $db->query("SELECT nup FROM aset_tanah GROUP BY NUP");
                            	        foreach($nups->fetch_all(MYSQLI_ASSOC) as $nup): ?>
                                            <option value="<?=$nup['nup']?>">
                    			        <?php endforeach; ?>
                                    </datalist>
									</div>
							    <div class="mb-3">
								    <label for="f4" class="form-label">Luas</label>
								    <input type="text" class="form-control" id="f4" name="luas" placeholder="Luas" required="required">
									</div>
							    <div class="mb-3">
								    <label for="f5" class="form-label">Tahun Perolehan</label>
								    <input type="text" class="form-control" id="f5" name="tahun_perolehan" placeholder="Tahun Perolehan" required="required">
									</div>
							    <div class="mb-3">
								    <label for="f6" class="form-label">Bukti Kepemilikan</label>
								    <input type="text" class="form-control" id="f6" name="bukti_kepemilikan" placeholder="Bukti Kepemilikan" required="required">
									</div>
							    <div class="mb-3">
								    <label for="f7" class="form-label">Nilai Perolehan</label>
								    <input type="text" class="form-control" id="f7" name="nilai_perolehan" placeholder="Nilai Perolehan" required="required">
									</div>
							    <div class="mb-3">
								    <label for="f8" class="form-label">Keterangan</label>
								    <textarea class="form-control" id="f8" type="text" name="keterangan" placeholder="Keterangan" style="height: 10rem;"></textarea>
									</div>
							    <div class="mb-3">
								    <label for="f9" class="form-label">Status</label>
        				            <select class="form-select" id="f9" aria-label="Status" name="status">
        				                <option value="1">Pengajuan</option>
        				                <option value="2">Diterima</option>
        				                <option value="3">Ditolak</option>
        				            </select>
								</div>
								<button type="submit" class="btn app-btn-primary">Simpan</button>
						    </form>
					    </div><!--//app-card-body-->
					    
					</div><!--//app-card-->
        </div>
        <div class="col-12 col-md-4">
          <h3 class="section-title">Keterangan</h3>
          <div class="section-intro">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Kode Barang Sesuai Kodefikasinya</li>
              <li class="list-group-item">Jenis Barang (Tanah Kantor/Sawah dll.)</li>
              <li class="list-group-item">Nomor Urut Pendaftaran Barang Sesuai Buku Inventaris</li>
              <li class="list-group-item">Luas Tanah (M²)</li>
              <li class="list-group-item">Tahun Perolehan Tanah</li>
              <li class="list-group-item">Nomor Bukti Kepemilikan atas Tanah (Girik/Letter C/Sertifikat atau Bukti Lainnya)</li>
              <li class="list-group-item">Nilai Perolehan (Kalau belum ada dapat di isi Rp0/berdasarkan NJOP)</li>
              <li class="list-group-item">Keterangan Terkait Tanah (Lokasi Tanah, Batas-batas dll).</li>
              <li class="list-group-item">Status Barang</li>
            </ul>
          </div>
        </div>

      </div>

<script>
    let f1 = document.querySelector("#f1");
    f1.addEventListener("focusout",()=>{
        const formData = new FormData();
        formData.append('type', 'aset-tanah');
        formData.append('kode', f1.value);
        fetch('/proses/cek-kode', { method: 'POST', body: formData })
          .then((response) => response.json())
          .then((data) => {
              if(data.exist!=false){
                  f1.classList.add("is-invalid")
                  f1.classList.remove("is-valid")
              }else{
                  f1.classList.add("is-valid")
                  f1.classList.remove("is-invalid")
              }
          });
    });
</script>

<?php include 'components/footer.php';
else:
    header('Location: /masuk');
endif;
?>