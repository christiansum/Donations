<?php
class DB_Connect {
	protected $host;
	protected $username;
	protected $password;
	protected $db;
	protected $port;
	protected $connection;

	public function __construct($host = null, $username = null, $password = null, $db = null, $port = null){
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->db = $db;
		$this->port = $port;
	}

	public function connect(){
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->db, $this->port);
        if ($this->connection->connect_error) {
            return false;
        }
        return true;
    }

    public function query($sql = null){
    	error_log( $sql,0);
    	$result = $this->connection->query($sql);
    	if($result){
    		$values = $result->fetch_array(MYSQLI_ASSOC);
    		return $values;
    	}
    	return false;
    	
    }
}
?>