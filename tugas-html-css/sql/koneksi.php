<?php namespace connect;

class koneksi{

	public static function connectMySql(){ //konek
		
		mysql_connect('localhost','root', '');
		mysql_select_db('team_cleveland') or die("Database Tidak Ada");
	}
}
 ?>