<?php
$page = $_GET['page'] ?? 1;
$page = (int) $page;
$getsearch = urldecode($_GET['search']);
$search = (isset($_GET['search']) && $_GET['search']!=null) ? "WHERE nama_hilang LIKE '%$getsearch%'" : '';

$options = array(  
    'url'        	=> host().'/aset-hilang?page=*VAR*',  
    'db_handle'  	=> $db 
);  
  
$pagination = new pagination($page, 'SELECT * FROM aset_hilang '.$search.' ORDER BY tgl_input ASC', $options);


?>

<?php include 'components/header.php'?>

<div class="row g-3 mb-4 align-items-center justify-content-between">
  <div class="col-auto">
        <h1 class="app-page-title mb-0">Aset Desa Berupa Barang yang Tidak Diketemukan Dalam Pelaksanaan Inventarisasi</h1>
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
			    <a class="btn app-btn-secondary" href="/aset-hilang/tambah">
				    <i class="bi bi-file-earmark-plus"></i> Tambah
				</a>						    
			    <a class="btn app-btn-secondary" href="#">
				    <i class="bi bi-printer"></i> Print
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
					<th class="cell">Kode</th>
					<th class="cell">Nama</th>
					<th class="cell">NUP</th>
					<th class="cell">Merk/Type</th>
					<th class="cell">Tahun Perolehan</th>
					<th class="cell">Nilai Perolehan</th>
					<th class="cell">Keterangan</th>
					<th class="cell">Tgl. Input</th>
					<th class="cell">Status</th>
				</tr>
			</thead>
			<tbody class="text-nowrap">
			    <?php foreach($pagination->resultset->fetch_all(MYSQLI_ASSOC) as $row): ?>
				<tr>
					<td class="cell">
						<a class="me-1" href="/aset-hilang/edit?id=<?=$row['id_hilang']?>"><i class="bi bi-pencil-square"></i></a>
						<a class="text-danger" href="/proses/aset-hilang/hapus?id=<?=$row['id_hilang']?>"><i class="bi bi-x-square"></i></a>
					</td>
					<td class="cell"><span class="badge bg-secondary"><?=$row['kode_hilang']?></span></td>
					<td class="cell"><?=$row['nama_hilang']?></td>
					<td class="cell"><?=$row['nup']?></td>
					<td class="cell"><?=$row['merk_type']?></td>
					<td class="cell"><?=$row['tahun_perolehan']?></td>
					<td class="cell"><?=$row['nilai_perolehan']?></td>
					<td class="cell"><span class="truncate"><?=$row['keterangan']?></span></td>
					<td class="cell"><?=$row['tgl_input']?></td>
					<td class="cell"><?=status($row['status'])?></td>
				</tr>
			    <?php endforeach; ?>
			</tbody>
			</table>
    </div><!--//table-responsive-->
  </div><!--//app-card-body-->		
</div>

<?='<nav class="app-pagination">'.$pagination->links_html.'</nav>'?>
<?='<span class="bg-light border p-3 me-auto">Total Halaman: '.$pagination->total_pages.'</span> <span class="bg-light border p-3 ms-auto">Total Hasil: '.$pagination->total_results.'</span>'?>
<?php include 'components/footer.php'?>