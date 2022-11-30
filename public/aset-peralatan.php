<?php
if($_SESSION['login']!=false):
$page = $_GET['page'] ?? 1;
$page = (int) $page;
$getsearch = urldecode($_GET['search']);
$search = (isset($_GET['search']) && $_GET['search']!=null) ? "WHERE nama_peralatan LIKE '%$getsearch%'" : '';

$options = array(  
    'url'        	=> host().'/aset-peralatan?page=*VAR*',  
    'db_handle'  	=> $db 
);  
  
$pagination = new pagination($page, 'SELECT * FROM aset_peralatan '.$search.' ORDER BY tgl_input ASC', $options);


?>

<?php include 'components/header.php'?>

<div class="row g-3 mb-4 align-items-center justify-content-between">
  <div class="col-auto">
        <h1 class="app-page-title mb-0">Aset Desa Berupa Peralatan &amp; Mesin</h1>
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
			    <a class="btn app-btn-secondary" href="/aset-peralatan/tambah">
				    <i class="bi bi-file-earmark-plus"></i> Tambah
				</a>				    
			    <a class="btn app-btn-secondary" href="/aset-peralatan/status">
				    <i class="bi bi-pencil-square"></i> Status
				</a>
			    <a class="btn app-btn-secondary" href="/aset-peralatan/filter">
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
					<th class="cell">Nama Peralatan</th>
					<th class="cell">NUP</th>
					<th class="cell">Merk/Type</th>
					<th class="cell">Tahun Perolehan</th>
					<th class="cell">Nilai Perolehan</th>
					<th class="cell">Kondisi Barang</th>
					<th class="cell">Keterangan</th>
					<th class="cell">Tgl. Input</th>
					<th class="cell">Status</th>
				</tr>
			</thead>
			<tbody class="text-nowrap">
			    <?php foreach($pagination->resultset->fetch_all(MYSQLI_ASSOC) as $row): ?>
				<tr>
					<td class="cell">
						<a class="me-1" href="/aset-peralatan/edit?id=<?=$row['id_peralatan']?>"><i class="bi bi-pencil-square"></i></a>
						<a class="text-danger del" href="/proses/aset-peralatan/hapus?id=<?=$row['id_peralatan']?>"><i class="bi bi-x-square"></i></a>
					</td>
					<td class="cell"><span class="badge bg-secondary"><?=$row['kode_peralatan']?></span></td>
					<td class="cell"><?=$row['nama_peralatan']?></td>
					<td class="cell"><?=$row['nup']?></td>
					<td class="cell"><?=$row['merk_type']?></td>
					<td class="cell"><?=$row['tahun_perolehan']?></td>
					<td class="cell"><?=$row['nilai_perolehan']?></td>
					<td class="cell"><?=$row['kondisi_barang']?></td>
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


<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="toast" class="toast fade hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">Notifikasi</strong>
      <small>Baru saja</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      <?='Pesan '.ucfirst($_GET['msg']).'.'?>
    </div>
  </div>
</div>

<?='<nav class="app-pagination">'.$pagination->links_html.'</nav>'?>
<?='<span class="bg-light border p-3 me-auto">Total Halaman: '.$pagination->total_pages.'</span> <span class="bg-light border p-3 ms-auto">Total Hasil: '.$pagination->total_results.'</span>'?>

<script>
    function cekuri(field){
        if(window.location.href.indexOf('?' + field + '=') != -1)
            return true;
        else if(window.location.href.indexOf('&' + field + '=') != -1)
            return true;
        return false
    }
    
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
    if(cekuri('msg')){
        const t = document.querySelector('#toast');
        t.classList.remove("hide");
        t.classList.add("show");
        setTimeout(()=>{
            t.classList.remove("show");
            t.classList.add("hide");
        }, 3500);
    }
</script>

<?php include 'components/footer.php';
else:
    header('Location: /masuk');
endif;
?>