<?php include_once "head.php"; ?>

	<div id="container_content">
<?php include_once "sidebar.php"; ?>
		
		<div id="mainbar">
			<div class="artikel">
				
<?php 
$id   = $_GET['id']; $tabel = $_GET['hal'];
$data = read\tampilItm::tampilItem($tabel, $id);
$tgl  = $data['art_tgl']; 
$hit  = $data['art_viewer']+1;
update\tambahViw::tambahView($tabel, $hit, $id);
?>
				<div class="artikel-item-klik">
						<h1 class="artikel-judul-klik"><?php echo $data['art_judul']; ?><h1>
						<div class="artikel-tgl-klik">Date : <i><?php echo date("F j,Y", strtotime($tgl));?></i></div>
						<div class="artikel-view-klik">Views : <i><?php echo $data['art_viewer'];?></i></div>
						<div class="artikel-gambar"><img src="<?php echo $data['art_gambar'];?>"/></div>
						<p class="artikel-isi-klik">
							<?php echo $data['art_isi'];?>
						</p>
				</div>

			</div> <!-- artikel -->
		</div> <!-- mainbar -->
	</div> <!-- content -->
	<div class="clearfix"></div>

<?php include_once "foot.php"; ?>