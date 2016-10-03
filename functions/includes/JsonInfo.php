<?php
include_once("DB_Connect.php");
class JsonInfo{
	private function provide(){
		$DBObject = new DB_Connect("localhost","root","fr33dom$","db_donations",3306);
		$DBObject->connect();

		$sql = "SELECT 
					tu.first_lastname as lastname,
				    tu.first_name as name,
				    tu.email as email,
				    tu.id_document as id_document,
				    tco.name as country,
				    tdept.name as department,
				    tins.name as institution,
				    tdo.amount as donation_amount,
				    tdo.created_dt as date_of_donation
				FROM tbl_users tu
				inner join tbl_departments tdept on tdept.id_dept = tu.id_dept
				inner join tbl_countries tco on tco.id_country = tu.id_country
				inner join tbl_donations tdo on tdo.id_user = tu.id
				inner join tbl_institutions tins on tins.id_ins = tdo.id_ins";

		if ($DBObject->query($sql)){
			return $DBObject->query($sql);
		}
		return false;
	}

	public function getJson(){
		if($this->provide()){
			return $json = json_encode(array($this->provide()));
		}
		return false;
	}
}
?>