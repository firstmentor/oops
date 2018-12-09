<?php

class database{

	public $host = DB_HOST;
	public $user = DB_USER;
	public $pass = DB_PASS;
	public $db_name = DB_NAME;

    public $link;
    public $error;

    public function __construct(){
    	$this->connet();
    }
	private function connet(){

     $this->link = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

     if (!$this->link){

     	$this->error =" connection failed" . $this->link->connect_error;
     }

	}
// Selecting Query
	public function select($query){

		$result = $this->link->query($query);

		if ($result->num_rows > 0){

			return $result;
		}
		else{

			return false;
		}


	}
// //Inserting Query
// 	public function insert($query){

// 		$insert =$htis->link->query($query);
// 		if ($insert){

// 		header ('location: index.php?insert = Post Inserted...');	
// 		}
// 		else{
// 			echo "Did not insert";
// 		}
// 	}

// //Update query	
// 	public function update($query){

// 		$update =$htis->link->query($query);
// 		if ($update){

// 		header ('location: index.php?insert = Post update...');	
// 		}
// 		else{
// 			echo "Did not update";
// 		}
// 	}	

// //Deleting Query	

// 	public function delete($query){

// 		$delete =$htis->link->query($query);
// 		if ($delete){

// 		header ('location: index.php?insert = Post delete...');	
// 		}
// 		else{
// 			echo "Did not delete";
// 		}
// 	}












}






