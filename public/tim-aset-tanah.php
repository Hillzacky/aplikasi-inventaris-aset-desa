<?php
if($_SESSION['login']!=false):
$page = $_GET['page'] ?? 1;
$page = (int) $page;
$getsearch = urldecode($_GET['search']);
$search = (isset($_GET['search']) && $_GET['search']!=null) ? "AND nama_tim LIKE '%$getsearch%'" : '';

$options = array(  
    'url'        	=> host().'/tim-aset-tanah?page=*VAR*',  
    'db_handle'  	=> $db 
);  
  
$pagination = new pagination($page, "SELECT * FROM tim_inventarisasi WHERE aset_kategori='Tanah' {$search} ORDER BY id_tim ASC", $options);


?>

<?php include 'components/header.php'?>

<div class="row g-3 mb-4 align-items-center justify-content-between">
  <div class="col-auto">
        <h1 class="app-page-title mb-0">Tim Aset Desa Berupa Tanah</h1>
  </div>
  <div class="col-auto">
     <div class="page-utilities">
	    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
		    <div class="col-auto">
			    <form class="table-search-form row gx-1 align-items-center">
                    <div class="col-auto">
                        <input type="text" id="search-orders" name="search" class="form-control search-orders" placeholder="Cari">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn app-btn-secondary">Cari</button>
                    </div>
                </form>
                
		    </div><!--//col-->
		    <div class="col-auto">						    
			    <a class="btn app-btn-secondary" href="/tim-aset-tanah/tambah">
				    <i class="bi bi-file-earmark-plus"></i> Tambah Tim
				</a>
		    </div>
	    </div><!--//row-->
    </div><!--//table-utilities-->
  </div><!--//col-auto-->
</div>

<div class="app-card app-card-orders-table shadow-sm mb-5">
  <div class="app-card-body">
    <div class="table-responsive">
      <table class="table app-table-hover mb-0 text-left">
			<thead class="text-nowrap">
				<tr>
					<th class="cell"></th>
					<th class="cell">Nama</th>
					<th class="cell">Alamat</th>
					<th class="cell">Kontak</th>
					<th class="cell">No.Reg(NUP)</th>
				</tr>
			</thead>
			<tbody class="text-nowrap">
			    <?php foreach($pagination->resultset->fetch_all(MYSQLI_ASSOC) as $row): ?>
				<tr>
					<td class="cell">
						<a class="me-1" href="/tim-aset-tanah/edit?id=<?=$row['id_tim']?>"><i class="bi bi-pencil-square"></i></a>
						<a class="text-danger del" href="/proses/tim-aset-tanah/hapus?id=<?=$row['id_tim']?>" data-confirm="Yakin hapus <?=$row['nama_tim']?>?"><i class="bi bi-x-square"></i></a>
					</td>
					<td class="cell"><?=$row['nama_tim']?></td>
					<td class="cell"><span class="truncate"><?=$row['alamat']?></span></td>
					<td class="cell"><?=$row['kontak']?></td>
					<td class="cell"><?=$row['no_pengajuan']?></td>
				</tr>
			    <?php endforeach; ?>
			</tbody>
			</table>
    </div><!--//table-responsive-->
  </div><!--//app-card-body-->		
</div>

<?='<nav class="app-pagination">'.$pagination->links_html.'</nav>'?>
<?='<span class="bg-light border p-3 me-auto">Total Halaman: '.$pagination->total_pages.'</span> <span class="bg-light border p-3 ms-auto">Total Hasil: '.$pagination->total_results.'</span>'?>

<script>
    let hps = document.querySelectorAll('.del');
    for (var i = 0; i < hps.length; i++) {
      hps[i].addEventListener('click', function(event) {
          event.preventDefault();
          var c = confirm(this.getAttribute('data-confirm'));
          if (c) {
            window.location.href = this.getAttribute('href');
          }
      });
    }
</script>

<?php include 'components/footer.php';
else:
    header('Location: /masuk');
endif;
?>