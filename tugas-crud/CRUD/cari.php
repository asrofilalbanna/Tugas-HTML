<?php
include_once '../database/config.php';
mysql_select_db('cendana');
$title=$_POST["title"];
 
  
$result=mysql_query("SELECT * FROM contoh where nama like '%$title%'");
$found=mysql_num_rows($result);

if($title==""){
	echo "<li>Find your key</li>";
} else {
if($found>0){
while($row=mysql_fetch_array($result)){
echo $row['nama'];
}   
}else{
echo "<li>No Tutorial Found</li>";
}
}
// ajax search
?>