<?php namespace update;

class allTampil
{
	public function jalan($tabel)
	{
		return "UPDATE $tabel SET";
	}
}

class tambahViw extends allTampil
{
	
	public static function tambahView($tabel, $hit, $id)
	{	
		$allTampil = new allTampil;
		$jalan = $allTampil->jalan($tabel). " art_viewer =". $hit . " WHERE id_artikel =" . $id;
		$query  = mysql_query($jalan);
	}
}


?>
