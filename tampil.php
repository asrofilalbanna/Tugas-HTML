<?php namespace read;

class allTampil
{
	public function jalan()
	{
		return "SELECT * FROM ";
	}
}

class tampilArt extends allTampil //awal Home full artikel
{
	
	public static function tampilArtikel($id)
	{	
		$allTampil = new allTampil; //manggil class allTampil
		
		$jalan = $allTampil->jalan().$id;
		$query  = mysql_query($jalan);
		while ($row=mysql_fetch_array($query))
	 	$data[]=$row;
	  	return $data;

	}
}

class tampilItm extends allTampil //readmore
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

class tampilPop extends allTampil //popular
{	
	
	public static function tampilPopular($id)
	{	

		$allTampil = new allTampil;
		$jalan = $allTampil->jalan().$id." ORDER BY art_viewer DESC limit 5";
		// $jalan = $allTampil->jalan().$id;

		$query  = mysql_query($jalan);
		$data = array();
		while ($row=mysql_fetch_array($query)) 
		{
			array_push($data, $row);
		}
	  	return $data;
	  	// return $query;
	}
}

?>
