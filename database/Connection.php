<?php 
class Connection{

	protected $isConn;
	protected $datab;
	protected $transaction;

								//un phpmyadmin    pass phpmyadmin     ip 				dbname
	public function __construct($username="oxew069ybp3wycy0", $password ="vsnyzge99rpucqd5", $host="edo4plet5mhv93s3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", $dbname="uwkg1nrcjdwjfbg7", $options = []){
		
		$this->isConn = TRUE;
		try{
			$this->datab = new PDO("mysql:host={$host};  dbname={$dbname}; charset=utf8", $username, $password, $options);
			$this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->transaction = $this->datab;
			$this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			//echo 'Connected Successfully!!!';

		}catch(PDOException $e){
			throw new Exception($e->getMessage());			
		}

	}//endDefaultConstructor
 

	//disconnect from db
	public function Disconnect(){
		$this->datab = NULL;//close connection in PDO
		$this->isConn = FALSE;
	}//endDisconnectFunction


	


}//endClassDatabase

 //$con = new Connection(); //for debugging only
//echo '	debug connection';
 ?>