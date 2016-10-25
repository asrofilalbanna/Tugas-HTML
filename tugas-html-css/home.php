<?php include_once "head.php"; ?>

	<div id="container_content">
<?php include_once "sidebar.php"; ?>
		
		<div id="mainbar">
			<div class="artikel">
				<div>Latest News</div>
				
<?php 
$id = $_GET['hal'];
$array = read\tampilArt::tampilArtikel($id);
foreach ($array as $data) {
$tgl=$data['art_tgl']; 
?>
				<div class="artikel-item">
	
					<div class="artikel-kiri">
						<img src="<?php echo $data['art_gambar'];?>" />
					</div>
					<div class="artikel-kanan">
						<h1 class="artikel-judul"><?php echo $data['art_judul']; ?><h1>
						<div class="artikel-tgl"><?php echo date("d F Y", strtotime($tgl));?></div>
						<p class="artikel-isi">
							<?php echo substr($data['art_isi'], 0, 450). " .... ";?>
						</p>
						<a href="artikel.php?hal=<?php echo $id; ?>&id=<?php echo $data['id_artikel']; ?>" class="artikel-more">Read More</a>
					</div>
				</div>
<?php }?>
			</div>

		</div> <!-- mainbar -->
	</div> <!-- content -->
	<div class="clearfix"></div>

<?php include_once "foot.php"; ?>