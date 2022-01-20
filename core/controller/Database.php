<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b0ff30c08492b9";$this->pass="d8858879";$this->host="us-cdbr-east-05.cleardb.net";$this->ddbb="heroku_df7ad7a7f57ac57";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
