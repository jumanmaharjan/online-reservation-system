<?php
class Base{
	private function connect_db(){
		$con=new MySQLi('localhost','root', '', 'db_moviereserve');
		if($con->error){
			echo $con->error;
		}
		else{
			return $con;
		}
	}
	public function admin($email, $password){
		$con=$this->connect_db();
		$sql="SELECT * FROM tb_personal WHERE email='".$email."' AND password='".$password."'";
		$res=$con->query($sql);
	
		if($res->num_rows>0){
			$row=$res->fetch_object();
			session_start();
			$_SESSION['email']=$row->email;
			$_SESSION['password']=$row->password;
			
			return  'success';
		}
		else{
			return 'fail';
		}
	}
}
?>