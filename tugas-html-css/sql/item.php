<?php namespace more;

class allTampil
{
	public function jalan()
	{
		return "SELECT * FROM ";
	}
}

class tampilItm extends allTampil
{
	
	public static function tampilItem($tabel, $id)
	{	
		$allTampil = new allTampil;
		$jalan = $allTampil->jalan().$tabel. " WHERE id_artikel=". $id;

		$query  = mysql_query($jalan);
		while ($row=mysql_fetch_array($query))
	  	return $row;

	}
}


?>
