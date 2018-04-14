<?php 
class Login{
	var $username;
	var $password;
	function __construct($username,$password){
		$this->username=$username;
		echo $username;
		$this->password=$password;
	}

	function check_user($username,$password){
		$conn = mysqli_connect("localhost","root","zukiswa","funda");
		$query = mysqli_query($conn,"select * from funda_users where email = '{$this->username}' or cell_number = '{$this->username}' and password = '{$this->password}'");
			//$query = mysqli_query($conn, $statement);
			//$result = mysqli_result($query);
			$row_cnt = mysqli_num_rows($query);
			//echo $row_cnt;
/*			if($row_cnt>0){
				return true;
			}
			else{
				return false;
			}*/
			return ($row_cnt>0)?true:false;
		}
	function user_exists(){
	
		$result = $this->check_user($this->username,md5($this->password));
		return $result;
	}	
}
?>                                                                                                  