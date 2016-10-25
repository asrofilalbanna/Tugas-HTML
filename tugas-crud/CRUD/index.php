<?php 
session_start();
include_once '../database/config.php';
mysql_select_db('cendana');
if(isset($_SESSION['userdata'])) {
$sql = "select pgw.id_pegawai, pgw.nama_pegawai, pgw.tlp_pegawai, kot.nama_kota, jk.kelamin, pos.nama_posisi 
from tb_pegawai pgw, tb_posisi pos, tb_kota kot, tb_jk jk 
where pgw.id_posisi = pos.id_posisi and pgw.kota_pegawai=kot.id_kota and pgw.jk_pegawai=jk.id_jk";

if (@$_GET['q']!=""){
	$search = $_GET['q'];
	$sql .= " and (pgw.nama_pegawai like '%{$search}%' or pos.nama_posisi like '%{$search}%')";
} 

// echo $sql;

// exit();

$query = mysql_query($sql);	


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7/css/bootstrap.min.css" crossorigin="anonymous">

</head>
<body style="margin-top: 10px;">
<div class="container">
<!-- <a href="logut.php">Keluar</a> -->
<form action="index.php" method="get" accept-charset="utf-8">
<div class="row">
	<div class="col-md-3">
		<div class="btn-group" role="group">
		   <a href="create.php" style="text-decoration: none;" >
		   		<button type="button" class="btn btn-info dropdown-toggle">Tambah data</button>
		   </a>
		</div>
		<div class="btn-group" role="group">
		   <a href="logut.php" style="text-decoration: none;" >
		   		<button type="button" class="btn btn-danger dropdown-toggle">Keluar</button>
		   </a>
		</div>
	</div>
	<div class="col-md-3 col-md-offset-6">
	    <div class="input-group-btn">
	      <input id="search" type="text" class="form-control" placeholder="Search for..." name="q">
	    </div><!-- /input-group -->
	     <span class="input-group-btn">
	        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true" style="color: darkgrey"></span></button>
	      </span>
	 </div><!-- /.col-lg-6 -->
 </div>
</form>
<br>
<table class="table table-hover table-condensed table-bordered">
	<thead>
		<tr>
			<!-- <th>ID Pegawai</th>  -->
			<th class="success text-center">Nama</th>
			<th class="success text-center" >Telepon</th> 
			<th class="success text-center">Kota Asal</th> 
			<th class="success text-center">Jenis Kelamin</th> 
			<th class="success text-center">Posisi</th>
			<th class="success text-center">Aksi</th>
		</tr>
		</thead>
<?php 
while ($data = mysql_fetch_array($query)){
?>
	
		<div class="nama">
		<tbody name="form">
			<tr class="delete_mem">
				<!-- <td><?php echo $data['id_pegawai']?></td>  -->
				<td><a href="detail.php?id=<?php echo $data['id_pegawai']?>"><?php echo $data['nama_pegawai']?></a></td>
				<td><?php echo $data['tlp_pegawai']?></td> 
				<td><?php echo $data['nama_kota']?></td> 
				<td><?php echo $data['kelamin']?></td> 
				<td><?php echo $data['nama_posisi']?></td>
				<td align="center">
					<a href="update.php?id=<?php echo $data['id_pegawai']?>"><button type="button" class="btn btn-xs btn-warning">Update</button></a>
					<button type="button" class="btn btn-xs btn-danger hapus" id="<?php echo $data['id_pegawai']?>">Hapus</button>
					<!-- <a id="tdelete" title="Hapus"><button  type="button" class="btn btn-xs btn-danger hapus" id="<?php echo $data['id_pegawai']?>">Hapus</button></a> -->
				</td>
			</tr>
		</tbody>
		</div>	

<?php } ?>
	</table>
</div>

<script src="../bootstrap/bootstrap-3.3.7/js/jquery-3.1.1.min.js" crossorigin="anonymous"></script>

<script src="../bootstrap/bootstrap-3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script src="../bootstrap/bootstrap-3.3.7/js/script.js" crossorigin="anonymous"></script>

</body>
</html>
<?php } else { 
			header("location:login.php");
		} 
?>