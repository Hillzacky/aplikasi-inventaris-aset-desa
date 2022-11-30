<?php
$page = $_GET['page'] ?? 1;
$page = (int) $page;
$getsearch = urldecode($_GET['search']);
$search = (isset($_GET['search']) && $_GET['search']!=null) ? "WHERE nama_admin LIKE '%$getsearch%'" : '';

$options = array(  
    'url'        	=> host().'/users?page=*VAR*',  
    'db_handle'  	=> $db 
);  
  
$pagination = new pagination($page, 'SELECT * FROM pengguna '.$search.' ORDER BY nama_admin ASC', $options);


?>

<?php include 'components/header.php'?>

<div class="row g-3 mb-4 align-items-center justify-content-between">
  <div class="col-auto">
        <h1 class="app-page-title mb-0">Kelola Admin Pengguna</h1>
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
					<th class="cell">Nama Lengkap</th>
					<th class="cell">Nama Pengguna</th>
				</tr>
			</thead>
			<tbody class="text-nowrap">
			    <?php foreach($pagination->resultset->fetch_all(MYSQLI_ASSOC) as $row): ?>
				<tr>
					<td class="cell">
						<a class="me-1" href="/users/edit?id=<?=$row['id_admin']?>"><i class="bi bi-pencil-square"></i></a>
						<a class="text-danger del" href="/proses/auth/delete?id=<?=$row['id_admin']?>" data-confirm="Yakin hapus <?=$row['nama_admin']?>?"><i class="bi bi-x-square"></i></a>
					</td>
					<td class="cell"><?=$row['nama_admin']?></td>
					<td class="cell"><?=$row['namapengguna']?></td>
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

<?php include 'components/footer.php'?>