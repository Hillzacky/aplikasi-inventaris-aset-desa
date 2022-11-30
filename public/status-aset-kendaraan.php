<?php
if($_SESSION['login']!=false):
include 'components/header.php'?>

<h1 class="app-page-title">Perbarui Status Aset Kendaraan Massal</h1>
<hr class="mb-4">
<div class="row g-4 settings-section">
  <div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
      <div class="app-card-body">
    	<form class="form-kendaraan" method="post" action="/proses/aset-kendaraan/status">
    	    <div class="mb-3">
    		    <label for="f1" class="form-label">NUP</label>
			    <input type="text" list="listNUP" class="form-control" id="f1" name="nup" placeholder="Nomor Urut Pendaftaran (Nomor Registrasi)" required="required">
			    <datalist id="listNUP">
        	        <?php $nups = $db->query("SELECT nup FROM aset_kendaraan GROUP BY NUP");
        	        foreach($nups->fetch_all(MYSQLI_ASSOC) as $nup): ?>
                        <option value="<?=$nup['nup']?>">
			        <?php endforeach; ?>
                </datalist>
    		</div>
    	    <div class="mb-3">
    		    <label for="f2" class="form-label">Ganti status ke :</label>
                <select class="form-select" id="f2" aria-label="Status" name="status">
                    <option value="1">Pengajuan</option>
                    <option value="2">Diterima</option>
                    <option value="3">Ditolak</option>
                </select>
    		</div>
    		<button type="submit" class="btn app-btn-primary">Perbarui</button>
        </form>
      </div><!--//app-card-body-->		
    </div>
  </div>
</div>
<?php include 'components/footer.php';
else:
    header('Location: /masuk');
endif;
?>