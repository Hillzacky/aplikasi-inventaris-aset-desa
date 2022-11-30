<?php
$id = isset($_GET['id'])&&($_GET['id']!==null) ? (int) $_GET['id'] : header('Location: /users');
$q = $db->query("SELECT * FROM pengguna WHERE id_admin=$id");
$rows = $q->fetch_all(MYSQLI_ASSOC);$row = $rows[0];
include 'components/header.php'?>
		<h1 class="app-page-title">Perbarui Pengguna</h1>
		<hr class="mb-4">
		<div class="row g-4 settings-section">
          <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
			    <div class="app-card-body">
				    <form class="form-tanah" method="post" action="/proses/auth/update">
						    <input type="hidden" name="id_admin" value="<?=$row['id_admin']?>">
					    <div class="mb-3">
						    <label for="f1" class="form-label">Nama Lengkap</label>
						    <input type="text" class="form-control" id="f1" name="nama_admin" placeholder="Nama Lengkap" value="<?=$row['nama_admin']?>" required="required">
							</div>
					    <div class="mb-3">
						    <label for="f2" class="form-label">Namapengguna</label>
						    <input type="text" class="form-control" id="f2" name="namapengguna" placeholder="Namapengguna" value="<?=$row['namapengguna']?>" required="required">
							</div>
					    <div class="mb-3">
						    <label for="f3" class="form-label">Katasandi Baru</label>
						    <input type="password" class="form-control" id="f3" name="katasandi" placeholder="Katasandi" required="required">
							</div>
						<button type="submit" class="btn app-btn-primary">Perbarui Pengguna</button>
				    </form>
			    </div><!--//app-card-body-->
			</div><!--//app-card-->
        </div>
      </div>
<?php include 'components/footer.php'?>
